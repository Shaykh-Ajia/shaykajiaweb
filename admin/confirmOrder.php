<?php
session_start();
include("Includes/connection.php");
	 $newBal=$_SESSION["newBal"]; 
		 
$type = base64_decode($_GET['type']);
$eventPostId = base64_decode($_GET['ie']);
$userID = base64_decode($_GET['iu']);
$userType = base64_decode($_GET['it']);  
$date=date("d/m/Y");
$newMemberId = "SELECT * FROM tlborder WHERE id='$eventPostId'";
			$newMemberIdQ = mysqli_query($conStr,$newMemberId);
			$newMemberIdF = mysqli_fetch_array($newMemberIdQ,MYSQLI_ASSOC);
			$newMemberIdValue = $newMemberIdF['cust_id'];
			$totalPrice = $newMemberIdF['total_price'];
			$shipping = $newMemberIdF['shipping_cost'];
			$totalsum=$totalPrice; 
			$newMemberId = "SELECT * FROM user_info WHERE cust_id='$newMemberIdValue'";
			$newMemberIdQ = mysqli_query($conStr,$newMemberId);
			$newMemberIdF = mysqli_fetch_array($newMemberIdQ,MYSQLI_ASSOC);
			$user_id = $newMemberIdF['userLoginId'];
			$fname= $newMemberIdF['fName'];
			$lName= $newMemberIdF['lName'];
			$sName= $newMemberIdF['sName'];
			$fullname=$fName." ".$lName." ".$sName; 
			$newMemberId = "SELECT * FROM userlogin WHERE id='$user_id'";
			$newMemberIdQ = mysqli_query($conStr,$newMemberId);
			$newMemberIdF = mysqli_fetch_array($newMemberIdQ,MYSQLI_ASSOC);
			$eMail = $newMemberIdF['eMail']; 
  
				$updateWallet = "UPDATE wallettransaction
						SET
						newBalance=newBalance-'$totalsum',
						 status = 'Confirmed' 
						WHERE
						ownerId = '$newMemberIdValue'";
						$confirmW = mysqli_query($conStr,$updateWallet);
	$updateTransact = "UPDATE $type
						SET
						status = 'Confirmed' 
						WHERE
						id = '$eventPostId'";
	 if($confirmQ = mysqli_query($conStr,$updateTransact))
		{
		$totalsum="&#8358;".number_format($totalsum,2,'.',',');
		$newBal="&#8358;".number_format($newBal,2,'.',',');
	 $to = "$eMail,info@kunlexysat.com.ng";     //Change to your email address here    
      $subject = "Kunlexy Sat Order Notification";
      $message= "\n";                  // Fill in message you wish to receiv
     // $from = "info@gc-currencies.com";   //Change to
	  $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    // Additional headers
    $headers .= "To: $fullname <$eMail>" . "\r\n";
    $headers .= "From:KUNLEXY SAT <info@kunlexysat.com.ng>" . "\r\n";
    $headers.="X-Mailer: PHP/" . phpversion()."\r\n";
    $headers.= "BCC: $eMail"; 
//==============================================================================================================
   

		 
$message ="   Dear $fullname, Thanks for Patronizing us<br>
   
  Total Amount: $totalsum <br>
  Status: Confirmed <br>
  Date: $date <br>
  Wallet Balance: $newBal<br>
Your Order has been Confirmed.
	 
   
 	 
 
	";
 mail($to, $subject, $message, $headers); 		
		 
		
 
	$msg = "<div class='alert alert-success'>Order Confirmed Successful</div>";
	}
	 
		include("billing.php");
 
	 
	 
?>
 