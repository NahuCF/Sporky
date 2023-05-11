<?php

namespace Sporky\Core\Http;

use Sporky\Core\Http\Response;

class Kernel
{
    public function handle(Request $request) : Response
    {
        $dispatcher = new Dispatcher(function(RouteCollector $r) {
            $r->addRoute('GET', '/', function() {
                echo "Working";
            });
        });

        $dispatcher->dispatch();

        return new Response('');
    }
}