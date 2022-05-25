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


$router->get('/saludo/{nombre}', function($nombre){
    return'hola mi nombre es';
});

$router->get('/calcular/{edad}', function ($edad){
    if ($edad >= 0 && $edad< 18 ) {
        return 'eres menor de edad';
    } elseif ($edad >= 18 && $edad <= 100) {
        return 'eres mayor de edad';
    } else {
        return 'edad erronea';
    }
});

$router->put('/modificar', function(){
    return'hola estoy modificando mi saludo';
});

$router->delete('/borrar', function(){
    return'hola estoy borrando un saludo';
});
