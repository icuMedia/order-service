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

use App\Http\Controllers\OrderController;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'orders'], function () use ($router) {
    $router->get('/', ['as' => 'orders.index', 'uses' => 'OrderController@index']);
    $router->get('/{id}', ['as' => 'orders.show', 'uses' => 'OrderController@show']);
});


