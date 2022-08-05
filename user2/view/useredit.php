<?php 
include_once('Condition.php');
require('../model/FreelancerModel.php');
			$conn = getConnection();
			$id=$_GET['updateid'];
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
					header('location:../views/EmployeeList.php');
				}

		}
?>

<html>
<head>
	<title>Online Market</title>
	<script type="text/javascript" src="Script.js"></script>
</head>
<body>
		<h1 >
		 	
		 	<a href="About.php" style="color: white;">About</a>
		 	<a href="Contact.php" style="color: white;">Contact</a>
		 	<a href="../controller/logout.php" style="color:white;">LogOut</a>
		</h1>
	<form method="POST" action="" onsubmit="return Checker()">
		<center>
			<fieldset style="height:80%;width:50%;border-width:10px;border-color:mediumseagreen;">
				<legend style="color:green; font-size:50;margin: 10%; text-align:left; " ><b>Edit Employee</b></legend>
						<table border="5" align="center" style="border-color: mediumseagreen; height:40%;width:80%;">
							<?php
									$id=$_GET['updateid'];
									$conn = getConnection();
									$sql="Select * from FreelancerInfo where F_ID=$id";
									$result = mysqli_query($conn,$sql);
									$row=mysqli_fetch_assoc($result);

									$name=$row['F_Name'];
									$gender=$row['F_Gender'];
									$dob=$row['F_DOB'];
									$email=$row['F_Email'];
									$category=$row['F_Category'];
							?>
								<tr>
									<td>Username</td>
									<td><input type="text" name="username" value="<?=$name?>"></td>
								</tr>
								<tr>
									<td>Gender</td>
									<td>
										<input type="text" name="gender" value="<?=$gender?>">
									</td>
								</tr>
								<tr>
									<td>DOB</td>
									<td><input type="date" name="date" value="<?=$dob?>"></td>
								</tr>
								<tr>
									<td>Email</td>
									<td><input type="email" name="email" value="<?=$email?>"></td>
								</tr>
								<tr>
									<td>Category</td>
									<td>
										<input type="text" name="Category" value="<?=$category?>">
									</td>
								</tr>
								<tr>
										<td colspan="2" align="center">
													<input type="submit" name="update" value="Update" style="background-color: mediumseagreen; color: white; font-size:30; font-family:Times New Roman;width:80%;">
										</td>
								</tr>
						</table>
			</fieldset>
		</center>
				
	</form>
</body>