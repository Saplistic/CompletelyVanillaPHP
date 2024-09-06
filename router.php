<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => 'views/home.view.php',
    '/home' => 'views/home.view.php',
    '/about' => 'views/about.view.php',
    '/contact' => 'views/contact.view.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php'
];

if (array_key_exists($uri, $routes)) {

    $title = $uri; // just a default value for page tab title

    require $routes[$uri];
    
} else {

    $title = '404 not found';
    abort();
}

function abort($statusCode = Response::NOT_FOUND) {

    http_response_code($statusCode);
    
    require "views/{$statusCode}.view.php";

    die();
}