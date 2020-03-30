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
$del = "DELETE FROM questions WHERE id = '$eventPostId' ";
		$delQ = mysqli_query($conStr,$del);
 		$del1 = "DELETE FROM $type WHERE id = '$eventPostId' ";
		 
		 
		if($delQ = mysqli_query($conStr,$del1))
		{ 
			 
				$msg="<div class='alert alert-success'><h4>Question Successfully DELETED!</h4></div>";
			 

}else{
			$msg="<div class='alert alert-danger'><h4>Records not Deleted!</h4></div>";
}
include("customer_print.php");
?>
<meta http-equiv="refresh" content="2; url=customer_print.php" />
