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
			$newMemberIdValue = $newMemberIdF['ownerId']; 
			$newBal = $newMemberIdF['newBalance'];  
			$amount = $newMemberIdF['amount']; 
			$customer_class = $newMemberIdF['customer_class']; 
			$description = $newMemberIdF['description']; 
			$tellerno = $newMemberIdF['tellerno']; 
$newMemberId = "SELECT * FROM userinfo WHERE cust_id='$newMemberIdValue'";
			$newMemberIdQ = mysqli_query($conStr,$newMemberId);
			$newMemberIdF = mysqli_fetch_array($newMemberIdQ,MYSQLI_ASSOC);
			$user_id = $newMemberIdF['userLoginId'];
			$fName= $newMemberIdF['fName'];
			$lName= $newMemberIdF['lName'];
			$sName= $newMemberIdF['sName'];
			$fullname=$fName." ".$lName." ".$sName; 
			$newMemberId = "SELECT * FROM userlogin WHERE id='$user_id'";
			$newMemberIdQ = mysqli_query($conStr,$newMemberId);
			$newMemberIdF = mysqli_fetch_array($newMemberIdQ,MYSQLI_ASSOC);
			$eMail = $newMemberIdF['eMail']; 
			
	
		 
			
			$newBal="&#8358;".number_format($newBal,2,'.',',');
			$amount="&#8358;".number_format($amount,2,'.',',');
	  $to = "$eMail,info@kunlexysat.com.ng";     //Change to your email address here    
      $subject = "KUNLEXY SAT Wallet Funds Rejected!";
      $message= "\n";                  // Fill in message you wish to receiv
     // $from = "info@gc-currencies.com";   //Change to
	  $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    // Additional headers
    $headers .= "To: $fullname <$eMail>" . "\r\n";
    $headers .= "From: KUNLEXY SAT <info@kunlexysat.com.ng>" . "\r\n";
    $headers.="X-Mailer: PHP/" . phpversion()."\r\n";
    $headers.= "BCC: $eMail"; 
//==============================================================================================================
   

		 
$message ="   Dear $fullname,Your Funds added to your Wallet has been Rejected!, Find the details of the Transaction below:<br>
   
   Amount Added: $amount <br>
  Status: Rejected <br>
  Date: $date <br>
  Wallet Balance: $newBal<br>
Your Funds has been Rejected, If you received this mail and your Balance is Incorrect, Kindly Contact Admin.<br>
	 
   
 	 
 
	";
 mail($to, $subject, $message, $headers); 	
 
	$msg = "<div class='alert alert-success'>Payment Rejected Successful</div>";
	 
		include("wallet.php");
 
	 
	 
?>
<meta http-equiv="refresh" content="6; url=wallet.php" />