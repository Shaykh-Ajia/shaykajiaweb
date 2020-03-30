<?php
session_start();

include("Includes/connection.php");
//$schoolid=$_SESSION["schoolid"];
$location = mysqli_escape_string($conStr,$_POST['location']);
$amount = mysqli_escape_string($conStr,$_POST['amount']);  
// $date=date("d/m/Y");
 
	$insertEvent = "INSERT INTO tlblocation
					SET
				
					location = '$location',
					
					amount = '$amount'
					";
					
		$insertEventQ = mysqli_query($conStr,$insertEvent);
		
		
		
		if($insertEventQ )
		{
				$msg = "<div class='alert alert-success'>New Location Added Successfully</div>";
		}
		if(!$insertEventQ )
		{
				$msg = "<div class='alert alert-danger'>Location not Added Successfully... </div>";
		}
 
include("location_add.php");
?>
<!--<meta http-equiv="refresh"  content="0; url=list-event.php"  / > -->