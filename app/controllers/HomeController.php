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

	public function resume()
	{
		return View::make('resume');
	}

	public function portfolio()
	{
		return View::make('portfolio');
	}


	public function login()
	{
		return View::make('login');
	}


	//GET
	public function loginForm()
	{
		//Grab all input

		$email = Input::get('email');
		$password = Input::get('password');

		//Validate input fields

		//Attempt login

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
		//if (Auth::attempt(array(Input::get('email') => $email, Input::get('password') => $password))) 
		    return Redirect::intended('/');
		} else {
			Session::flash('errorMessage', 'Failed to Login');
			return Redirect::back()->withInput();
		}

	}

	//POST
	public function checkUser()
	{
		if (Auth::check()) {
			return View::make('/');
		} else {
		    // user not NOT logged in
			return Redirect::back();
		}
	}

	public function logOut()
	{
		Auth::logout();
	}

}
