<?php
session_start();

include("Includes/connection.php");
$schoolid=$_SESSION["schoolid"];
$cust_id=$_SESSION["cust_id"];
		 
		 $date = trim(mysqli_real_escape_string($conStr,$_POST["date"]));
		 
		  $details = trim(mysqli_real_escape_string($conStr,$_POST["details"]));
			 $postedby = trim(mysqli_real_escape_string($conStr,$_POST["postedby"]));
			  $address = trim(mysqli_real_escape_string($conStr,$_POST["address"]));
			  $location = trim(mysqli_real_escape_string($conStr,$_POST["location"]));
		if($schoolid)
{

  
	 
	$insertEvent = "INSERT INTO list_rec
					SET
				
					cust_id = '$cust_id', 
					details = '$details',
					 address = '$address',
					 location = '$location',
					 postedby='$postedby',
					   
					date = '$date'
					";
					
		$insertEventQ = mysqli_query($conStr,$insertEvent);
		
  		
		
		if($insertEventQ )
		{
		$to = "lifestyle@mile12connect.com";     //Change to your email address here    
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
  
  Customer Name :$postedby<br>
  Date: $date <br>
  
  $details <br>
   
	 
   
 	 
 
	";
 mail($to, $subject, $message, $headers); 
				$msg = "<div class='alert alert-success'>Order Listing Added  Successfully</div>";
		}
		if(!$insertEventQ )
		{
				$msg = "<div class='alert alert-danger'>Order Listing not Added Successfully... </div>";
		}
}
include("write_list.php");
?>
<!--<meta http-equiv="refresh"  content="0; url=list-event.php"  / > -->