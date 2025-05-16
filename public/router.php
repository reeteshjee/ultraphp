<?php
// serve/router.php

$publicPath = realpath(__DIR__ . '/../public'); // Full path to /public
$requestUri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$filePath = realpath($publicPath . $requestUri);

// If it's a static file that exists and is inside /public, serve it
if ($filePath && is_file($filePath) && str_starts_with($filePath, $publicPath)) {
    return false; // Let PHP's built-in server serve it
}

// Otherwise route to index.php
require_once $publicPath . '/index.php';
