<?php
// Point to the /public folder for serving static files
$publicPath = __DIR__ . '/public';
$url = parse_url($_SERVER['REQUEST_URI']);
$file = $publicPath . $url['path'];

if (php_sapi_name() === 'cli-server' && is_file($file)) {
    return false; // Let PHP's built-in server serve static files
}

// Load the main index.php from /public
require_once 'index.php';
