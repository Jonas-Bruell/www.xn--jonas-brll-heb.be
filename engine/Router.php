<?php

namespace engine;

use engine\middleware\Auth;
use engine\middleware\Guest;
use engine\Middleware\Middleware;

class Router
{

    protected $routes = [];

    public function __construct($routes)
    {
        return; //add automation
    }

    public function add($method, $uri, $controller)
    {
        // reduce to assoc array
        $middleware = null;
        $this->routes[] = compact('uri', 'controller', 'method', 'middleware');
        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller)
    {
        return $this->add('POST', $uri, $controller);
    }

    public function put($uri, $controller)
    {
        return $this->add('PUT', $uri, $controller);
    }

    public function patch($uri, $controller)
    {
        return $this->add('PATCH', $uri, $controller);
    }

    public function delete($uri, $controller)
    {
        return $this->add('DELETE', $uri, $controller);
    }

    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
        dd($this->routes);
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if (DOMAIN . $route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                Middleware::resolve($route['middleware']);


                return require root($route['controller']);
            }
        }
        abort();
    }
}

?>