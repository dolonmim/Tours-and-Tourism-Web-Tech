<?php 

    require_once('database.php');


	


function payment($email, $name, $h_m_day, $package, $amount)
	{
		$conn = getConnection();
		$duplicate= "Select * from paymentlist  where email = '$email'";
		$matching = mysqli_query($conn,$duplicate);
		
		$sql = "INSERT INTO paymentlist (email, name, h_m_day, package, amount) VALUES ('{$email}','{$name}','{$h_m_day}','{$package}','{$amount}')";
		echo $sql;
		if(mysqli_num_rows($matching))
		{
			
			//function_alert("Email Already Exist");
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



	

	





	
