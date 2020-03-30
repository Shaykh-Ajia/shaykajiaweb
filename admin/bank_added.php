<?php
session_start();

include("Includes/connection.php");
$schoolid=$_SESSION["schoolid"];
$cat = mysqli_escape_string($conStr,$_POST['cat']);
$status = mysqli_escape_string($conStr,$_POST['status']);
  
 $date=date("d/m/Y");
if($schoolid)
{
	$insertEvent = "INSERT INTO categories
					SET
				
					categoryName = '$cat',
					status = '$status'
					
					
					 
					";
					
		$insertEventQ = mysqli_query($conStr,$insertEvent);
		
		
		
		if($insertEventQ )
		{
				$msg = "<div class='alert alert-success'>New Category Added Successfully</div>";
		}
		if(!$insertEventQ )
		{
				$msg = "<div class='alert alert-danger'>Category not Added Successfully... </div>";
		}
}
include("bank_add.php");
?>
<!--<meta http-equiv="refresh"  content="0; url=list-event.php"  / > -->