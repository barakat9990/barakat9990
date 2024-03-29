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
  $router->get('authors1',  ['uses' => 'AuthorController@showAllAuthors']);

  $router->get('authors1/{VIN}', ['uses' => 'AuthorController@showOneAuthor']);

  $router->post('authors1', ['uses' => 'AuthorController@create']);

  $router->delete('authors1/{VIN}', ['uses' => 'AuthorController@delete']);

  $router->put('authors1/{VIN}', ['uses' => 'AuthorController@update']);

  //  $router::put('/authors1/{VIN}','AuthorController@update');
  
 
 
});
