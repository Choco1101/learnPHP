<?php
session_start();



if($_SERVER["REQUEST_METHOD"] == "POST") {

	$year = time() + (10 * 365 * 24 * 60 * 60);

	$uname			= (isset($_POST["uname"])? $_POST["uname"]: (isset($_GET["uname"])? $_GET["uname"]: ""));

	$tel            = (isset($_POST["tel"])? $_POST["tel"]: (isset($_GET["tel"])? $_GET["tel"]: ""));
	$email          = (isset($_POST["email"])? $_POST["email"]: (isset($_GET["email"])? $_GET["email"]: ""));
	$remember          = (isset($_POST["remember"])? $_POST["remember"]: (isset($_GET["remember"])? $_GET["remember"]: ""));

echo $remember;	

	if($remember == "on") {
			setcookie('remember_uname', $uname, $year);
			setcookie('remember_tel', $tel, $year);
			setcookie('remember_email', $email, $year);
			setcookie('remember_me', $remember, $year);

	} else{
		$past = time() - 100;
	    setcookie('remember_uname', "", $past);
	    setcookie('remember_tel', "", $past);
	    setcookie('remember_email', "", $past);		
		setcookie('remember_me', "off");


	}


}

?>