<?php 

    require_once('database.php');


	function login( $email, $password){
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
		
		$sql = "update users SET  name='{$user['Name']}', email='{$user['Email']}' password='{$user['Password']}' address='{$user['Address']}' WHERE email= {$user['Email']}";
		
	
		if(mysqli_query($conn, $sql)){
			return ;
		}else{
			return false;
		}
	}


	

	
	
	
?>