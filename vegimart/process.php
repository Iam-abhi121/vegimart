<?php

include 'database.php';
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $MNum=$_POST['MNum'];
    $ANum=$_POST['ANum'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $date=$_POST['date'];
    $gender=$_POST['gender'];

 
    $sql="insert into student2(fname,lname,MNum,ANum,email,pass,date,gender)values('$fname','$lname','$MNum','$ANum','$email','$pass','$date','$gender')";

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