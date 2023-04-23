<?php

namespace Sporky\Core\Http;

class Request
{
    public function __construct(
        public readonly array $get,
        public readonly array $post,
        public readonly array $session,
        public readonly array $files,
        public readonly array $server,
    )
    {}

    public static function createFromGlobals() : static
    {
        return new static($_GET, $_POST, $_SESSION = [], $_FILES, $_SERVER);
    }
}