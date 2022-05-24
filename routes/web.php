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

$router->get('/Hola', function () use ($router) {
    return $router->app->version();
});


$router->get('/saludo', function(){
    return'hola estoy creando un saludo';
});

$router->put('/modificar', function(){
    return'hola estoy modificando mi saludo';
});

$router->delete('/borrar', function(){
    return'hola estoy borrando un saludo';
});
