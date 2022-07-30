<?php
include "../model/database.php";

if(isset($_POST['update']))
{
    $id=$_['id'];
	$name=$_['name'];
	$gender=$_['gender'];
	$dob=$_['dob'];
	$email=$_['email'];
	$password=$_['password'];
	$address=$_['address'];

    $sql="UPDATE 'users' SET 'id'='$id','name'='$name','gender'='$gender','dob'='$dob','email'='$email','password'='$password','address'='$address'";
    $result=$conn->query($sql);

    if($result==TRUE)
    {
        echo "Updated Successfully!";
    }
    else{
        echo "Error!".$sql."<br>".$conn->error;
    }
}

if(isset($_GET['id']))
{
    $user_id=$_GET['id'];

    $sql="SELECT *FROM 'users' WHERE 'id'='".$user_id."'";

    $result=$conn->query($sql);

    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $id=$row['id'];
	        $name=$row['name'];
	        $gender=$row['gender'];
	        $dob=$row['dob'];
	        $email=$row['email'];
	        $password=$row['password'];
	        $address=$row['address'];
        }
?>
   <h2> Update Form</h2>
   <form action="" method="post">
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
                    <label for="101">  <input type="radio" name="gender" value="male" id="101" <?php if($gender=='Male'){echo "checked";}?> > Male</label>
                    <label for="102">  <input type="radio" name="gender" value="female" id="102" <?php if($gender=='Female'){echo "checked";}?>> Female</label>
                    <label for="103">  <input type="radio" name="gender" value="others" id="103" <?php if($gender=='Others'){echo "checked";}?>> Others</label>
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
                            <textarea style="height: 50px;width: 160px;"></textarea>
                        </td>
                    </tr>

                    
                    
                    <br>
                    <br>
                    <tr>
                        <td><input type="submit" name="update" value=" sign Up"></td> 
                        <td> <a href="../view/login.php"> Sign In </a></td>
                    </tr>
                </table>
            </fieldset>
        </form>
</body>
</html>
    
<?php
    }}
    
    else{
        header('Location:../view/view.php');
    
    
}

?>
        
 