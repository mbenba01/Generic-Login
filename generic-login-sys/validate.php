<?php

	$myemail = "m.benbaziz@hotmail.co.uk";
	$mypassword = "password";

	if(isset($_POST['login'])) {
		
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		if($email == $myemail && $password == $mypassword) {
			if( isset($_POST['remember']) ):
				setcookie('email', $email, time()*60*60*7);
				header("location: welcome.php");
			endif;
		} else {
			echo "Email or Password is Invalid. <br> click <a href=\"login.php\">here</a> to try again";
		}
	} else {
		header("location: login.php");
	}