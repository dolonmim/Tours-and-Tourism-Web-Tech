
<!DOCTYPE html>
<html>
	<body>
		<h2>SignUp</h2>

       <form action="../controller/regCheck.php" method="POST">

		<fieldset>
                <legend>Sign Up</legend>
                <table>
                <tr>
                        
                        <td><b>ID</b> </td>
                        </tr>
                        <tr>
                        <td><input type="text" name="id" placeholder="Enter your ID" value=""></td>
                    </tr>
                
                        <td><b>Name</b> </td>
                        </tr>
                        <tr>
                        <td><input type="text" name="name" placeholder="Enter your name" value=""></td>
                    </tr>

                    <tr>
                        <td><b>Gender</b></td>
                    </tr>   
                    <tr>    
                    <td>
                    <label for="101">  <input type="radio" name="gender" value="male" id="101"> Male</label>
                    <label for="102">  <input type="radio" name="gender" value="female" id="102"> Female</label>
                    <label for="103">  <input type="radio" name="gender" value="others" id="103"> Others</label>
                    </td>
                    </tr>

                    <tr>
                        <td><b>DOB</b></td>
                        </tr>
                        <tr>
                        <td><input type="date" name="dob" placeholder="Date of Birth" value=""></td>
                    </tr>

                    <tr>
                        <td><b>Email</b></td>
                </tr>
                <tr>
                        <td><input type="email" name="email" placeholder="Enter your Email" value=""></td>
                    </tr>
                    
                    <tr>
                        <td><b>Password</b></td>
                        </tr>
                        <tr>
                        <td><input type="password" name="password" placeholder="Enter password" value=""></td>
                    </tr>
                    <tr>
                        <td><b>Confirm Password</b></td>
                        </tr>
                        <tr>
                        <td><input type="password" name="cpassword" placeholder="Confirm Password" value=""></td>
                    </tr>

                    <tr>
                        <td>Address</td></tr>
                        <tr>
                        <td >
                            <textarea style="height: 50px;width: 160px;" name="address"></textarea>
                        </td>
                    </tr>

                    
                    
                    
                    <tr>
                        <td><input type="submit" name="submit" value=" sign Up"></td> 
                        <td> <a href="../view/login.php"> Sign In </a></td>
                    </tr>
                </table>
            </fieldset>
        </form>
</body>
</html>


