<?php
	include('acc.php');

	$id = $_GET['product'];

	$sql="delete from product where productid='$id'";
	$con->query($sql);

	header('location:prd.php');
?>