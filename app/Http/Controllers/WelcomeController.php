<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index(){

		return view('index');
	}

	public function about(){
		return view('about');
	}

	public function writings(){
		return view('writings');
	}
	public function speaking(){
		return view('speaking');
	}
	public function academia(){
		return view('academia');
	}
	public function getInTouch(){
		return view('getInTouch');
	}



	public function submitContactForm(){
		$userName = $_POST['userName'];
		$emailId = $_POST['userEmail'];
// Input::get
		$subjectTo = 'Newsletter subscription';
		$adminEmail = 'kiran@karmacircles.com';

	}

}
