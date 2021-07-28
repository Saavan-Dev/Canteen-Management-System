<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
 session_start();
 $_SESSION['message']="";
 $mysqli = new mysqli('localhost','root','','accounts');
 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
  if($_POST['password'] == $_POST['cpassword'])
  {
    $username = $mysqli->real_escape_string($_POST['username']);
	$email=$mysqli->real_escape_string($_POST['email']);
	$password=md5($_POST['password']);
	$sql="INSERT INTO users (username,email,password)"."VALUES('$username','$email','$password')";
	if($mysqli->query($sql) === true)
	{
	  $_SESSION['message']="Registration succesfull user added to the database!!!";
    }
	else
	{
	 $_SESSION['message']="User could not be added to the database!!";
	}
  }
  else
  {
   print "Password dosen't match.......";
  }
 } 
 else
 {
  echo "Registration error".mysqli_error($mysqli);
 }
 mysqli_close($mysqli);
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="style.css" />
<style>
body{

background:url("images/bg1.jpg");
background-size:cover;
}
	.box{
		top:65% ;
	}
</style>
<?php include "nav.php"; ?>

</head>

<body >
	<div class="box">
		<h2>Sign Up</h2>
			<form method="post">
				<div class="inputBox">
					<input type="text" name="username" required="Please Enter the username!!" />
						<label>Username</label>
				</div>	
				<div class="inputBox">
					<input type="email" name="email" required="Please Enter the Email!!" />
						<label>Email</label>
				</div>	
				<div class="inputBox">
					<input type="password" name="password" required="Please Enter the Password!!" />
						<label>Password</label>
				</div>	
				<div class="inputBox">
					<input type="password" name="cpassword" required="Please Enter the Password Again!!" />
						<label>Confirm Password</label>
				</div>	
	<!--			<div class="inputBox">
					<input type="tel" name="" required="" />
						<label>Mobile No</label>
				</div>	-->
					
				<input type="submit" name="" value="submit" />
				
					<a href="index.php"><input type="button" name="" value="Cancel" style="background: transparent;border: none;outline: none;color: #fff;background: #03a9f4;padding: 10px 20px;	cursor: pointer;border-radius: 5px;" /></a>
					
			</form>
	</div>
</body>
</html>
