<?php
$servername="localhost";
$username="root";
$password="";
$database="login";

$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
    die("error detected".mysqli_error($con)); // dot represent concatination
}
else
{
    echo"Connection established successfully";
}
?>