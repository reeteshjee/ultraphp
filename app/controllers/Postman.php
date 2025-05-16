<?php

class Postman extends Ultra{
	public function __construct(){
		if(getConfig()['environment']!='development'){
			view('error/404');
			exit;
		}
	}

	public function index(){
		$data['endpoints'] = $this->getRoutes('../routes.php');
		view('postman/index',$data);
	}

	public function request(){
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		    $requestData = json_decode(file_get_contents('php://input'), true);
		    $ch = curl_init();
		    
		    $url = $requestData['url'];
		    if (!empty($requestData['params'])) {
		        $queryString = http_build_query($requestData['params']);
		        $url .= (strpos($url, '?') !== false ? '&' : '?') . $queryString;
		    }
		    
		    $headers = [];
		    if (!empty($requestData['headers'])) {
		        foreach ($requestData['headers'] as $key => $value) {
		            $headers[] = "$key: $value";
		        }
		    }
		    
		    curl_setopt_array($ch, [
		        CURLOPT_URL => $url,
		        CURLOPT_RETURNTRANSFER => true,
		        CURLOPT_CUSTOMREQUEST => $requestData['method'],
		        CURLOPT_FOLLOWLOCATION => true,
		        CURLOPT_TIMEOUT => 30,
		        CURLOPT_HTTPHEADER => $headers
		    ]);

		    
		    if (in_array($requestData['method'], ['POST', 'PUT', 'PATCH'])) {
		        curl_setopt($ch, CURLOPT_POSTFIELDS, $requestData['body']);
		    }
		    
		    $startTime = microtime(true);
		    $response = curl_exec($ch);
		    $duration = round((microtime(true) - $startTime) * 1000);
		    
		    $result = [
		        'status' => curl_getinfo($ch, CURLINFO_HTTP_CODE),
		        'contentType' => curl_getinfo($ch, CURLINFO_CONTENT_TYPE),
		        'duration' => $duration,
		        'response' => $response,
		        'error' => curl_error($ch)
		    ];
		    
		    curl_close($ch);
		    header('Content-Type: application/json');
		    echo json_encode($result);
		    exit;
		}
	}

	private function getRoutes($routeFilePath) {
	    if (!file_exists($routeFilePath)) {
	        throw new Exception("Route file not found at: $routeFilePath");
	    }

	    // Include the route file
	    require $routeFilePath;

	    // Ensure the $route variable is defined
	    if (!isset($route) || !is_array($route)) {
	        throw new Exception("No valid route definitions found in the file.");
	    }

	    $groupedRoutes = [];

	    foreach ($route as $ro) {
	        [$method, $uri, $controller, $action] = $ro;
	        if($controller!='postman'){
	        	// Group by controller
		        $groupedRoutes[$controller][] = [
		            'method' => $method,
		            'uri' => $uri,
		            'action' => $action
		        ];
		    }
	    }

	    return $groupedRoutes;
	}


}