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
$router->get('/', function() use ($router) {
	return view('index');
});

$router->get('/game/dashboard', [
	'uses' => 'GameController@dashboard',
	'as' => 'game.dashboard'
]);

$router->get('/game/listing', [
	'uses' => 'GameController@listing',
	'as' => 'game.listing'
]);

$router->get('/game[/{id}]', [
	'uses' => 'GameController@index',
	'as' => 'game.index'
]);