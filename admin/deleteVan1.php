<?php
include("Includes/connection.php");
$type = base64_decode($_GET['type']);
$eventPostId = base64_decode($_GET['ie']);
$userID = base64_decode($_GET['iu']);
$userType = base64_decode($_GET['it']);

$eventChck = "SELECT * FROM $type WHERE id = '$eventPostId'";
$eventChckQ = mysqli_query($conStr,$eventChck);
$eventChckF = mysqli_fetch_array($eventChckQ,MYSQLI_ASSOC);
 
 		$del1 = "DELETE FROM van_order WHERE id = '$eventPostId' ";
		 
		 
		if($delQ = mysqli_query($conStr,$del1))
		{ 
			 
				$msg="<div class='alert alert-success'><h4>The Van Delivery has been Deleted!</h4></div>";
			 

}else{
			$msg="<div class='alert alert-danger'><h4>Records not Deleted!</h4></div>";
}
include("billing6.php");
?>
<meta http-equiv="refresh" content="2; url=billing6.php" />
