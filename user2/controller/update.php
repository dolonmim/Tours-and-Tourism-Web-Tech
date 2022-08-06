<?php 
	require('../model/user.php');
	$conn = getConnection();
	session_start();
		/*$id=$_GET['updateid'];
		if(isset($_REQUEST['update']))
		{
			
			$username = $_REQUEST['username'];
			$gender = $_REQUEST['gender'];
			$email = $_REQUEST['email'];
			$dob = $_REQUEST['date'];
			$category = $_REQUEST['Category'];
			$sql="Update FreelancerInfo set F_ID='$id',F_Name='$username',F_Gender='$gender',F_DOB='$dob', F_Email='$email', F_Category='$category' where F_ID='$id'";
			$result=mysqli_query($conn,$sql);
				if($result)
				{
					echo "Successfully Update";
				}
		}*/
	
?>