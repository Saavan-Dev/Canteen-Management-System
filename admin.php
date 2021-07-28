<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Canteen Management</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="style.css" />
<style>
body{
background:url(images/bg3.jpg);
background-size:cover;
}
</style>
<?php include "nav.php"; ?>
<?php
 include "acc.php";
 if(isset($_POST['username']) && !empty($_POST['username']) AND isset($_POST['password']) && !empty($_POST['password']))
 {
  $username=mysqli_escape_string($con,$_POST['username']);
  $password=mysqli_escape_string($con,md5($_POST['password']));
  $query=mysqli_query($con,"SELECT username,password FROM main_usr WHERE username='".$username."' AND password='".$password."'")or die(mysql_error());
  $match=mysqli_num_rows($query);
  if($match>0)
  {
   session_start();
    $_SESSION['username']=$username;
   $msg='Login Complete! Thanks';
   header('Location:admin1.php');
  }else{
   $msg='Login Failed!<br/>Please make sure that you entered the correct details and that you have activated your account.';
  }
 }
?>
<?php
 if(isset($msg)) {echo'<div class="statusmsg">'.$msg.'</div>';
 }?>
 
</head>

<body>
	<div class="box">
		<h2>Admin Login</h2>
			<form method="post">
				<div class="inputBox">
					<input type="text" name="username" required="" />
						<label>Username</label>
				</div>	
				<div class="inputBox">
					<input type="password" name="password" required="" />
						<label>Password</label>
				</div>	
					<input type="submit" name="submit" value="submit" />
			</form>
	</div>
</body>
</html>
