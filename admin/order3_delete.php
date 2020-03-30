<?php
include("Includes/connection.php");
$type = base64_decode($_GET['type']);
$eventPostId = base64_decode($_GET['ie']);
$userID = base64_decode($_GET['iu']);
$userType = base64_decode($_GET['it']);

$eventChck = "SELECT * FROM $type WHERE id = '$eventPostId'";
$eventChckQ = mysqli_query($conStr,$eventChck);
$eventChckF = mysqli_fetch_array($eventChckQ,MYSQLI_ASSOC);
 
 		$del1 = "DELETE FROM tlborder WHERE id = '$eventPostId' ";
		 
		 
		if($delQ = mysqli_query($conStr,$del1))
		{ 
			 
				$msg="<div class='alert alert-success'><h4>order Successfully DELETED!</h4></div>";
			 

}else{
			$msg="<div class='alert alert-danger'><h4>Records not Deleted!</h4></div>";
}
include("billing7.php");
?>
<meta http-equiv="refresh" content="2; url=billing7.php" />
