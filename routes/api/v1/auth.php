<?php

use App\Api\V1\Controllers\Auth\LoginController;
use App\Api\V1\Controllers\Auth\LogoutController;

/** @var Dingo\Api\Routing\Router $api */
$api->group(['prefix' => 'auth'], function ($api) {
    $api->post('login', [LoginController::class, 'login']);
    $api->post('logout', LogoutController::class);
});
