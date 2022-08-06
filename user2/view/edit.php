<?php 
include_once('..model/database.php');
require('../model/user.php');
			$conn = getConnection();
			$id=$_GET['updateid'];
		if(isset($_REQUEST['update']))
		{
			
			$id = $_REQUEST['id'];
			$name = $_REQUEST['name'];
			$gender = $_REQUEST['gender'];
			$dob = $_REQUEST['dob'];
			$email = $_REQUEST['email'];
			$password = $_REQUEST['password'];
			$address = $_REQUEST['address'];
			$sql="Update users set ID='$id',Name='$name',Gender='$gender',DOB='$dob', Email='$email', Password='$password', address='$address' where ID='$id'";
			$result=mysqli_query($conn,$sql);
				if($result)
				{
					header('location:../view/view.php');
				}

		}
?>

<html>
<head>
	<title></title>
	
</head>
<body>
		
	<form method="POST" action="" onsubmit="return Checker()">
		<center>
			<fieldset >
				<legend >Edit Employee</legend>
						<table border="5" align="center" style="border-color: mediumseagreen; height:40%;width:80%;">
							<?php
									$id=$_GET['updateid'];
									$conn = getConnection();
									$sql="Select * from user where ID=$id";
									$result = mysqli_query($conn,$sql);
									$row=mysqli_fetch_assoc($result);

									$id=$row['id'];
									$name=$row['Name'];
									$gender=$row['Gender'];
									$dob=$row['DOB'];
									$email=$row['Email'];
									$password=$row['Password'];
									$address=$row['address'];
							?>
								<tr>
							<td ><b>ID</b></td>

							<td width="50%"><input type="text" name="id" value=" <?php echo $ID;?>"></td>
										
						</tr>
						
						<tr>
							<td ><b>Name</b></td>
										
							<td width="50%">
								<input type="text" name="name" value="<?php echo $name; ?>">
							</td>
						</tr>
						
							<td ><b>Gender</b></td>
										
							<td width="50%"><input type="radio" name="gender" value="Male" <?php echo $male;?> >Male
							<input type="radio" name="gender" value="Female"<?php echo $female;?>>Female
							<input type="radio" name="gender" value="Others" <?php echo $others;?>>Others
						</td>
											
						</tr>

                        <tr>
							<td ><b>DOB</b></td>
										
							<td width="50%"><input type="date" name="dob" value="<?php echo $dob;?>"></td>
											
						</tr>
						
						<tr>
							<td ><b>Email</b></td>
										
							<td width="50%"><input type="email" name="email" value="<?php echo $email;?>"></td>
											
						</tr>
						
						<tr>
							<td ><b>Password</b></td>
										
							<td><input type="password" name="password" value="<?php echo $password;?>"></td>
											
						</tr>
						<tr>
							<td ><b>Address</b></td>
										
							<td> <input type="text" name="address" value="<?php echo $address;?>"></td>
											
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