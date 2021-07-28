<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
 ini_set('display_errors',0);
 session_start();
 $_SESSION['message']="";
 $mysqli = new mysqli('localhost','root','','accounts');
 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
  if($_POST['password'] == $_POST['cpassword'])
  {
	$username=$mysqli->real_escape_string($_POST['username']);
	$password=md5($_POST['password']);
	$sql="INSERT INTO main_usr (username,password)"."VALUES('$username','$password')";
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
 mysqli_close($mysqli);
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="style.css" />
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
body{

background:url("images/bg1.jpg");
background-size:cover;
}
	.box{
		top:65% ;
	}
</style>
</head>
<?php session_start();?>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
             <h3>Welcome&nbsp;<?php echo $_SESSION["username"];?></h3>
               </div>

            <ul class="list-unstyled components">
                <p>Hello!!</p>
                             <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage Foods</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="prd.php">Modify things</a>
                        </li>
                    </ul>
                </li>
                <li>
  
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage users</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
             <li>
                            <a href="admin2.php">delete user</a>
                        </li>
                        <li>
                            <a href="admin3.php">modify user</a>
                        </li>
                        <li>
                            <a href="admin4.php">display user</a>
                        </li>
                                </ul>
                </li>
            </ul>
            <ul class="list-unstyled CTAs">
                <li>
			<form action="logout1.php" method="post">
	    <input type="hidden" name="return" value="<?php echo urlencode($_SERVER["PHP_SELF"]);?>"/>
			   <input type="submit" class="download" value="logout"/>
			   </form>

                <!--    <a href="logout1.php" class="download">Logout</a>-->
                </li>
				<br />
                <li>
			<form action="adminreg.php">
			   <input type="submit" class="download" value="Register New Admin"/>
			   </form>

                <!--    <a href="logout1.php" class="download">Logout</a>-->
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
        <!-- add name in the span tag  -->
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                 </div>
            </nav><div class="box">
		<h2>Sign Up</h2>
			<form method="post">
				<div class="inputBox">
					<input type="text" name="username" required="Please Enter the username!!" />
						<label>Enter User Name</label>
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

 
	    </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>
