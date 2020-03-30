<?php
session_start();

include("Includes/connection.php");
$schoolid=$_SESSION["schoolid"];
$exptype = mysql_escape_string($_POST['exptype']);
  
// $date=date("d/m/Y");
if($schoolid)
{
	$insertEvent = "INSERT INTO expensetype
					SET
				
					expense_type = '$exptype',
					
					schoolid = '$schoolid'
					";
					
		$insertEventQ = mysql_query($insertEvent);
		
		
		
		if($insertEventQ )
		{
				$msg = "<div class='alert alert-success'>New Expenses Added Successfully</div>";
		}
		if(!$insertEventQ )
		{
				$msg = "<div class='alert alert-danger'>Expenses not Added Successfully... </div>";
		}
}
include("expenses_add.php");
?>
<!--<meta http-equiv="refresh"  content="0; url=list-event.php"  / > -->