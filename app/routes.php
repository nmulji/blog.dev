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

Route::get('/', function()
{
	return View::make('hello');
});

// Route::get('/resume', 'HomeController@resume');

Route::get('/portfolio', 'HomeController@portfolio');

Route::get('/rolldice/{guess}', 'HomeController@rollDice');

Route::resource('posts', 'PostsController');

Route::post('/login', 'HomeController@loginForm');

Route::get('/logout', 'HomeController@logOut');

Route::get('/blog', 'HomeController@blogHome');

Route::get('/about', 'HomeController@blogAbout');

Route::get('/contact', 'HomeController@blogContact');