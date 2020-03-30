 
<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

 include("Includes/connection.php");

$id = $_POST['id'];
 $date = trim(mysql_real_escape_string($_POST["date"]));
	 
		$expenses_type = trim(mysql_real_escape_string($_POST["expenses_type"]));		
		$description = trim(mysql_real_escape_string($_POST["description"]));		
		$amount = trim(mysql_real_escape_string($_POST["amount"]));
		 
		$term = trim(mysql_real_escape_string($_POST["term"]));
		 
$rsUpdate = mysql_query("UPDATE  expenses
					SET
				
					 
					expenses_type = '$expenses_type',
				
					date = '$date',
					term = '$term',
					 amount='$amount',
					
					description = '$description'
					
	WHERE id = '$id' ");
	
	 


if($rsUpdate)
		{
				$msg = "<div class='alert alert-success'>Expenses Updated Successfully...</div>";
		}
		if(!$rsUpdate)
		{
				$msg = "<div class='alert alert-danger'>Expenses Update Not Successfully... </div>";
		}
 
include("expenses_update.php");
?>

