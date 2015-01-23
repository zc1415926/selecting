<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', [
	'as' => 'pages_path',
	'uses' => 'PagesController@home'
]);

Route::post('signin', [
	'as' => 'signin_path',
	'uses' => 'SessionsController@store'
]);

Route::get('profile', [
	'as' => 'profile_path',
	'uses' => 'ProfileController@index'
]);
