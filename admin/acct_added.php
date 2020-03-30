<?php
session_start();

include("Includes/connection.php");
$schoolid=$_SESSION["schoolid"];
$acct_type = mysqli_escape_string($conStr,$_POST['acct_type']);
 $description = mysqli_escape_string($conStr,$_POST['description']);
// $date=date("d/m/Y");
if($schoolid)
{
	$insertEvent = "INSERT INTO acctype
					SET
				
					accounttype = '$acct_type',
					description = '$description',
					schoolid = '$schoolid'
					";
					
		$insertEventQ = mysqli_query($conStr,$insertEvent);
		
		
		
		if($insertEventQ )
		{
				$msg = "<div class='alert alert-success'>Account Type Added Successfully</div>";
		}
		if(!$insertEventQ )
		{
				$msg = "<div class='alert alert-danger'>Account Type not Added Successfully... </div>";
		}
}
include("account_type.php");
?>
<!--<meta http-equiv="refresh"  content="0; url=list-event.php"  / > -->