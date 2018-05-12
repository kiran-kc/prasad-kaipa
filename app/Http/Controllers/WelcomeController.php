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
		 // Iterate form fields --------------------------------------------------
	  $userName = $_POST["userName"];
	  $userEmail = $_POST["userEmail"];
	  $email = str_replace(":", "", $email);

	  $lines = "You have received a newsletter signup from $userEmail<P>Be sure to add it to the list.<p>";

	  $strTo = "kiran@karmacircles.com";
	  $strSub = "Prasad Kaipa Newsletter Signup";
	  $strMailbody = $lines;
	  $strFrom = $userEmail;
	  
	  if (mail($strTo,$strSub,$strMailbody,"From:$strFrom\r\nReply-to: $strFrom\r\nContent-type: text/html; charset=us-ascii")){
	    $response = "S";
	  } else {
	    $response = "F";
	  }

	}


	// if ($response == "S") { 
 //  		echo "<script>
 //    			alert('We have added you to our newsletter signup.');
 //  				window.location.href='index.html';
	// 		</script>";
 // 	else { 
 //  		echo "<script>
	// 			alert('failed');
	// 		</script>";
	// 	}

	// }
}
