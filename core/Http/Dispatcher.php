<?php

namespace Sporky\Core\Http;

use Sporky\Core\Http\Response;

class Dispatcher
{
    private RouteCollector $routeCollector;

    public function __construct(callable $callable)
    {
        $this->routeCollector = new RouteCollector;

        return $callable($this->routeCollector);
    }

    public function dispatch()
    {
        foreach($this->routeCollector->getRoutes() as $method) {
            $method['handler']();
        }
    }
}