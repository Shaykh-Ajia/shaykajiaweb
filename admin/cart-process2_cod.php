<?php
session_start();
$cust_id=$_SESSION["cust_id"];
$eMail=$_SESSION['user_email'];
include("components/connect.php");


$selectName = "SELECT * FROM userinfo WHERE cust_id = '$cust_id'";
				$selectNameQ = mysqli_query($conStr,$selectName);
				$selectNameF = mysqli_fetch_array($selectNameQ,MYSQLI_ASSOC);
				$fName= $selectNameF['fName'];
				$lName= $selectNameF['lName'];
				$sName= $selectNameF['sName'];
				$fullname=$fName." ".$lName." ".$sName;
				$phone= $selectNameF['phone'];
				//$address= $selectNameF['address'];
				
				$userLogId= $selectNameF['userLoginId'];
				
 $recent = "SELECT * FROM userlogin WHERE id='$userLogId'";
		$recentQ = mysqli_query($conStr,$recent);
		$recentF = mysqli_fetch_array($recentQ,MYSQLI_ASSOC);
		$eMail = $recentF['eMail'];
				 
$walletbal = mysqli_escape_string($conStr,$_POST['walletbal']);	
$total = mysqli_escape_string($conStr,$_POST['total']);			
$item_name = mysqli_escape_string($conStr,$_POST['item_name']);
 $invoiceno="M12".rand(1000,10000);
 $totaldiff = mysqli_escape_string($conStr, $_POST['totaldiff']);
$otherMarket =  mysqli_escape_string($conStr,$_POST['otherMarket']);
$otherPrice =  mysqli_escape_string($conStr,$_POST['otherPrice']);
$shipping =  mysqli_escape_string($conStr,$_POST['shipping']);
 $startDate =  mysqli_escape_string($conStr,$_POST['startDate']); 
 $othermarket =  mysqli_escape_string($conStr,$_POST['othermarket']); 
  $avgWeight =  mysqli_escape_string($conStr,$_POST['avgWeight']); 
    $address =  mysqli_escape_string($conStr,$_POST['address']); 
   $location =  mysqli_escape_string($conStr,$_POST['location']); 
   $farmName =  mysqli_escape_string($conStr,$_POST['farmName']); 
   $farmAddress =  mysqli_escape_string($conStr,$_POST['farmAddress']); 
   $farmphoneno =  mysqli_escape_string($conStr,$_POST['farmphoneno']); 
$dix = base64_decode($_POST['dix']);
$dix2 = base64_decode($_POST['dix2']);
//$dix = $_SESSION['login_id'];
//$dix2 = $_SESSION['user_type'];
$time=date("H:m:s");
$month=date("F");
$year=date("Y");
$date=date("d/m/Y");
$status = "Pay on Delivery";
 $productType="Mile12Sales";
  $maxweight = "SELECT * FROM tlbcharges";
		$maxweightQ = mysqli_query($conStr,$maxweight);
		$maxweightF = mysqli_fetch_array($maxweightQ,MYSQLI_ASSOC);
		$total2 = $maxweightF['amount'];


$lastqty =  $_POST["item_totalweight"];
if($total2>=$lastqty){
if($walletbal>=$total){
	$insertEvent = "INSERT INTO tlborder
					SET
					
					order_id = '$invoiceno' ,
					total_price = '$total' ,
					shipping_cost = '$shipping' ,
					date = '$date' ,
					 
					cust_id = '$cust_id' ,
					fullname = '$fullname' ,
					phoneno='$phone' ,
					 
					email='$eMail',
					address='$address' ,
					location='$location' ,
					year='$year' ,
					month='$month' ,
					productType='$productType',
					farmName='$farmName' ,
					farmAddress='$farmAddress' ,
					farmphoneno='$farmphoneno' ,
					status = '$status' ";
					
		$insertEventQ = mysqli_query($conStr,$insertEvent);
		
	$newbal=$walletbal 	- $total;
	$selectName = "SELECT max(id) as id from tlborder";
				$selectNameQ = mysqli_query($conStr,$selectName);
				$selectNameF = mysqli_fetch_array($selectNameQ,MYSQLI_ASSOC);
				$order_id= $selectNameF['id'];
	//$sql="select max(id) as id from tlborder ";
	//$order_id=row['id'];
	//$cust_id=$_SESSION['cust_id'];
	
    foreach ($_SESSION["cart_item"] as $item){
				$line_total=$item["price"] * $item["quantity"];
				$line_total2=$item["price_diff"] * $item["quantity"];
				//this is for the  customer
				$qty_bal=0 - $item["quantity"];
				$amt_bal= 0 + $line_total;
				
				$sql="INSERT INTO order_details (cust_id,order_id,product_id,product_code,item_name,unit_price, quantity, line_total,qty_balance,amt_balance,order_date,avg_weight,amt_saved,other_market_price,farmName,farmAddress,phoneno) values ('$cust_id','$order_id','".$item["product_id"]."','".$item["code"]."','".$item["item"]."','".$item["price"]."','".$item["quantity"]."','$line_total','$qty_bal','$amt_bal','$date','".$item["avg_weight"]."','$line_total2','".$item["other_market_price"]."','".$item["farmName"]."','".$item["farmAddress"]."','".$item["phoneno"]."')";
		$sqlQ = mysqli_query($conStr,$sql);
				}
				  
				
				 
	
	
	 
		$total="&#8358;".number_format($total,2,'.',',');
		//$newbal="&#8358;".number_format($newbal,2,'.',',');
	$to = "$eMail,lifestyle@mile12connect.com";     //Change to your email address here    
      $subject = "Mile12 Connect Order Notification";
      $message= "\n";                  // Fill in message you wish to receiv
     // $from = "info@gc-currencies.com";   //Change to
	  $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    // Additional headers
    $headers .= "To: $fullname <$eMail>" . "\r\n";
    $headers .= "From: MILE12 CONNECT <info@mile12connect.com>" . "\r\n";
    $headers.="X-Mailer: PHP/" . phpversion()."\r\n";
    $headers.= "BCC: $eMail"; 
//==============================================================================================================
   

		 
$message ="   Dear $fullname, Thanks for Patronizing us<br>
   
  
  Order ID: $invoiceno <br>
  Amount: $total <br>
  Status: $status <br>
  Date: $date <br>
  
Your Order is being Processed.
	 
   
 	 
 
	";
 mail($to, $subject, $message, $headers); 		
		 
		 
		
		 
				$msg= "<div class='alert alert-success'>Order Processed Successfully... <br>Total Weight of Item Selected =$lastqty<br>Hamper Box Maximum Weight=$total2 </div>
				
				<center><img src=complete.png>
				";
		}else{
		 
				$msg= "<div class='alert alert-danger'>Sorry! your Order is more than Max. Amt for Pay on Delivery Order <br>Total Weight of Item Selected =$lastqty<br>Hamper Box Maximum Weight=$total2 </div>
				<center><img src=cancel.png>
				";
		 
}
}else{
		 
				$msg= "<div class='alert alert-danger'>Sorry! You have Order higher than set Weight, reduce the items selected and submit your order again<br>Total Weight of Item Selected =$lastqty<br>Hamper Box Maximum Weight=$total2 </div>
				<center><img src=cancel.png>
				";
		 
}
include("order-process.php");
?>