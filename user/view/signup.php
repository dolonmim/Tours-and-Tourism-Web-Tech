<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
	<body>
		<h2>SignUp</h2>
       <form  onsubmit="return validate()" action="../controller/regCheck.php" method="POST">
        
		<fieldset>
                <legend>Sign Up</legend>
                <center><table>
                <tr>
                        
                        <td><b>ID</b> </td>
                        </tr>
                        <tr>
                        <td><input type="text" name="id" placeholder="Enter your ID" value="" id="id"></td>
                    </tr>
                
                        <td><b>Name</b> </td>
                        </tr>
                        <tr>
                        <td><input type="text" name="name" placeholder="Enter your name" value="" id="name"></td>
                    </tr>
                    <tr>
                        <td><b>Gender</b></td>
                    </tr>   
                    <tr>    
                    <td>
                    <label >  <input type="radio" name="gender" value="Male" id="gender"> Male</label>
                    <label >  <input type="radio" name="gender" value="Female" id="gender"> Female</label>
                    <label >  <input type="radio" name="gender" value="Others" id="gender"> Others</label>
                    </td>
                    </tr>
                    <tr>
                        <td><b>DOB</b></td>
                        </tr>
                        <tr>
                        <td><input type="date" name="dob" placeholder="Date of Birth" value="" id="dob"></td>
                    </tr>
                    <tr>
                        <td><b>Email</b></td>
                </tr>
                <tr>
                        <td><input type="email" name="email" placeholder="Enter your Email" value="" id="email"></td>
                    </tr>
                    
                    <tr>
                        <td><b>Password</b></td>
                        </tr>
                        <tr>
                        <td><input type="password" name="password" placeholder="Enter password" value="" id="password"></td>
                    </tr>
                    <tr>
                        <td><b>Confirm Password</b></td>
                        </tr>
                        <tr>
                        <td><input type="password" name="cpassword" placeholder="Confirm Password" value="" id="cpassword"></td>
                    </tr>
                    <tr>
                        <td>Address</td></tr>
                        <tr>
                        <td >
                        <input type="text" name="address" placeholder="Drop your Address" value="" id="address" textarea style="height: 50px;width: 160px;" >
                        </td>
                    </tr>
                    
                    
                    
                    <tr>
                        <td><input type="submit" name="submit" value=" sign Up"></td> 
                        <td> <a href="../view/login.html"> Sign In </a></td>
                    </tr>

                      </table>
</center>
            </fieldset>
        </form>


                    <script>
			function validate()
			{
                let id = document.getElementById("id").value;

				let name = document.getElementById("name").value;

				

                let dob = document.getElementById("dob").value;

                let email = document.getElementById("email").value;

				let password = document.getElementById("password").value;

				let cpassword = document.getElementById("cpassword").value;


				let address = document.getElementById("address").value;

				

				

				if(id != "")
				{
					return true;
				}
				else
				{
					alert("Please insert id");
					return false;
				}
                
                
                
                if(name != "")
				{
					return true;
				}
				else
				{
					alert("Please insert name");
					return false;
				}


                




				
				if(dob != "")
				{
					return true;
				}
				else
				{
					alert("Please insert dob");
					return false;
				}



                if(email != "")
				{
					return true;
				}
				else
				{
					alert("Please insert email");
					return false;
				}

				if(password != "")
				{
					return true;
				}
				else
				{
					alert("Please insert password");
					return false;
				}


				if(cpassword!= "")
				{
					return true;
				}
				else
				{
					alert("Please insert confirm password");
					return false;
				}



				


		


				
				if(address != "")
				{
					return true;
				}
				else
				{
					alert("Please insert address");
					return false;
				}


				
				
			}


		</script>



              
</body>
</html>