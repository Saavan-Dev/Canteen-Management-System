<?php
$con=mysqli_connect("localhost","root","","accounts");
if(!$con)
 die("connnection failed:".mysqli_error);
 if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>