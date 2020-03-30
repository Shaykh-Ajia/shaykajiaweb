 
<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

 include("Includes/connection.php");

$id = $_POST['id'];
 
	 
		$location = trim(mysqli_real_escape_string($conStr,$_POST["location"]));		
		 	
		$amount = trim(mysqli_real_escape_string($conStr,$_POST["amount"]));
		 
		 
		 
$rsUpdate = mysqli_query($conStr,"UPDATE  tlbcharges
					SET
				
					 
					location = '$location',
				
					 
					 amount='$amount'
					
					 
					
	WHERE id = '$id' ");
	
	 


if($rsUpdate)
		{
				$msg = "<div class='alert alert-success'>Weight Updated Successfully...</div>";
		}
		if(!$rsUpdate)
		{
				$msg = "<div class='alert alert-danger'>Weight Update Not Successfully... </div>";
		}
 
include("charges_update.php");
?>

