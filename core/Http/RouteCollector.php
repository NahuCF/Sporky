<?php

namespace Sporky\Core\Http;

class RouteCollector
{
    private $routes = [];

    public function addRoute(string $method, $route, $handler)
    {
        $this->routes[$method][] = [
            'route' => $route,
            'handle' => $handler,
        ];
    }

    public function getRoutes()
    {
        return $this->routes;
    }
}