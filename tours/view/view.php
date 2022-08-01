<?php
session_start();

include "../model/database.php";
$sql="SELECT *FROM users Where id='".$_SESSION["id"]."'";
$result=$conn->query($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>View Page</title>
        <link rel="stylesheet"
        
    </head>

<body>
    <div class="container">
        <h2>Your Profile</h2>
          <table class="table">
            <thread>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Address</th>
                </tr>
            </thread> 
                
<tbody>

<?php
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        
?>
     <tr>
      
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['gender'];?></td>
      <td><?php echo $row['dob'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['password'];?></td>
      <td><?php echo $row['address'];?></td>
      <td><a class="btn btn-info" href="../controller/update.php?id=<?php echo $row['id'];?>">
      Edit</a>&nbsp;<a class="btn btn-danger" href="../controller/delete.php?id=<?php echo $row['id'];?>">
      Delete</a></td>
    </tr>
<?php
    }
}
?>
</tbody>
</table>
</div>
</body>
</html>
    