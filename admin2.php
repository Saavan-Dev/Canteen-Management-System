<!DOCTYPE html>
<html>

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
</head>
<style>
input[type=submit] {
  background-color:#6699FF;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color:#3366FF;
}

</style>
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
<li>
                            <a href="pur.php">Purchase Details</a>
                        </li>
                                 </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage users</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="admin2.php">Delete user</a>
                        </li>
                        <li>
                            <a href="admin3.php">Modify user</a>
                        </li>
                        <li>
                            <a href="admin4.php">Display user</a>
                        </li>
                        </ul>
                </li>
            </ul>
                       <ul class="list-unstyled CTAs">
                <li>
			<form action="logout1.php" method="post">
	    <input type="hidden" name="return" value="<?php echo urlencode($_SERVER["PHP_SELF"]);?>"/>
			   <input type="submit" class="download" value="Logout"/>
			   </form>

                <!--    <a href="logout1.php" class="download">Logout</a>-->
                </li>
				<br>
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
            </nav>
            <h6>Delelition of users..</h6>
 <form action="" method='post'>
  Enter Username:<br>
  <input type="text" name="username">
  <br>
  Enter Id:<br>
  <input type="text" name="id">
  <br><br>
  <input type="submit" value="Submit">
</form> 

 
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
<?php
include "acc.php";
$username=$_POST["username"];
$id=$_POST["id"];
$sql = "DELETE FROM users WHERE id='$id' and username='$username'"; 
if(mysqli_query($con, $sql)){ 
    echo "Record was deleted successfully."; 
}  
else{ 
    echo "ERROR: Could not able to execute $sql. "  
                                   . mysqli_error($con); 
} 
mysqli_close($con); 
?>
