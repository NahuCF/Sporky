<?php

namespace Sporky\Core\Http;

class Response
{
    public function __construct(
        private ?string $content,
        private int $code = 200,
        private array $headers = [],
    )
    {}

    public function send() 
    {
        echo $this->content;
    }
}