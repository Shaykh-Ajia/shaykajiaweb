<?php
include("Includes/connection.php");
$type = base64_decode($_GET['type']);
$eventPostId = base64_decode($_GET['ie']);
$userID = base64_decode($_GET['iu']);
$userType = base64_decode($_GET['it']);

$eventChck = "SELECT * FROM $type WHERE id = '$eventPostId'";
$eventChckQ = mysqli_query($conStr,$eventChck);
$eventChckF = mysqli_fetch_array($eventChckQ,MYSQLI_ASSOC);
 $updateTransact = "UPDATE $type
						SET
						status = 'Rejected' 
						WHERE
						id = '$eventPostId'";
						
	// $confirmQ = mysqli_query($conStr,$updateTransact) ;
 	//	$del1 = "DELETE FROM tlborder WHERE id = '$eventPostId' ";
		 
		 
		if($delQ = mysqli_query($conStr,$updateTransact))
		{ 
			 
				$msg="<div class='alert alert-success'><h4>The Order has been Rejected!</h4></div>";
			 

}else{
			$msg="<div class='alert alert-danger'><h4>Records not Rejected!</h4></div>";
}
include("reply_index.php");
?>
<meta http-equiv="refresh" content="2; url=reply_index.php" />
