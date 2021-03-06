<?php

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

Route::get('/email/index','EmailController@index');
Route::get('/email','EmailController@mail');

Route::get('/user','UserController@index');
Route::post('/user/add', 'UserController@store');
Route::get('user/all', 'UserController@all');
Route::get('user/details', 'UserController@details');
