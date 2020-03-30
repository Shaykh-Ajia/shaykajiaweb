 
<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

 include("Includes/connection.php");

$id = $_POST['id'];
 
	 
		$storeName = trim(mysqli_real_escape_string($conStr,$_POST["storeName"]));		
		 $fullname = trim(mysqli_real_escape_string($conStr,$_POST["fullname"]));	
		$address = trim(mysqli_real_escape_string($conStr,$_POST["address"]));
		 $phoneno = trim(mysqli_real_escape_string($conStr,$_POST["phoneno"]));
		 $product_sales = trim(mysqli_real_escape_string($conStr,$_POST["product_sales"]));
		 
$rsUpdate = mysqli_query($conStr,"UPDATE  othermarket
					SET
 
					industry = '$storeName',
				    fullname='$fullname',
					address='$address',
					phoneno='$phoneno', 
					product_sales='$product_sales'
	WHERE id = '$id' ");
	
	 


if($rsUpdate)
		{
				$msg = "<div class='alert alert-success'>Store Updated Successfully...</div>";
		}
		if(!$rsUpdate)
		{
				$msg = "<div class='alert alert-danger'>Store Update Not Successfully... </div>";
		}
 
include("store_update.php");
?>

