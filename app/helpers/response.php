<?php
use Core\Ultra;


// Send a JSON response
function json($data, $statusCode = 200) {
    header('Content-Type: application/json');
    http_response_code($statusCode);
    echo json_encode($data);
    exit;
}

// Send a plain text response
function text($text, $statusCode = 200) {
    header('Content-Type: text/plain');
    http_response_code($statusCode);
    echo $text;
    exit;
}

function view($view, $data = [], $html=false) {
    $ultra = new Ultra();
    return $ultra->view($view, $data,$html);
}

// Send a HTML response
function html($html, $statusCode = 200) {
    header('Content-Type: text/html');
    http_response_code($statusCode);
    echo $html;
    exit;
}

// Send a redirect response
function redirect($url, $statusCode = 302) {
    header("Location: $url", true, $statusCode);
    exit;
}

