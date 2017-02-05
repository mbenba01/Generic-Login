<?php
	session_start();
	echo "Welcome " . $_SESSION['email'] . "<br><br>";
	echo "<a href=\"logout.php\">Logout</a>";