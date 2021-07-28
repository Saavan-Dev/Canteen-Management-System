<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	
	<title></title>
	<link rel="stylesheet" href="css/style2.css">
<?php include "nav2.php"; ?>
</head>
<body background="images/blog1.jpg">
	<div class="contact-section">
		
		<h1>Contact Us</h1>
		<div class="border"></div>

		<form class="contact-form" action="contact2.php" method="post">
		 	<input type="text" class="contact-form-text" placeholder="Your name" name="name">
		 	<input type="email" class="contact-form-text" placeholder="Your Email" name="email">
		 	<input type="text" class="contact-form-text" placeholder="Your Phone" name="ph">	
		 	<textarea class="contact-form-text" placeholder="Your Message" name="message"></textarea>
			<input type="submit" class="contact-form-btn" value="Send">
		</form>			
	</div>

</body>
</html>
<?php 
include "acc.php";
 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
  $cust_nm=$_POST['name'];
  $message=$_POST['message'];
  $ph=$_POST['ph'];
  $email=$_POST['email'];
  	$sql="INSERT INTO  Contact_Us(Name,Message,Phone_No,Email)VALUES('$cust_nm','$message','$ph','$email')";
	if(mysqli_query($con,$sql) === true)
	{
	  $_SESSION['message']="Message Sended succesfully user added to the database!!!";
    }
	else
	{
	 $_SESSION['message']="Error Message could not Sended!!".mysqli_error($con);
	}
  }
  mysqli_close($con);
?>
