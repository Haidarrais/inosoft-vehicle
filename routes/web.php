<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    // Route "/api/register
    $router->post('register', 'AuthController@register');

    // Route "/api/login
    $router->post('login', 'AuthController@login');

    $router->get('kendaraan', 'VehicleController@index');
    $router->post('kendaraan', 'VehicleController@store');
    $router->get('kendaraan/{type}', 'VehicleController@getVehicleByType');
});