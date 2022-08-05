

<!DOCTYPE html>
<html>
<head>
	

	<title>Login Form</title>
</head>
<body>
	<div class="container">
		<form action="../controller/loginCheck.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="" required>
				<span>
                </span>
			</div>
			<div class="input-group">
				<input type="submit" name="submit" class="btn"></button>
			</div>
			<p>Don't have an account? <a href="../view/signup.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>