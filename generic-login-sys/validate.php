<?php
	$myemail = "m.benbaziz@hotmail.co.uk";
	$mypassword = "password";
	
	if(isset($_POST['login'])) {	
		
		$email = $_POST['email'];
		$password = $_POST['password'];	
		
		if($email == $myemail && $password == $mypassword) {
				
			if( isset($_POST['remember']) ) {
				
				setcookie('email', $email, time()+60*60*7);
				setcookie('password', $password, time()+60*60*7);
				
			}
			
			session_start();
			$_SESSION['email'] = $email;
			header("location: welcome.php");
			
		} else {
			
			echo "Email or Password is Invalid. <br> click <a href=\"login.php\">here</a> to try again";
			
		}
	} else {
		header("location: login.php");
	}