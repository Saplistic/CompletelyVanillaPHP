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

function abort($statusCode = 404) {
    
    require "views/{$statusCode}.view.php";

    die();
}

if (array_key_exists($uri, $routes)) {

    $title = $uri; // just a default value for page tab title

    require $routes[$uri];
    
} else {

    http_response_code(Response::NOT_FOUND);

    $title = '404 not found';
    abort(Response::NOT_FOUND);
}