 
<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

 include("Includes/connection.php");

$id = $_POST['id'];
$postedby = $_POST['postedby'];
$title = trim(mysqli_real_escape_string($conStr,$_POST["title"]));
$eMail = trim(mysqli_real_escape_string($conStr,$_POST["eMail"]));
$category = trim(mysqli_real_escape_string($conStr,$_POST["category"]));
$summary = trim(mysqli_real_escape_string($conStr,$_POST["summary"]));
$status="answered";		
		  $date = trim(mysqli_real_escape_string($conStr,$_POST["date"]));
		  $pix = trim(mysqli_real_escape_string($conStr,$_POST["pix"]));
		  $res_date = date('d-m-Y') ;	   
	//	$pix = $_FILES['pix']['name'];
	 
	
	
$rsUpdate = mysqli_query($conStr,"UPDATE questions
				SET title = '$title' ,
							category = '$category' ,
							summary = '$summary' ,
							startDate = '$date' ,
							status='$status',
							res_date='$res_date',
							 eventBanner='$pix',
							 postedby='$postedby'
	                         WHERE id = '$id' ");
	
	/* $profileDir = "user/profilePics/".$pix;
$pixTemp = $_FILES['pix']['tmp_name'];
if(move_uploaded_file($pixTemp , $profileDir))
{
		$updateUserPix = "UPDATE questions
							SET
							eventBanner = '$profileDir' WHERE id = '$id'";
		$updateUserPixQ = mysqli_query($conStr,$updateUserPix);
}
*/
$to = "$eMail,odeyale_kehinde@yahoo.com";     //Change to your email address here    
$subject = "Response from Sheikh Ajia";
$message= "\n";                  // Fill in message you wish to receiv
// $from = "info@gc-currencies.com";   //Change to
$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
// Additional headers
$headers .= "To: $eMail <$eMail>" . "\r\n";
$headers .= "From: RESPONSE FROM SHEIKH AJIA   <ask@sheikhajia.com>" . "\r\n";
$headers.="X-Mailer: PHP/" . phpversion()."\r\n";
$headers.= "BCC: $eMail"; 
//==============================================================================================================


   
$message ="   Dear $eMail, Your Question has been answered by the Sheikh AbdulWahab Ajia <br>

Visit this link : <a href='$pix'>$pix</a> to listen the reply <br>
 
Date: $res_date <br>
Thanks for your Question.
";
mail($to, $subject, $message, $headers); 

if($rsUpdate)
		{
				$msg = "<div class='alert alert-success'>Question Replied Successfully...</div>";
		}
		if(!$rsUpdate)
		{
				$msg = "<div class='alert alert-danger'>Reply Not Successfully... </div>";
		}
 
include("customer_update.php");
?>

