<form method="post" action="validate.php">
	<div class="group email">
		<p>
			<label for="email">Email</label>
		</p>
		<p>
			<input type="email" name="email" required placeholder="email">
		</p>
	</div>
	<div class="group password">
		<p>
			<label for="email">Password</label>
		</p>
		<p>
			<input type="password" name="password" required
				placeholder="password">
		</p>
	</div>
	<p>
		<input type="checkbox" name="remember" value="1">Remember Me
	</p>
	<p>
		<input type="submit" value="login" name="login">
	</p>
</form>