<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// home page
Route::get('/', 'WelcomeController@index');
// about tab
Route::get('aboutPrasad', 'WelcomeController@about');
// writings tab
Route::get('writingsByPrasad', 'WelcomeController@writings');
// speakings tab
Route::get('speaking', 'WelcomeController@speaking');
// academia tab
Route::get('academia', 'WelcomeController@academia');
// getintouch tab
Route::get('getInTouch', 'WelcomeController@getInTouch');
// Photography tab
Route::get('photography', 'WelcomeController@photography');
// Learning From Bhagavad Geeta tab
Route::get('learningsFromBhagavadGeeta', 'WelcomeController@learningsFromBhagavadGeeta');


Route::post('submitContactForm', 'WelcomeController@submitContactForm');

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
