<?php 

	require('../model/database.php');

	function update(){
		$conn = getConnection();
		$sql= "Select * From users";
		$result= mysqli_query($conn, $sql); 
		if($result)
		{
			while(mysqli_fetch_assoc($result))
			{
						$id = $row['ID'];
						$name = $row['Name'];
						$gender = $row['Gender'];
						$dob = $row['DOB'];
						$email = $row['Email'];
                        $password = $row['Password'];
						$address = $row['Address'];
			}
		}


	}