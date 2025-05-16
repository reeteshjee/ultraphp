<?php

require_once __DIR__ . '/../autoload.php';

use Core\Ultra;


//check for cache
if(getConfig()['cache']){
    $cachefile = getCacheFile();
    if(file_exists($cachefile)){
        echo file_get_contents(getCacheFile());
        exit;
    }
}


require __DIR__.'/../routes.php';

// Set error reporting based on the debug mode
if ($config['debug']) {
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL); // Show all errors and warnings
} else {
    ini_set('display_errors', '0');
    ini_set('display_startup_errors', '0');
    error_reporting(0); // Suppress all errors
}


// Initialize the framework
$framework = new Ultra($db,$config,$route);




// Set timezone
date_default_timezone_set($config['timezone']);


ob_start();
$framework->run();
$html = ob_get_clean();

//minify if production
if(isProduction()){
    $html = minify($html);
}

//caching
if($config['cache']){
    file_put_contents(getCacheFile(), $html);
}   

echo $html;
exit;




