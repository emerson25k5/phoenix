<?php

use Illuminate\Http\Request;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Contracts\Console\Kernel as ConsoleKernel;
use Illuminate\Contracts\Debug\ExceptionHandler;

define('LARAVEL_START', microtime(true));

// Carrega o autoloader do Composer...
require __DIR__.'/../vendor/autoload.php';

// Cria uma instância do aplicativo Laravel...
$app = require_once __DIR__.'/../bootstrap/app.php';

// Execute o kernel HTTP do aplicativo...
$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
