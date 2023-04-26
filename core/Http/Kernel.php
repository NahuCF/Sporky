<?php

namespace Sporky\Core\Http;

use Sporky\Core\Http\Response;

class Kernel
{
    public function handle(Request $request) : Response
    {
        return new Response('');
    }
}