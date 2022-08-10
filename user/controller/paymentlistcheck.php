<?php 
	session_start();
	include('../model/database.php');
	include('../model/userModel.php');

	if(isset($_REQUEST['submit']))
	{
		$email=$_POST['email'];
		$name=$_POST['name'];
		$h_m_day=$_POST['h_m_day'];
		$package=$_POST['package'];
		$amount=$_POST['amount'];
		
		

		

							if($email != null && $name != null && $h_m_day != null && $package != null && $amount != null )
								{
									
										$status = paymentlistsignup($email, $name,$h_m_day, $package,$amount);
											if($status)
											{
												header('location: ../view/successful.html');
											}else{
												header('location: ../view/payment.php');
											}
								}
								
		
                            }
		
?>
