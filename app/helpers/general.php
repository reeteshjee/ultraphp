<?php

// Clean a string to prevent XSS and other attacks
function clean($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

// Check if the request is an AJAX request
function isAjax() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
}

// Generate a unique token (e.g., CSRF token)
function tokenify($length = 32) {
    return bin2hex(random_bytes($length));
}

// Validate an email address
function isEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// Validate a URL
function isURL($url) {
    return filter_var($url, FILTER_VALIDATE_URL) !== false;
}

function d($var){
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}
function dd($var){
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    exit;
}

function getConfig(){
    global $config;
    return $config;
}

function minify($html) {
    $html = preg_replace('/<!--.*?-->/s', '', $html);
    $html = preg_replace('/\s{2,}/', ' ', $html);
    $html = preg_replace('/>\s+</', '><', $html);
    return $html;
}
function isProduction(){
    return (getConfig()['environment']=='production')? true:false;
}

