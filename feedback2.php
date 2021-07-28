<!DOCTYPE html>
<html>
<head>

<?php include "nav2.php"; ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
    font-family: Arial, Helvetica, sans-serif;
    background-image: url(images/bg3.jpg);
    background-size: cover;
}
* {box-sizing: border-box;}
h1{
  margin-top: 10px;
  margin: 0 0 30px;
  padding: 0;
  color:#27AE60;
  text-align: center;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

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

.container {
  position:absolute;
  top:60%;
  left:50%;
  transform: translate(-50%,-50%);
  width: 400px;
  padding:40px;
  background: rgba(0,0,0,.8);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.5);
  border-radius: 10px;

}
label{
  display: block;
  width: 100%;
  color: yellow;

  }

</style>
</head>
<body>

    <h1>Feedback</h1>

<div class="container">
 <form method="post">
    <label for="cname">Customer Name</label>
    <input type="text" id="Customer Name " name="cust_nm" placeholder="Your name..">

    <label for="service">Service</label>
    <select id="service" name="service">
      <option value="none">none</option>
      <option value="excellent">Excellent</option>
      <option value="good">Good</option>
      <option value="poor">Poor</option>
    </select>

    <label for="message">Message</label>
    <textarea id="message" name="feedback" placeholder="Write Message Here ..." style="height:100px"></textarea>

    <input type="submit"  name="submit" value="Submit">
  </form>
</div>

</body>
</html>
<?php
include "acc.php";
 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
  $cust_nm=$_POST['cust_nm'];
  $feedback=$_POST['feedback'];
  $service=$_POST['service'];
  	$sql="INSERT INTO  feedback(cust_nm,comment,service)VALUES('$cust_nm','$feedback','$service')";
	if(mysqli_query($con,$sql) === true)
	{
	  $_SESSION['message']="Feedback Given succesfull user added to the database!!!";
    }
	else
	{
	 $_SESSION['message']="Feedback could not Given to the database!!".mysqli_error($con);
	}
  }
  mysqli_close($con);
?>