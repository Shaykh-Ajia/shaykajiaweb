 
<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

 include("components/connect.php");
$id=$_POST["id"];
$productName = mysqli_escape_string($conStr,$_POST['productName']);
 
 
$price = mysqli_escape_string($conStr, $_POST['price']);
 
$otherMarket =  mysqli_escape_string($conStr,$_POST['otherMarket']);
$otherPrice =  mysqli_escape_string($conStr,$_POST['otherPrice']);
$price_diff =  mysqli_escape_string($conStr,$_POST['price_diff']);
$avgWeight =  mysqli_escape_string($conStr,$_POST['avgWeight']);
//$total_amt =  mysqli_escape_string($conStr,$_POST['total_amt']);
//$status =  mysqli_escape_string($conStr,$_POST['status']);
//$qty =  mysqli_escape_string($conStr,$_POST['qty']); 
//$startDate =  mysqli_escape_string($conStr,$_POST['startDate']); 
		 
if($productName)
{
	$insertEvent = "UPDATE event
					SET
					
					item = '$productName' ,
				 
					 
					price = '$price' ,
			 
					other_market = '$otherMarket' ,
					other_market_price = '$otherPrice' ,
					price_diff = '$price_diff' ,
					 
					 
					avg_weight = '$avgWeight' 
					
					WHERE id='$id'
					";
					
		$insertEventQ = mysqli_query($conStr,$insertEvent);
		 
		
		 
			
			 
		 
		
		if($insertEventQ )
		{
				$msg = "<div class='alert alert-success'>Product updated Successfully...  </div>";
		}
		if(!$insertEventQ )
		{
				$msg = "<div class='alert alert-danger'>Product Not updated Successfully... </div>";
		}
}
include("product_update.php");
?>

