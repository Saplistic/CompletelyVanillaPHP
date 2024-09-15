<?php 

use Core\Response;

$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if (array_key_exists($uri, $routes)) {
    
    $title = $uri; // just a default value for page tab title

    require base_path($routes[$uri]);
    
} else {
    
    $title = '404 not found';
    abort();
}


function abort($statusCode = Response::NOT_FOUND) {

    http_response_code($statusCode);
    view("{$statusCode}.view.php");

    die();
}
