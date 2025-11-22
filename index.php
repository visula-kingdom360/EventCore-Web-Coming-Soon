<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Maintenance mode check
if (file_exists($maintenance = __DIR__ . '/../Main/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Autoloader and bootstrap
require __DIR__ . '/../Main/vendor/autoload.php';
$app = require_once __DIR__ . '/../Main/bootstrap/app.php';

// Handle the request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
