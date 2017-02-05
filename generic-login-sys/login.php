<?php 
	if(isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
		$email = $_COOKIE['email'];
		$password = $_COOKIE['password'];
		echo "<script>
			document.getElementById('email').value = '$email';
			document.getElementById('password').value = '$password';
		</script>";
	}
?>
<form method="post" action="validate.php">
<fieldset>
<legend>Login to the system</legend>
	<div class="group email">
		<p>
			<label for="email">Email</label>
		</p>
		<p>
			<input type="email" name="email" placeholder="email">
		</p>
	</div>
	<div class="group password">
		<p>
			<label for="email">Password</label>
		</p>
		<p>
			<input type="password" name="password" 
				placeholder="password">
		</p>
	</div>
	<p>
		<input type="checkbox" name="remember" value="1">Remember Me
	</p>
	<p>
		<input type="submit" value="login" name="login">
	</p>
</fieldset>
</form>