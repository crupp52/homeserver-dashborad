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

$router->get('/', 'WelcomeController@index');

$router->get('/camera', 'CameraController@index');

$router->group(['prefix' => 'camera'], function () use ($router) {
    $router->get('/', [
        'as'   => 'camera.index',
        'uses' => 'CameraController@index'
    ]);
    $router->get('/{id}', [
        'as'   => 'camera.show',
        'uses' => 'CameraController@show'
    ]);
});
