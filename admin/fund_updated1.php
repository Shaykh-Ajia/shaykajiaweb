 
<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

 include("Includes/connection.php");

$id = $_POST['id'];
$username = $_POST['username'];
$date=date("d/m/Y");
$amount = trim(mysqli_real_escape_string($conStr,$_POST["amount"]));
  $query = "SELECT * FROM wallettransaction WHERE ownerId='$username' order by id Asc";
  
  $result = mysqli_query($conStr,$query );

       while( ($r = mysqli_fetch_array( $result,MYSQLI_ASSOC )) )  {
        $Fetchedid= $r["id"];
     
 $Fetchedbal = $r["newBalance"];
        if( !$Fetchedbal ) { $Fetchedbal="&nbsp;"; }
 
  

   
			}
			  
	$newBalance=$Fetchedbal-$amount;	 
	 
		//$location = trim(mysql_real_escape_string($_POST["location"]));		
	$newMemberId = "SELECT * FROM userinfo WHERE cust_id='$username'";
			$newMemberIdQ = mysqli_query($conStr,$newMemberId);
			$newMemberIdF = mysqli_fetch_array($conStr,$newMemberIdQ);
			$user_id = $newMemberIdF['userLoginId'];
			$fName= $newMemberIdF['fName'];
			$lName= $newMemberIdF['lName'];
			$sName= $newMemberIdF['sName'];
			$fullname=$fName." ".$lName." ".$sName; 
			$newMemberId = "SELECT * FROM userlogin WHERE id='$user_id'";
			$newMemberIdQ = mysqli_query($conStr,$newMemberId);
			$newMemberIdF = mysqli_fetch_array($newMemberIdQ,MYSQLI_ASSOC);
			$eMail = $newMemberIdF['eMail']; 	 	
		
	$tmpUpdate = mysqli_query($conStr,"UPDATE  tmp_wallet
					SET
				
					 
					 				 
					 amount='$amount',
					newBalance='$newBalance',
					 status='Reversed'
					
	WHERE id = '$id' ");	 
		 
		 
$rsUpdate = mysqli_query($conStr,"UPDATE  wallettransaction
					SET
				
					 
					 				 
					 amount='$amount',
					newBalance='$newBalance'
					 
					
	WHERE ownerId = '$username' ");
	
	 


if($rsUpdate)
		{
		$newBal="&#8358;".number_format($newBalance,2,'.',',');
		$amount="&#8358;".number_format($amount,2,'.',',');
	  $to = "$eMail,info@kunlexysat.com.ng";     //Change to your email address here    
      $subject = "Kunlexy Sat Wallet Funds Confirmation";
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
   

		 
$message ="   Dear $fullname,Your Funds has been reversed due to wrong entry of the Funds, Find the details of the Funds Reversal below:<br>
   
  Amount Reversed: $amount <br>
  Date: $date <br>
  Wallet Balance: $newBal<br>
Your Funds has been Reversed,The actual Amount will be added soon<br>

Thanks for your Understanding.
	 
   
 	 
 
	";
 mail($to, $subject, $message, $headers); 	
 
				$msg = "<div class='alert alert-success'>Fund Successfully Reversed...</div>";
		}
		if(!$rsUpdate)
		{
				$msg = "<div class='alert alert-danger'>Fund Reversed Not Successfully... </div>";
		}
 
include("fund_update1.php");
?>

