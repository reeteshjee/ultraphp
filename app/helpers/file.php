<?php

// Upload a file to a specific destination
function fileUpload($file, $destination) {
    if (move_uploaded_file($file['tmp_name'], $destination)) {
        return true;
    }
    return false;
}

// Read the contents of a file
function fileRead($filePath) {
    if (file_exists($filePath)) {
        return file_get_contents($filePath);
    }
    return false;
}

// Write data to a file
function fileWrite($filePath, $data) {
    return file_put_contents($filePath, $data);
}

// Delete a file
function fileDelete($filePath) {
    if (file_exists($filePath)) {
        return unlink($filePath);
    }
    return false;
}
