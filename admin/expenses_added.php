<?php
session_start();

include("Includes/connection.php");
$schoolid=$_SESSION["schoolid"];
$date = date("d/m/Y");
	$expenses_type = trim(mysql_real_escape_string($_POST["expenses_type"]));
		 
		$amount= trim(mysql_real_escape_string($_POST["amount"]));
		 
		$description = trim(mysql_real_escape_string($_POST["description"]));
		 
		$term = trim(mysql_real_escape_string($_POST["term"]));
		$date = trim(mysql_real_escape_string($_POST["date"]));
		 
		 
		 
		 
		if($schoolid)
{

  
	 
	$insertEvent = "INSERT INTO expenses
					SET
				
					expenses_type = '$expenses_type',
					description = '$description',
					date = '$date',
					term = '$term',
					amount = '$amount',
					
					schoolid = '$schoolid'
					";
					
		$insertEventQ = mysql_query($insertEvent);
		
  		
		
		if($insertEventQ )
		{
				$msg = "<div class='alert alert-success'>New Expenses Added to Account Successfully</div>";
		}
		if(!$insertEventQ )
		{
				$msg = "<div class='alert alert-danger'>Expenses not Added Successfully... </div>";
		}
}
include("expenses_add.php");
?>
<!--<meta http-equiv="refresh"  content="0; url=list-event.php"  / > -->