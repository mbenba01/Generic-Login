<?php

	$myemail = "m.benbaziz@hotmail.co.uk";
	$mypassword = "password";

	if(isset($_POST['login'])) {
		
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		if($email == $myemail && $password == $mypassword) {
			$remember = $_POST['remember'];
			setcookie('email', $email, time()*60*60*7);
		} else {
			echo "Email or Password is Invalid. <br> click <a href=\"login.php\">here</a> to try again";
		}
	} else {
		header("location: login.php");
	}