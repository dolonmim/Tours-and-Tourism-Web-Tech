<?php 

include "../model/database.php";

session_start();

error_reporting(0);

if (isset($_SESSION['name'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql ="SELECT * FROM users WHERE email='". $email."' AND password='". $password."'";
	
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['name'] = $row['name'];
		$_SESSION['id'] = $row['id'];
		header("Location: home.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	

	<title>Login Form</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
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