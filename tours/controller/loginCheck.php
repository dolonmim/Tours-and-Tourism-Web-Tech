<?php 
	session_start();
	require_once('../model/userModel.php');

	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];

	if ($email == null || $password == null) {
		echo "invalid email/password <br>";
	}else{

		$status = login($email, $password);

		if($status){
			setcookie('status', 'true', time()+3600, '/');
			header('location: ../view/home.php');
		}else{
			echo "invalid user!";
		}

		// $file = fopen('../model/user.txt', 'r');
		// while (!feof($file)) {
		// 		$line = fgets($file);
		// 		$user = explode('|', $line);
		// 		print_r($user);
		// 		echo "<br>";
		// 		if($username == trim($user[1]) && $password == trim($user[2])){
		// 			setcookie('status', 'true', time()+3600, '/');
		// 			header('location: ../view/home.php');
		// 		}
		// }
	}
?>