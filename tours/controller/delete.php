<?php
include "../model/database.php";

if(isset($_GET['id']))
{
    $user_id=$_GET['id'];

    $sql="DELETE FROM `users` WHERE `id`='$user_id'";

    $result=$conn->query($sql);

    if($result==TRUE)
    {
        echo "Deleted Successfully!";
    }
    else
    {
        echo "Erroe!".$sql. "<br>" .$conn->error;
    }
}
?>