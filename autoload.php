<?php

// Load the configuration files
$config    = require __DIR__ . '/config/config.php';
$db        = require __DIR__ . '/config/db.php';
$constants = require __DIR__ . '/config/constants.php';

// Autoload helpers
$helpers = ['request', 'response', 'general', 'url', 'cache', 'kheladi'];

foreach ($helpers as $helper) {
    $helperPath = __DIR__ . '/app/helpers/' . $helper . '.php';
    if (file_exists($helperPath)) {
        require_once $helperPath;
    }
}

// PSR-4 Autoloader
spl_autoload_register(function ($class) {
    // Define base directories
    $baseDirs = [
        'Core\\'           => __DIR__ . '/core/',
        'App\\Controllers\\' => __DIR__ . '/app/controllers/',
        'App\\Models\\'      => __DIR__ . '/app/models/',
        'App\\Libraries\\' => __DIR__ . '/app/libraries/',
    ];

    // Loop through namespaces
    foreach ($baseDirs as $prefix => $baseDir) {
        // Does the class use the namespace prefix?
        if (strpos($class, $prefix) === 0) {
            // Get relative class name
            $relativeClass = substr($class, strlen($prefix));

            // Replace namespace with path
            $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

            if (file_exists($file)) {
                require_once $file;
                return;
            }
        }
    }
});
