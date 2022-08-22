<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
	<body>
		<h2></h2>
		<div class="signup">
		<div class="navigation">

			 <div class="back">
				<ul>
					<li><a href="about.html">ABOUT</a></li>
					<li><a href="contact.html">CONTACT</a></li>
					<li><a href="login.html">BACK</a></li>
				</ul>
			 </div>
			</div>
       <form  onsubmit="return validate()" action="../controller/paymentcheck.php" method="POST">
        
		
			
                
                <center><table>
                <tr>
                        
                        <td><b>email</b> </td>
                        </tr>
                        <tr>
                        <td><input type="email" name="email" placeholder="Enter your email" value="" ></td>
                    </tr>
                
                        <td><b>Name</b> </td>
                        </tr>
                        <tr>
                        <td><input type="text" name="name" placeholder="Enter your name" value="" ></td>
                    </tr>
                    
                    <tr>
                        <td><b>Days</b></td>
                        </tr>
                        <tr>
                        <td><input type="text" name="h_m_day" placeholder="" value="" id=""></td>
                    </tr>
                    <tr>
                        <td><b>Package</b></td>
                </tr>
                <tr>
                        <td><input type="text" name="package" placeholder="" value="" id=""></td>
                    </tr>
                    
                    <tr>
                        <td><b>Amount</b></td>
                        </tr>
                        <tr>
                        <td><input type="text" name="amount" placeholder="" value="" id=""></td>
                    </tr>
                    
                    
                    
                    
                    
					<tr>
						
                        <td>
							<div class="signupbtn">
								<input type="submit" name="submit" value=" sign Up"></div>
								
                    
                    </tr>
                    

                      </table>
</center>
           
        </form>
	


		
		</div>



              
</body>
</html>