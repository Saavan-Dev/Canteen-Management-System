<?php
	include('acc.php');

	$id=$_GET['product'];

	$pname=$_POST['pname'];
	$price=$_POST['price'];

	$sql="select * from product where productid='$id'";
	$query=$con->query($sql);
	$row=$query->fetch_array();

	$fileinfo=PATHINFO($_FILES["photo"]["name"]);

	if (empty($fileinfo['filename'])){
		$location = $row['photo'];
	}
	else{
		$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
		move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/" . $newFilename);
		$location="upload/" . $newFilename;
	}

	$sql="update product set productname='$pname', price='$price', photo='$location' where productid='$id'";
	$con->query($sql);

	header('location:prd.php');
?>