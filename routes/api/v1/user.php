<?php

/** @var Dingo\Api\Routing\Router $api */
$api->group(['middleware' => ['jwt.auth','check.role.user']], function ($api) {
});
