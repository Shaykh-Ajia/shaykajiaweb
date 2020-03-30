<?php
include("Includes/connection.php");
$type = base64_decode($_GET['type']);
$eventPostId = base64_decode($_GET['ie']);
$userID = base64_decode($_GET['iu']);
$userType = base64_decode($_GET['it']);

$eventChck = "SELECT * FROM $type WHERE id = '$eventPostId'";
$eventChckQ = mysql_query($eventChck);
$eventChckF = mysql_fetch_array($eventChckQ);
$author = $eventChckF['author'];
 		$del1 = "DELETE FROM expenses WHERE id = '$eventPostId' ";
		 
		 
		if($delQ = mysql_query($del1))
		{ 
			 
				$msg="<div class='alert alert-success'><h4>Expenses Successfully DELETED!</h4></div>";
			 

}else{
			$msg="<div class='alert alert-danger'><h4>Records not Deleted!</h4></div>";
}
include("expenses_view.php");
?>
<meta http-equiv="refresh" content="2; url=expenses_view.php" />
