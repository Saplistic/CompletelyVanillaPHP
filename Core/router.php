<?php 

namespace Core;

use Core\Response;

class Router
{
    protected $routes = [];

    protected function add($uri, $method, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }


    function get($uri, $controller) 
    {
        $this->add($uri, 'GET', $controller);
    }

    function post($uri, $controller) 
    {
        $this->add($uri, 'POST', $controller);
    }

    function delete($uri, $controller) 
    {
        $this->add($uri, 'DELETE', $controller);
    }

    function patch($uri, $controller) 
    {
        $this->add($uri, 'PATCH', $controller);
    }

    function routeTo($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                return require base_path($route['controller']);
            }
        }

        abort();
    }


    function abort($statusCode = Response::NOT_FOUND) {

        http_response_code($statusCode);
        
        view("{$statusCode}.view.php", [
            'title' => $statusCode
        ]);
    
        die();
    }
    
}
