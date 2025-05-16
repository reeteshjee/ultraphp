<?php

// Generate a URL relative to the base URL
function generateUrl($path = '') {
    $baseUrl = getConfig('base_url');  // Assuming getConfig() retrieves configuration values
    return rtrim($baseUrl, '/') . '/' . ltrim($path, '/');
}

// Redirect to a specific URL
function redirectTo($path) {
    header('Location: ' . generateUrl($path));
    exit;
}

// Get Current URL Full
function getFullURL(){
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
    $currentUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    return $currentUrl;
}

//Get Current URL without Query Params
function getURL(){
    $currentUrl = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $parsedUrl = parse_url($currentUrl);
    $baseUrl = $parsedUrl['scheme'] . '://' . $parsedUrl['host'] . $parsedUrl['path'];
    return $baseUrl;
}

function baseURL(){
    global $config;
    return $config['base_url'];
}

function getLink($path){
    return baseURL().$path;
}