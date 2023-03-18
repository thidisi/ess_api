<?php

/** @var Dingo\Api\Routing\Router $api */
$api->group(['middleware' => ['jwt.auth', 'check.role.admin']], function ($api) {
    $api->group(['prefix' => 'user'], function ($api) {
    });
});
