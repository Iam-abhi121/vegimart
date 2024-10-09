<?php

include 'database1.php';
if(isset($_POST['submit']))
{
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];


 
    $sql="insert into student(uname,pass)values('$uname','$pass')";

    if(mysqli_query($con,$sql))
    {
        echo"<script>alert('new record inserted')</script>";
    }  
    else
    {
        echo "error:".mysqli_error($con);
    }
    mysqli_close($con);
}