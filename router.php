<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => 'home.view.php',
    '/home' => 'home.view.php',
    '/about' => 'about.view.php',
    '/contact' => 'contact.view.php'
];

if (array_key_exists($uri, $routes)) {

    $title = $uri; // just a default value for page tab title

    require 'views/' . $routes[$uri];
    
} else {

    http_response_code(404);

    $title = '404 not found';
    require 'views/404.view.php';
}