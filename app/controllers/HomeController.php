<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function rollDice($guess)
	{
	$randomNumber = rand(1, 6);
	$message = ($guess == $randomNumber) ? 'You won!' : 'You lost!';
	$data = ['guess' => $guess, 'randomNumber' => $randomNumber, 'message' => $message];
	return View::make('roll-dice')->with($data);
	}

}
