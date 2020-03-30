<?php
session_start();

include("Includes/connection.php");
$schoolid=$_SESSION["schoolid"];
$schoolid=$_SESSION["schoolid"];
$userLogId = $_SESSION['login_id'];
$usrID = $_SESSION['login_id'];
$usertype = $_SESSION['user_type'];
		 $time=date("H:m:s");
$month=date("F");
$year=date("Y");
$date=date("d/m/Y");
$walletbal = mysqli_escape_string($conStr,$_POST['walletbal']);	
		 $date = trim(mysqli_real_escape_string($conStr,$_POST["date"]));
		 $cust_id = trim(mysqli_real_escape_string($conStr,$_POST["cust_id"]));
		  $amount = trim(mysqli_real_escape_string($conStr,$_POST["amount"]));
		    $cust_name = trim(mysqli_real_escape_string($conStr,$_POST["customer_name"]));
		  $details = trim(mysqli_real_escape_string($conStr,$_POST["details"]));
			 $postedby = trim(mysqli_real_escape_string($conStr,$_POST["postedby"]));
			 $address = trim(mysqli_real_escape_string($conStr,$_POST["address"]));
			  $location = trim(mysqli_real_escape_string($conStr,$_POST["location"]));
			 $status="Pending";
			 $productType=trim(mysqli_real_escape_string($conStr,$_POST["details"]));
			  $invoiceno="M12".rand(1000,10000);
			  $shipping=0.00;
			  $amount=str_replace(",", "", $amount);
			    $query = "SELECT * FROM wallettransaction WHERE ownerId='$cust_id' AND status='Confirmed' order by id Asc";
  
  $result = mysqli_query($conStr,$query );

       while( ($r = mysqli_fetch_array( $result,MYSQLI_ASSOC )) )  {
        $Fetchedid= $r["id"];
     
 $Fetchedbal = $r["newBalance"];
        if( !$Fetchedbal ) { $Fetchedbal="&nbsp;"; }
 
 
 
			}
			
			
			
		if($schoolid)
{

  
	 
	$insertReply = "INSERT INTO reply
					SET
					cust_name = '$cust_name',
					cust_id = '$cust_id',
					amount = '$amount', 
					details = '$details',
					 address='$address',
					 location='$location',
					 postedby='$postedby',
					  status='$status',  
					date = '$date'
					";
					
		$insertReplyQ = mysqli_query($conStr,$insertReply);
		$selectName = "SELECT * FROM userinfo WHERE cust_id = '$cust_id'";
				$selectNameQ = mysqli_query($conStr,$selectName);
				$selectNameF = mysqli_fetch_array($selectNameQ,MYSQLI_ASSOC);
				$fname= $selectNameF['fName'];
				$lName= $selectNameF['lName'];
				$sName= $selectNameF['sName'];
				$fullname=$fName." ".$lName." ".$sName;
				$phone= $selectNameF['phone'];
				$customer_class= $selectNameF['customer_class'];
				$userLogId= $selectNameF['userLoginId'];
				
 $recent = "SELECT * FROM userlogin WHERE id='$userLogId'";
		$recentQ = mysqli_query($conStr,$recent);
		$recentF = mysqli_fetch_array($recentQ,MYSQLI_ASSOC);
		$eMail = $recentF['eMail'];
		
  		$description="PAYMENT FOR THE ITEMS LIST ON THE MILE12 CONNECT";
	$newbal=$Fetchedbal - $amount;
	$insertWallet = "INSERT  INTO tmp_wallet
					SET
				     ownerId='$cust_id',
					amount = '-$amount',
					description = '$description',
				 tellerno = 'Customer List',
					 
					date = '$date',
					time = '$time',
					 
					newBalance='$newbal',
				customer_class='$customer_class',
					status = '$status'
					
					 
					";
					 
		$insertWalletQ = mysqli_query($conStr,$insertWallet);
		
		$insertEvent = "INSERT INTO tlborder
					SET
					
					order_id = '$invoiceno' ,
					total_price = '$amount' ,
					shipping_cost = '$shipping' ,
					date = '$date' ,
					 
					cust_id = '$cust_id' ,
					fullname = '$fullname' ,
					phoneno='$phone' ,
					 email='$eMail',
					  address='$address',
					   location='$location',
					year='$year' ,
					month='$month' ,
					productType='$productType',
					
					status = '$status' ";
					
		$insertEventQ = mysqli_query($conStr,$insertEvent);
		
		
		if($insertEventQ )
		{
		$to = "lifestyle@mile12connect.com,$eMail";     //Change to your email address here    
      $subject = "Customer List Notification";
      $message= "\n";                  // Fill in message you wish to receiv
     // $from = "info@gc-currencies.com";   //Change to
	  $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    // Additional headers
    $headers .= "To: Mile12connect <lifestyle@mile12connect.com>" . "\r\n";
    $headers .= "From: MILE12CONNECT<admin@mile12connect.com>" . "\r\n";
    $headers.="X-Mailer: PHP/" . phpversion()."\r\n";
    $headers.= "BCC: lifestyle@mile12connect.com"; 
//==============================================================================================================
   

		 
$message ="    
  Invoice No:$invoiceno<br>
  Customer Name :$fullname<br>
  Date: $date <br>
  
  $details <br>
  Payment Due(TotalPrice + Service Charge + Shipping Cost) :&#8358;$amount.00<br> 
	Thanks for shopping on Mile12 Connect
   
 	 
 
	";
 mail($to, $subject, $message, $headers); 
				$msg = "<div class='alert alert-success'>Order Listing Added  Successfully</div>";
		}
		if(!$insertEventQ )
		{
				$msg = "<div class='alert alert-danger'>Order Listing not Added Successfully... </div>";
		}
}
include("reply.php");
?>
<!--<meta http-equiv="refresh"  content="0; url=list-event.php"  / > -->