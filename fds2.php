<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
body{
background-image:url(../../images/bg3.jpg);
background-size:cover;
}
.background-image{
opacity:1.5;
}
th{
font-size:24px;
background-color:#CCCCCC;
}

td{
font-family:Georgia, "Times New Roman", Times, serif;
font-size:18px;
color:#FF3333;
background: scroll;
}
label{
font-size:18px;
color:#CCFF33;
}

</style>
<?php include('nav2.php'); ?>
<?php include('header.php'); ?>
</head>

<?php include('acc.php'); ?>
<div class="container">
	<h2 class="page-header text-center" style="color:#99CC33
	;">Food Items We Have..</h2>
	<form method="POST" action="ph1.php">
		<table class="table table-striped table-bordered">
			<thead>
				<th>ID</th>
				<th>Product Name</th>
				<th>Price</th>
			</thead>
			<tbody>
				<?php 
					$sql="select * from product";
					$query=$con->query($sql);
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td><?php echo $row['productid']; ?></td>
							<td><?php echo $row['productname']; ?></td>
							<td class="text-right">&#x20A8; <?php echo number_format($row['price'], 2); ?></td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</form>
</div>
<body>
</body>
</html>
