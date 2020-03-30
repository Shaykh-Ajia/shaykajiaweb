<?php
include("Includes/connection.php");
$type = base64_decode($_GET['type']);
$eventPostId = base64_decode($_GET['ie']);
$userID = base64_decode($_GET['iu']);
$userType = base64_decode($_GET['it']);

$eventChck = "SELECT * FROM $type WHERE id = '$eventPostId'";
$eventChckQ = mysqli_query($conStr,$eventChck);
$eventChckF = mysqli_fetch_array($eventChckQ,MYSQLI_ASSOC);
$author = $eventChckF['author'];
$del = "DELETE FROM userinfo WHERE userLoginId = '$eventPostId' ";
		 
		if($delQ = mysqli_query($conStr,$del))
		{ 
			 
				$msg="<div class='alert alert-success'><h4>User Successfully DELETED!</h4></div>";
			 

}else{
			$msg="<div class='alert alert-danger'><h4>Records not Deleted!</h4></div>";
		}
		include("staff_index.php");
		?>
		<meta http-equiv="refresh" content="2; url=staff_index.php" />
		
