<form method="post" action="validate.php">
<fieldset>
<legend>Login to the system</legend>
	<div class="group email">
		<p>
			<label for="email">Email</label>
		</p>
		<p>
			<input type="email" name="email" id="name" placeholder="email">
		</p>
	</div>
	<div class="group password">
		<p>
			<label for="password">Password</label>
		</p>
		<p>
			<input type="password" name="password" 
				id="password"placeholder="password">
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
<?php 

	if(isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
		
		$email = $_COOKIE['email'];
		$password = $_COOKIE['password'];

		
		echo "<script>
				
			alert('$email');
			document.getElementById('name').value = '$email';
			document.getElementById('password').value = '$password';
					
		</script>";
	}
?>