<?php
session_start();
include("Includes/connection.php");
$type = base64_decode($_GET['type']);
$eventPostId = base64_decode($_GET['ie']);
$userID = base64_decode($_GET['iu']);
$userType = base64_decode($_GET['it']); 
	$date = date("d/m/Y");
	//$cust_id=$_SESSION["cust_id"];
$time=date("H:m:s");
	$updateTransact = "UPDATE $type
						SET
						status = 'Rejected' 
						WHERE
						id = '$eventPostId'";
	 $confirmQ = mysqli_query($conStr,$updateTransact) ;
$newMemberId = "SELECT * FROM $type WHERE id='$eventPostId'";
			$newMemberIdQ = mysqli_query($conStr,$newMemberId);
			$newMemberIdF = mysqli_fetch_array($newMemberIdQ,MYSQLI_ASSOC);
			$cust_id = $newMemberIdF['cust_id']; 
			$fullname = $newMemberIdF['fullname'];  
			$productType = $newMemberIdF['productType']; 
			$van_id = $newMemberIdF['van_id']; 
			$order_id = $newMemberIdF['order_id']; 
			 	 
		 
					 
	 
			
			 
	  $to = "lifestyle@mile12connect.com";     //Change to your email address here    
      $subject = "VAN DELIVERY REJECTED";
      $message= "\n";                  // Fill in message you wish to receiv
     // $from = "info@gc-currencies.com";   //Change to
	  $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    // Additional headers
    $headers .= "To: MILE12 CONNECT <$eMail>" . "\r\n";
    $headers .= "From: VAN DRIVER <lifestyle@mile12connect.com>" . "\r\n";
    $headers.="X-Mailer: PHP/" . phpversion()."\r\n";
    $headers.= "BCC: $eMail"; 
//==============================================================================================================
   

		 
$message ="    
    Order ID: $order_id <br>
  Customer Name: $fullname <br>
   Product Type: $productType <br>
    Van ID: $van_id <br>
  Status: Rejected <br>
  Date: $date <br>
  
The Delivery of $fullname has been Rejected.
	 
   
 	 
 
	";
 mail($to, $subject, $message, $headers); 	
 
	$msg = "<div class='alert alert-success'>Delivery Rejected!</div>";
	 
		include("billing6.php");
 
	 
	 
?>
<meta http-equiv="refresh" content="0; url=billing6.php" />