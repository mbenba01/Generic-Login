<?php
	session_start();
	echo "Welcome " . $_SESSION['email'];
	echo "Logout";