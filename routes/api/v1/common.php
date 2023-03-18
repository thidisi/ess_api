<?php

use App\Api\V1\Controllers\UserController;

/** @var Dingo\Api\Routing\Router $api */
$api->group(['middleware' => 'jwt.auth'], function ($api) {
    $api->group(['prefix' => 'user'], function ($api) {
        $api->get('/profile', [UserController::class, 'getProfile']);
    });
});