<?php 

    require_once('database.php');


	function login( $email, $password){
    $conn = getConnection();
	$sql ="SELECT * FROM users WHERE email='". $email."' AND password='". $password."'";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);

    if($count >0 ){
        return true;
    }else{
        return false;
    }
}
	
	
?>