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
						status = 'Confirmed' 
						WHERE
						id = '$eventPostId'";
	 $confirmQ = mysqli_query($conStr,$updateTransact) ;
$newMemberId = "SELECT * FROM $type WHERE id='$eventPostId'";
			$newMemberIdQ = mysqli_query($conStr,$newMemberId);
			$newMemberIdF = mysqli_fetch_array($newMemberIdQ,MYSQLI_ASSOC);
			$reg_id = $newMemberIdF['reg_id']; 
			$fullname = $newMemberIdF['fullname'];  
			 $email = $newMemberIdF['email']; 
		
			 
			 	 
		 
					 
	 
			
			 
	  $to = "$email,info@kunlexysat.com.ng";     //Change to your email address here    
      $subject = "CUSTOMER CONFIRMATION";
      $message= "\n";                  // Fill in message you wish to receiv
     // $from = "info@gc-currencies.com";   //Change to
	  $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    // Additional headers
    $headers .= "To: CUSTOMER CONFIRMATION <$email>" . "\r\n";
    $headers .= "From:KUNLEXY SAT<info@kunlexysat.com.ng>" . "\r\n";
    $headers.="X-Mailer: PHP/" . phpversion()."\r\n";
    $headers.= "BCC: $eMail"; 
//==============================================================================================================
   

		 
$message ="    
    New Customer has been Confirmed.
     
  Status: Confirmed <br>
  
  Date: $date <br>
  

	 
   
 	 
 
	";
 mail($to, $subject, $message, $headers); 	
 
	$msg = "<div class='alert alert-success'>Customer Confirmation Successful</div>";
	 
		include("customer_print.php");
 
	 
	 
?>
<meta http-equiv="refresh" content="0; url=customer_print.php" />