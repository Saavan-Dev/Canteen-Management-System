<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th{
  background-color:#FF6600;
  color:#FFFFFF;
    padding: 8px;
    text-align: left;
	font-size:34px;
    border-bottom: 1px solid #ddd;
}
td {
color:#99FFCC;
    background-color:#FFCC00;
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
	font-size:24px;
}
</style>
</head>
<body>
<table>
  <tr>
    <th>ID</th>
    <th>username</th>
    <th>Email</th>
  </tr>
<?php
include "acc.php";
$id="id";
$username="username";
$email="email";
$query="SELECT id,username,email FROM users";
$sqldata= mysqli_query($con,$query) or die("error getting data..").mysql_error();
while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
{
 echo"<tr><td>";
 echo $row['id'];
 echo"</td><td>";
 echo $row['username'];
 echo"</td><td>";
 echo $row['email'];
 echo "</td>";
}
echo"</table>";
$con->close();
?>
</table>
</body>
</html>
