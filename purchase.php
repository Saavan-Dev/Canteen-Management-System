<?php
	include('acc.php');
	if(isset($_POST['productid'])){
 
		$customer=$_POST['customer'];
		$sql="insert into purchase (customer, date_purchase) values ('$customer', NOW())";
		$con->query($sql);
		$pid=mysqli_insert_id($con);
                              
		$total=0;
 
		foreach($_POST['productid'] as $product):
		$proinfo=explode("||",$product);
		$productid=$proinfo[0];
		$iterate=$proinfo[1];
		$sql="select * from product where productid='$productid'";
		$query=$con->query($sql);
		
		$row=$query->fetch_array();
 
		if (isset($_POST['quantity_'.$iterate])){
			$subt=$row['price']*$_POST['quantity_'.$iterate];
			$total+=$subt;
          	$sql="insert into purchase_detail (purchaseid, productid, quantity) values ('$pid', '$productid', '".$_POST['quantity_'.$iterate]."')";
			$con->query($sql);
		}
		endforeach;
 		   //echo $total;
		
 		$sql="update purchase set total='$total' where purchaseid='$pid'";
 		$con->query($sql);
		?>
		<script>
			window.location.href='order.php';
		</script>
		<?php
	}
	else{
		?>
		<script>
			window.alert('Please select a product');
			window.location.href='order.php';
		</script>
		<?php
	}
?>