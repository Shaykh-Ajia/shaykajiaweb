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
			
	$newWallet = "SELECT * FROM wallettransaction WHERE ownerId='$newMemberIdValue'";
			$newWalletQ = mysqli_query($conStr,$newWallet);
			$row_count = mysqli_num_rows($newWalletQ);
			//$newWalletValue = $newMemberIdF['ownerId']; 
		if(	$row_count==0){
					
			$insertEvent = "INSERT  wallettransaction
					SET
				     ownerId='$newMemberIdValue',
					 customer_class='$customer_class',
					amount = '$amount',
					description = '$description',
				 tellerno = '$tellerno',
					 
					date = '$date',
					time = '$time',
					 
					newBalance=$newBal,
				
					status = 'Confirmed'
					
					 
					";
					 
		$insertEventQ = mysqli_query($conStr,$insertEvent);
			}else{
			$updateTransact1 = "UPDATE wallettransaction
						SET
						amount=amount+'$amount',
						newBalance=newBalance+'$amount',
						customer_class='$customer_class',
						description='$description',
						tellerno='$telleno',
						status = 'Confirmed',
						date='$date',
						time='$time'
						WHERE
						ownerId = '$newMemberIdValue'";
		$confirmQ1 = mysqli_query($conStr,$updateTransact1);
		}
			
			$newBal="&#8358;".number_format($newBal,2,'.',',');
			$amount="&#8358;".number_format($amount,2,'.',',');
	  $to = "$eMail,info@kunlexysat.com.ng";     //Change to your email address here    
      $subject = "KUNLEXY SAT Wallet Funds Confirmation";
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
   

		 
$message ="   Dear $fullname,New Funds have been added to your Wallet, Find the details of the Transaction below:<br>
   
   Amount Added: $amount <br>
  Status: Confirmed <br>
  Date: $date <br>
  Wallet Balance: $newBal<br>
New Funds have been Confirmed, If you received this mail and your Balance is Incorrect, Kindly Contact Admin.<br>
	 
   
 	 
 
	";
 mail($to, $subject, $message, $headers); 	
 
	$msg = "<div class='alert alert-success'>Payment Confirmation Successful</div>";
	 
		include("wallet.php");
 
	 
	 
?>
<meta http-equiv="refresh" content="0; url=wallet.php" />