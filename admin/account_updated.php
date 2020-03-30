 
<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

 include("Includes/connection.php");

$id = $_POST['id'];
 $date = trim(mysqli_real_escape_string($conStr,$_POST["date"]));
	$studentname = trim(mysqli_real_escape_string($conStr,$_POST["studentname"]));
		$acct_type = trim(mysqli_real_escape_string($conStr,$_POST["acct_type"]));		
		$status = trim(mysqli_real_escape_string($conStr,$_POST["status"]));		
		$balance = trim(mysqli_real_escape_string($conStr,$_POST["balance"]));
		 $class = trim(mysqli_real_escape_string($conStr,$_POST["class"]));
		$term = trim(mysqli_real_escape_string($conStr,$_POST["term"]));
		$year = trim(mysqli_real_escape_string($conStr,$_POST["year"]));
$amountcr = trim(mysqli_real_escape_string($conStr,$_POST["amountcr"]));
$amountdr = trim(mysqli_real_escape_string($conStr,$_POST["amountdr"]));
		 
		$class = trim(mysqli_real_escape_string($conStr,$_POST["class"]));
		 
$rsUpdate = mysqli_query($conStr,"UPDATE  mainacc
					SET
				
					studentname = '$studentname',
					accttype = '$acct_type',
					year = '$year',
					 
					date = '$date',
					term = '$term',
					 amountdr='$amountdr',
					amountcr='$amountcr',
					 balance='$balance',
					status = '$status'
					
	WHERE id = '$id' " );
	
	 


if($rsUpdate)
		{
				$msg = "<div class='alert alert-success'>Payment Updated Successfully...</div>";
		}
		if(!$rsUpdate)
		{
				$msg = "<div class='alert alert-danger'>Payment Update Not Successfully... </div>";
		}
 
include("account_update.php");
?>

