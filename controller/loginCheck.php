<?php 
	session_start();

	$name = $_REQUEST['name'];
	$password = $_REQUEST['password'];

	if ($name == null || $password == null) {
		echo "invalid Nname/Password <br>";
	}else{
		$file = fopen('../model/user.txt', 'r');
		while (!feof($file)) {
			    
				$line = fgets($file);
				$user = explode('|', $line);
				print_r($user);
				echo "<br>";
				if($username == trim($user[1]) && $password == trim($user[2])){
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../view/userhomepage.php');
				}
					
				
				elseif($username == "admin" && $password == "admin123")
				{
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../view/adminhomepage.php');

				}
				elseif($username == "travel" && $password == "travel123")
				{
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../view/home.html');

				}
				elseif($username == "hotel" && $password == "hotel123")
				{
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../view/hotalhome.html');

				}
		}
		echo "invalid user!";
	}



?>