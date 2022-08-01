<?php
include "../model/database.php";

if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	


$sql="INSERT INTO users (id, name, gender, dob, email, password, address) VALUES ('{$id}','{$name}','{$gender}','{$dob}','{$email}','{$password}','{$address}')";
$result=$conn->query($sql);

if($result==TRUE)
{
	echo "SignUp successful";
}
else
{
	echo "Error!".$sql."<br>".$conn->error;
    
}

$conn->close();
}


?>
