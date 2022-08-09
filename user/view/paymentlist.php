<!DOCTYPE html>
<html>
	<body>
		<h2>Payment</h2>
       <form action="../controller/paymentlistcheck.php" method="POST">
        
		<fieldset>
                <legend>paymentlist</legend>
                <table>
                <tr>
                        
                        <td><b>email</b> </td>
                        </tr>
                        <tr>
                        <td><input type="text" name="email" placeholder="Enter your email" value=""></td>
                    </tr>
                
                        <td><b>Name</b> </td>
                        </tr>
                        <tr>
                        <td><input type="text" name="name" placeholder="Enter your name" value=""></td>
                    </tr>
                    
                    <tr>
                        <td><b>How may days</b></td>
                        </tr>
                        <tr>
                        <td><input type="date" name="h_m_day" placeholder="How many da" value=""></td>
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
                        <input type="text" name="address" placeholder="Drop your Address" value="" textarea style="height: 50px;width: 160px;" >
                        </td>
                    </tr>
                    
                    
                    
                    <tr>
                        <td><input type="submit" name="submit" value=" sign Up"></td> 
                        <td> <a href="../view/login.html"> Sign In </a></td>
                    </tr>
                </table>
            </fieldset>
        </form>
</body>
</html>
