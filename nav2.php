<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<style>

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

</style>
<?php session_start();?>
<body>
	<div class="header">
		<h2 class="logo">Canteen Management System</h2>
		<h6 class="logo" style="color:#66FF33">&nbsp;&nbsp;&nbsp;&nbsp;Welcome&nbsp;<?php echo $_SESSION["username"];?></h6>
		<input type="checkbox" id="chk">
		<label for="chk" class="show-menu-btn">
			<i class="fas fa-ellipsis-h"></i>
		</label>
	<ul class="menu">
		
		<a href="order.php">Order Us</a>
		<a href="fds2.php">Foods we have</a>
		<a href="about2.php">About</a>
		<a href="contact2.php">Contact Us</a>
		<a href="feedback2.php" >Feedback</a>
		<a href="login.php" >Logout</a>
		
	</ul>
		
			<!--    <form action="logout.php" method="post">
	    <input type="hidden" name="return" value="<?php /*echo urlencode($_SERVER["PHP_SELF"]);*/?>"/>
			   <input type="submit" value="logout"/>
			   </form>-->
        <label for="chk" class="hide-menu-btn">
			<i class="fas fa-times-h"></i>
		</label>
	</div>
	<div class="content">


</body>
</html>