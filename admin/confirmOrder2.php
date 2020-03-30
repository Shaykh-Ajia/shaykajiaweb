<?php
session_start();
include("Includes/connection.php");
$type = base64_decode($_GET['type']);
$eventPostId = base64_decode($_GET['ie']);
$userID = base64_decode($_GET['iu']);
$userType = base64_decode($_GET['it']);  
$date=date("d/m/Y");
		$newBal=$_SESSION["newBal"]; 
		
			$newMemberId = "SELECT * FROM tlborder WHERE id='$eventPostId'";
			$newMemberIdQ = mysqli_query($conStr,$newMemberId);
			$newMemberIdF = mysqli_fetch_array($newMemberIdQ,MYSQLI_ASSOC);
			$newMemberIdValue = $newMemberIdF['cust_id'];
			$totalPrice = $newMemberIdF['total_price'];
					$newMemberId = "SELECT * FROM order_details WHERE cust_id='$newMemberIdValue' AND order_id='$eventPostId'";
			$newMemberIdQ = mysqli_query($conStr,$newMemberId);
			$newMemberIdF = mysqli_fetch_array($newMemberIdQ,MYSQLI_ASSOC);
			$product_code = $newMemberIdF['product_code'];
			
					$newMemberId = "SELECT * FROM farmsales WHERE code='$product_code'";
			$newMemberIdQ = mysqli_query($conStr,$newMemberId);
			$newMemberIdF = mysqli_fetch_array($newMemberIdQ,MYSQLI_ASSOC);
			$shipping_cost = $newMemberIdF['shipping_cost'];
			$product_qty = $newMemberIdF['quantity'];
			
			$selectOnline3 = "SELECT count(product_code) AS total_count FROM order_details WHERE product_code='$product_code'";
				//ticketsales WHERE paymentStatus	 = 'Confirm'";
				$selectOnline3Q =mysqli_query($contr,$selectOnline3);
				$selectOnline3F = mysqli_fetch_assoc($selectOnline3Q);
				$total4 = $selectOnline3F['total_count'];	
				//$shipping=$shipping_cost/$total4;
				$shipping=0.00;
				$totalsum=$totalPrice +$shipping;
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
				if($newBal>=$totalsum){
				$updateWallet = "UPDATE wallettransaction
						SET
						newBalance=newBalance-'$totalsum',
						 status = 'Confirmed' 
						WHERE
						ownerId = '$newMemberIdValue' AND status='Confirmed'";
						$confirmW = mysqli_query($conStr,$updateWallet);
	$updateTransact = "UPDATE $type
						SET
						shipping_cost='$shipping',
						status = 'Confirmed' 
						WHERE
						id = '$eventPostId'";
	 if($confirmQ = mysqli_query($conStr,$updateTransact))
		{
		$totalsum="&#8358;".number_format($totalsum,2,'.',',');
		$newBal="&#8358;".number_format($newBal,2,'.',',');
	 $to = "$eMail,lifestyle@mile12connect.com";     //Change to your email address here    
      $subject = "Mile12 Connect Order Notification";
      $message= "\n";                  // Fill in message you wish to receiv
     // $from = "info@gc-currencies.com";   //Change to
	  $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    // Additional headers
    $headers .= "To: $fullname <$eMail>" . "\r\n";
    $headers .= "From: MILE12 CONNECT <lifestyle@mile12connect.com>" . "\r\n";
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
 
	$msg = "<div class='alert alert-success'>Order Confirmed Successful<br> CustomerID: $newMemberIdValue<br>Product Code: $product_code<br>Total Shipping Cost: $shipping_cost<br>Total Number of Customer: $total4<br>  FarmSales Amount : $totalPrice<br>Distributed Shipping Cost: $shipping
	<br>Total Amount: $totalsum</div>";
	}
	}else{
	$msg = "<div class='alert alert-danger'>Order not Confirmed Failed-Insufficient Fund!</div>";
	}
		include("billing2.php");
 
	 
	 
?>
 