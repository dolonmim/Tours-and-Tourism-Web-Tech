<?php 

    require_once('database.php');


	function login( $email, $password)
	{
    $conn = getConnection();
	$sql = "select * from users where email='{$email}' and password='{$password}'";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);

 	return $result;
}


function signup($id, $name, $gender, $dob, $email, $password, $address)
	{
		$conn = getConnection();
		
		$sql = "INSERT INTO users (id, name, gender, dob, email, password, address) VALUES ('{$id}','{$name}','{$gender}','{$dob}','{$email}','{$password}','{$address}')";
		echo $sql;
		if(mysqli_num_rows($matching))
		{
			
			function_alert("Email Already Exist");
			//echo '<script>alert("Email Already Exist")</script>';
			header('location: ../view/signup.php');
		}
		else
		{
			if(mysqli_query($conn, $sql)){
			return true;
			}
			else{
			return false;
			}
		} 
	}



	function delete($id)
	{
		$conn = getConnection();
		$sql= "Delete from users where ID='$id'";
		//echo $sql;
		$result=mysqli_query($conn,$sql);
			if($result==TRUE)
			{
				header('location:../view/login.html');
			}
	
	}


	function updateuser($user){
		$conn = getConnection();
		
		$sql = "update users SET   Name='{$user['Name']}', Email='{$user['Email']}', Password='{$user['Password']}', Address='{$user['Address']}' WHERE ID= {$user['ID']}";

		echo $sql;
		
	
		if(mysqli_query($conn, $sql)){
			return ;
		}else{
			return false;
		}
	}

	

//payment time login
	function paymentlogin( $email, $password)
	{
    $conn = getConnection();
	$sql = "select * from payment where email='{$email}' and password='{$password}'";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);

 	return $result;
	}


	
	function paymentlistsignup($email, $name, $h_m_day, $package, $amount)
	{
		$conn = getConnection();
		
		$sql = "INSERT INTO paymentlist (email, name, h_m_day, package, amount,) VALUES ('{$email}','{$name}','{$h_m_day}','{$package}')";
		echo $sql;
		if(mysqli_num_rows($matching))
		{
			
			
			//echo '<script>alert("Email Already Exist")</script>';
			header('location: ../view/payment.php');
		}
		else
		{
			if(mysqli_query($conn, $sql)){
			return true;
			}
			else{
			return false;
			}
		}
	} 





		function search($user){
			$conn = getConnection();
			
			$sql = "select * from payment where email like '{$user['SEARCH']}'";
			
		
			$result = mysqli_query($conn, $sql);
			$count = mysqli_num_rows($result);
			mysqli_close($conn);
		   return $result;

	}






	

	
	
	
?>