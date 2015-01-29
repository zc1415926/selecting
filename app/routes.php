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
	'as' => 'home',
	'uses' => 'PagesController@home'
]);

Route::get('register', [
	'as' => 'register_path',
	'uses' => 'RegistrationController@create'
]);

Route::post('register', [
	'as' => 'register_path',
	'uses' => 'RegistrationController@store'
]);

//-------------------------------------
Route::get('login', [
	'as' => 'login_path',
	'uses' => 'SessionsController@create'
]);

Route::post('login', [
	'as' => 'login_path',
	'uses' => 'SessionsController@store'
]);

Route::get('logout', [
	'as' => 'logout_path',
	'uses' => 'SessionsController@destroy'
]);
//-----------------------------------------------
Route::get('profile', [
	'as' => 'profile_path',
	'uses' => 'ProfileController@index'
]);

/*Route::get('ordinary_profile', [
	'as' => 'ordinary_profile_path',
	'uses' => 'ProfileController@ordinary_index'
]);

Route::get('admin_profile', [
	'as' => 'admin_profile_path',
	'uses' => 'ProfileController@admin_index'
]);*/
//----------------------------------------------
Route::get('students', [
	'as' => 'students_path',
	'uses' => 'StudentsController@index'
]);
//----------------------------------------------
Route::get('teachers', [
	'as' => 'teachers_path',
	'uses' => 'TeachersController@index'
]);

Route::get('addteacher', [
	'as' => 'addteacher_path',
	'uses' => 'TeachersController@add'
]);