<?php

// Get the HTTP request method (GET, POST, etc.)
function getMethod() {
    return $_SERVER['REQUEST_METHOD'];
}

// Get the URI of the request
function getRequestUri() {
    return strtok($_SERVER['REQUEST_URI'], '?');
}

// Get a specific GET parameter
function get($key) {
    if($key){
        return isset($_GET[$key]) ? $_GET[$key] : '';
    }else{
        return $_GET;
    }
}

// Get a specific POST parameter
function post($key) {
    if($key){
        return isset($_POST[$key]) ? $_POST[$key] : '';
    }else{
        return $_POST;
    }
    
}
