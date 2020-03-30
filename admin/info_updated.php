 
<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

 include("Includes/connection.php");

$id = $_POST['id'];
 
	 
$title = mysqli_escape_string($conStr,$_POST['title']);
$summary = mysqli_escape_string($conStr, $_POST['summary']);

$url = mysqli_escape_string($conStr, $_POST['url']);
 
$category =  mysqli_escape_string($conStr,$_POST['category']); 
$date =  mysqli_escape_string($conStr,$_POST['date']); 		
		 	
		 
		 
		 
		 
$rsUpdate = mysqli_query($conStr,"UPDATE  lectures
					SET
				
					 
					title = '$title',
					category = '$category' ,
					 
				 
					summary = '$summary' ,
					 
					 eventBanner = '$url' ,
					startDate = '$date' 
					
					 
					
	WHERE id = '$id' ");
	
	 


if($rsUpdate)
		{
				$msg = "<div class='alert alert-success'>Lecture Updated Successfully...</div>";
		}
		if(!$rsUpdate)
		{
				$msg = "<div class='alert alert-danger'>Lecture Update Not Successfully... </div>";
		}
 
include("info_update.php");
?>

