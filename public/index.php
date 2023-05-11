<?php declare(strict_types=1);

use Sporky\Core\Http\Kernel;
use Sporky\Core\Http\Request;

require_once '../vendor/autoload.php';

$request = Request::createFromGlobals();

$kernel = new Kernel;
$response = $kernel->handle($request);
$response->send();