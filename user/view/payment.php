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
                        
                        <td><b>Email</b> </td>
                        </tr>
                        <tr>
                        <td><input type="email" name="email" placeholder="Enter your Email" value="" id="email"></td>
                    </tr>
                
                        <td><b>Name</b> </td>
                        </tr>
                        <tr>
                        <td><input type="text" name="name" placeholder="Enter your destination" value="" id="name"></td>
                    </tr>
                    
                    <tr>
                        <td><b>Days</b></td>
                        </tr>
                        <tr>
                        <td><input type="text" name="h_m_day" placeholder="How long will you stay" value="" id="h_m_day"></td>
                    </tr>
                    <tr>
                        <td><b>Package</b></td>
                        </tr>
                        <tr>
                        <td><input type="text" name="package" placeholder="package" value="" id="package"></td>
                    </tr>
                    <tr>
                        <td>Amount</td></tr>
                        <tr>
                        <td >
                        <input type="text" name="amount" placeholder="Amount" value="" id="amount"  >
                        </td>
                    </tr>
                    
                    
                    
                    
					<tr>
						
                        <td>
							<div class="signupbtn">
								<input type="submit" name="submit" value=" BOOK"></div>
								
                        
                    </tr>
                    

                      </table>
</center>
           
        </form>
	


		</div>



              
</body>
</html>