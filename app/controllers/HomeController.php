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

	public function blogHome()
	{
		return View::make('home-blog');
	}

	public function blogAbout()
	{
		return View::make('about-blog');
	}

	public function blogContact()
	{
		return View::make('contact-blog');

			// Check for empty fields
			if(empty($_POST['name'])  		||
			   empty($_POST['email']) 		||
			   empty($_POST['phone']) 		||
			   empty($_POST['message'])	||
			   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
			   {
				echo "No arguments Provided!";
				return false;
			   }
				
			$name = $_POST['name'];
			$email_address = $_POST['email'];
			$phone = $_POST['phone'];
			$message = $_POST['message'];
				
			// Create the email and send the message
			$to = 'yourname@yourdomain.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
			$email_subject = "Website Contact Form:  $name";
			$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
			$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
			$headers .= "Reply-To: $email_address";	
			mail($to,$email_subject,$email_body,$headers);
			return true;			
		
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
			return Redirect::action('HomeController@blogHome');
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
		return Redirect::action('HomeController@blogHome');
	}

}
