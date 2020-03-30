<?php
session_start();

include("Includes/connection.php");
//$schoolid=$_SESSION["schoolid"];
$class = mysqli_escape_string($_POST['class']);
$amount = mysqli_escape_string($_POST['amount']);  
$date=date("d/m/Y");
 
	$insertEvent = "INSERT INTO tlbcharges
					SET
				
					location = '$class',
					date = '$date',
					amount = '$amount'
					";
					
		$insertEventQ = mysqli_query($conStr,$insertEvent);
		$rsUpdate = mysqli_query($conStr,"UPDATE wallettransaction
				SET 
					newBalance = newBalance-'$amount'
	WHERE status = 'Confirmed' AND customer_class='$class' ");
		
		
		if($insertEventQ )
		{
				$msg = "<div class='alert alert-success'>New Charges Added Successfully</div>";
		}
		if(!$insertEventQ )
		{
				$msg = "<div class='alert alert-danger'>Charges not Added Successfully... </div>";
		}
 
include("charges_add.php");
?>
<!--<meta http-equiv="refresh"  content="0; url=list-event.php"  / > -->