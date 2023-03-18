<?php

use Dingo\Api\Routing\Router;
use Illuminate\Support\Facades\File;

/** @var Router $api */
$api = app(Router::class);
$api->version('v1', ['middleware' => ['api']], function ($api) {
    foreach (File::allFiles(__DIR__ . '/api/v1') as $routeFile) {
        require $routeFile->getPathname();
    }
});
