<?php 
session_start();
	
	require('../model/database.php');
	
	$email="";
	
	    $email="";
		$name="";
		$h_m_day="";
		$package="";
		$amount="";
		
		



	  $conn=getConnection();
	  $email=$_SESSION['email'];
	  $query=mysqli_query($conn, "Select * from payment where email Like '".$email."'");
	  //$row=mysqli_fetch_array($query);
	  if (mysqli_num_rows($query)> 0)

    {

       while($row = $query->fetch_assoc())

       {

   

       $email=$row["email"];
	   $name=$row['name'];
		$h_m_day=$row['h_m_day'];
		$package=$row['package'];
		$amount=$row['amount'];
		

		
}

 }
?>



<html>
<head>
        <title>View Page</title>
        
</head>

	<body>
		
		 	
		<form method="POST" action="../controller/paymentlistcheck.php" enctype="multipart/form-data">
			
				<fieldset >
				<legend  ><b>Payment</b></legend>
					<table align="center" width="80%">
						
						<tr>
							<td ><b>email</b></td>

							<td width="50%"><input type="text" name="email" value=" <?php echo $email;?>"></td>
										
						</tr>
						
						<tr>
							<td ><b>Name</b></td>
										
							<td width="50%">
								<input type="text" name="name" value="<?php echo $name; ?>">
							</td>
						</tr>
						
							

                        <tr>
							<td ><b>How many days</b></td>
										
							<td width="50%"><input type="text" name="h_m_day" value="<?php echo $h_m_day;?>"></td>
											
						</tr>
						
						<tr>
							<td ><b>package</b></td>
										
							<td width="50%"><input type="package" name="package" value="<?php echo $package;?>"></td>
											
						</tr>
                        <tr>
</tr>

						
						<tr>
							<td ><b>amount</b></td>
										
							<td><input type="text" name="amount" value="<?php echo $amount;?>"></td>
											
						</tr>
            
                        
					<center>
					<tr>
						<td>
                            
                            
							<form method="post" action="../controller/fileupload.php" enctype="multipart/form-data">
		NID: <input type="file" name="myfile" value="">
		<input type="submit" name="submit" value="upload">
	</form>
</center>
</td>
                        
                    </tr>

					<tr><td>
                            <center>
                            
                        <td><input type="submit" name="submit" value=" make payment"></td> 
                        
                    </tr>
					<center>
				
				


						

						
						
				</fieldset>
			
		</form>
	</body>
</html>
