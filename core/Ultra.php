<?php
namespace Core;
use PDO;
use PDOException;

class Ultra {
    protected static $instance;
    protected $routes = [];
    protected $databases = [];
    protected $config;
    protected $models = [];

    /**
     * Constructor: Initialize the framework with optional database configurations.
     *
     * @param array $dbConfigs Array of database configurations.
     * @param array $config Framework configurations (e.g., base_url).
     */
    public function __construct($dbConfigs = [], $config = [], $routes = []) {
        $this->config = $config;
        $this->routes = $routes;

        if (!empty($dbConfigs)) {
            $this->connectDatabases($dbConfigs);
        }
        self::$instance = $this;
    }


    public static function getInstance(){
        return self::$instance;
    }

    /**
     * Register a route with optional parameters.
     *
     * @param string $method HTTP method (e.g., GET, POST).
     * @param string $path URL path (e.g., /news/{id}).
     * @param string $controller Controller name.
     * @param string $action Controller method to handle the request.
     */
    public function route($method, $path, $controller, $action) {
        $this->routes[] = [
            'method' => strtoupper($method),
            'path' => $path,
            'controller' => $controller,
            'action' => $action
        ];
    }

    /**
     * Dispatch the request to the appropriate route and controller action.
     */
    public function run() {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $requestUri = $this->getCleanedUri();

        foreach ($this->routes as $route) {
            // Check if method matches and URI matches the route
            if ($route[0] === $requestMethod && $this->matchPath($route[1], $requestUri, $params)) {
                $controllerName = 'App\\Controllers\\' . ucwords($route[2]);
                $actionName = $route[3];

                if (class_exists($controllerName)) {
                    $controller = new $controllerName();
                    if (method_exists($controller, $actionName)) {
                        $response = call_user_func([$controller, $actionName], array_values($params));
                        $this->sendResponse($response);
                        return;
                    }
                }
            }
        }

        view('error/404');
    }




    /**
     * Clean and format the request URI.
     *
     * @return string The cleaned URI without base URL or query parameters.
     */
    private function getCleanedUri() {
        $scriptName = dirname($_SERVER['SCRIPT_NAME']);
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Remove script folder from URI
        if (strpos($requestUri, $scriptName) === 0) {
            $requestUri = substr($requestUri, strlen($scriptName));
        }

        $requestUri = '/' . trim($requestUri, '/');
        return $requestUri ?: '/';
    }


    /**
     * Match the request URI with a route path (supports dynamic placeholders like /news/{id}).
     *
     * @param string $routePath The route path to match (e.g., /news/{id}).
     * @param string $requestUri The current request URI.
     * @param array $params Matched parameters are returned here by reference.
     * @return bool True if the path matches; otherwise, false.
     */
    private function matchPath($routePath, $requestUri, &$params) {
        // Define patterns for placeholders
        $placeholders = [
            'any' => '[^/]+',              // Matches any value (except slashes)
            'number' => '[0-9]+',          // Matches numeric values only
            'string' => '[a-zA-Z]+',       // Matches alphabetic strings only
            // You can add more custom types if needed
        ];

        // Replace placeholders like {number}, {string}, {any} with regex patterns
        $routeRegex = '@^' . preg_replace_callback('/\{([^}]+)\}/', function ($matches) use ($placeholders) {
            $type = $matches[1];
            return isset($placeholders[$type]) ? '(?P<' . $type . '>' . $placeholders[$type] . ')' : '(?P<' . $type . '>[^/]+)';
        }, $routePath) . '$@';

        // Check if the request URI matches the route
        if (preg_match($routeRegex, $requestUri, $matches)) {
            $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY); // Extract named parameters
            return true;
        }

        return false;
    }



    /**
     * Send a response to the client.
     *
     * @param mixed $response The response data (array, object, or string).
     * @param int $statusCode HTTP status code (default: 200).
     */
    private function sendResponse($response, $statusCode = 200) {
        http_response_code($statusCode);

        if ($this->config['debug'] ?? false) {
            echo is_array($response) ? json_encode($response, JSON_PRETTY_PRINT) : $response;
        } else {
            echo json_encode(['error' => $response['error'] ?? 'An error occurred']);
        }
    }

    /**
     * Establish connections to multiple databases.
     *
     * @param array $dbConfigs Array of database configurations.
     */
    private function connectDatabases($dbConfigs) {
        foreach ($dbConfigs as $dbName => $config) {
            if($config['connect']){
                try {
                    $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8mb4";
                    $this->databases[$dbName] = new \PDO($dsn, $config['user'], $config['password']);
                    $this->databases[$dbName]->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $e) {
                    $this->sendResponse(['error' => "Database connection failed for '$dbName': " . $e->getMessage()], 500);
                    die();
                }
            }
        }
    }

    /**
     * Get the default database connection.
     *
     * @return PDO|null The default database connection or null if not configured.
     */
    public function getDatabase() {
        return $this->databases['default'] ?? null;
    }

    // Load a view file with optional data
    public function view($view, $data = [], $returnHtml = false) {
        static $globalData = []; // Global data context for all views
        $viewFile = __DIR__.'/../app/views/' . $view . '.php'; // Path to the view file


        if (file_exists($viewFile)) {
            // Merge the incoming data with the global data
            $globalData = array_merge($globalData, $data);

            // Extract all variables from the global data context
            extract($globalData);

            if ($returnHtml) {
                ob_start();
                require $viewFile;
                $output = ob_get_clean();
                return $output;
            } else {
                require $viewFile;
            }
        } else {
            die(json_encode(['error' => "View file '$view' not found"]));
        }
    }



    public function model($model) {

        // Check if the model is already loaded to avoid duplicate instantiation
        if (!isset($this->models[$model])) {
            // Include the model file if it exists
            $modelFile = __DIR__.'/../app/models/' . $model . '.php';
            if (file_exists($modelFile)) {
                require_once $modelFile;

                // Instantiate the QueryBuilder
                $queryBuilder = new QueryBuilder($this->getDatabase());

                // Instantiate the model and store it in the models array
                $this->models[$model] = new $model($queryBuilder);
            } else {
                die("Model file '$model' not found.");
            }
        }

        // Return the model instance
        return $this->models[$model];
    }

    
}
