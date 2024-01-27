<?php

namespace engine;

class Router {

    protected $routes = [];

    public function add($method, $uri, $controller) {
        // reduce to assoc array
        $this->routes[] = compact('uri', 'controller', 'method');
    }

    public function get($uri, $controller) {
        $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller) {
        $this->add('POST', $uri, $controller);
    }

    public function put($uri, $controller) {
        $this->add('PUT', $uri, $controller);
    }

    public function patch($uri, $controller) {
        $this->add('PATCH', $uri, $controller);
    }

    public function delete($uri, $controller) {
        $this->add('DELETE', $uri, $controller);
    }

    public function route($uri, $method) {
        foreach ($this->routes as $route) {
            if (DOMAIN . $route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                return require root($route['controller']);
            }
        }
        abort();
    }
}

?>