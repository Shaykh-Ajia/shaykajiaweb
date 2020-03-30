<?php
session_start();

include("Includes/connection.php");
$schoolid=$_SESSION["schoolid"];
$fName = trim(mysqli_real_escape_string($conStr,$_POST["fName"]));
$lName = trim(mysqli_real_escape_string($conStr,$_POST["lName"]));
$sName = trim(mysqli_real_escape_string($conStr,$_POST["sName"]));
		$eMail = trim(mysqli_real_escape_string($conStr,$_POST["eMail"]));
		$userName = trim(mysqli_real_escape_string($conStr,$_POST["userName"]));
		$phone = trim(mysqli_real_escape_string($conStr,$_POST["phone"]));
		$address = trim(mysqli_real_escape_string($conStr,$_POST["address"]));
		$type = trim(mysqli_real_escape_string($conStr,$_POST["usertype"]));
		 
		$password = trim(mysqli_real_escape_string($conStr,$_POST["password"]));
		 $newPassword=base64_encode($password);
		 $gender = trim(mysqli_real_escape_string($conStr,$_POST["gender"]));
		  $profession = trim(mysqli_real_escape_string($conStr,$_POST["profession"]));
		   $designation = trim(mysqli_real_escape_string($conStr,$_POST["designation"]));
		  $state = trim(mysqli_real_escape_string($conStr,$_POST["state"]));
		   $dob = trim(mysqli_real_escape_string($conStr,$_POST["dob"]));
		  $socialmediaid = trim(mysqli_real_escape_string($conStr,$_POST["socialmediaid"]));
		   $driverName = trim(mysqli_real_escape_string($conStr,$_POST["driverName"]));
		  $driverPhone = trim(mysqli_real_escape_string($conStr,$_POST["driverPhone"]));
		   $driverEmail = trim(mysqli_real_escape_string($conStr,$_POST["driverEmail"]));
		$pix = $_FILES['pix']['name'];
		$dateTime=date('D d-M-Y')." | ".date('H : i : s');
		if($schoolid)
{

 $query = "SELECT * FROM userlogin WHERE companyid='$schoolid'";
   $result=mysqli_query($conStr,$query);
   $numrecfound = mysqli_num_rows($result);
   $numrecfound=$numrecfound+1;
    $sk=rand(1000,100000);
     $acct_no=$sk.$numrecfound;   
	 
		$newEvent = "INSERT INTO userlogin 
							SET 
							userName = '$userName' ,
							eMail = '$eMail' ,
							password = '$newPassword' ,
							type = '$type',
							companyid = '$schoolid' 
							";
					
		$insertEventQ = mysqli_query($conStr,$newEvent);
		
		
			$newMemberId = 'SELECT * FROM userlogin ORDER BY id DESC';
			$newMemberIdQ = mysqli_query($conStr,$newMemberId);
			$newMemberIdF = mysqli_fetch_array($newMemberIdQ,MYSQLI_ASSOC);
			$newMemberIdValue = $newMemberIdF['id'];
			$newMemberData = "INSERT INTO tlbcustomer
							SET 
							acct_no = '$acct_no' ,
							sName = '$sName' ,
							fName = '$fName' ,
							lName = '$lName' ,
							phone = '$phone' ,
							gender = '$gender' ,
							address = '$address' ,
						 	profession='$profession',
							dob='$dob',
							state='$state',
							designation='$designation',
							socialmedia_id='$socialmediaid',
							
							userLoginId = '$newMemberIdValue',
							companyid = '$schoolid',
							date = '$dateTime',
							driverName='$driverName',
							driverPhone='$driverPhone',
							driverEmail='$driverEmail'";
			$newMemberDataQ = mysqli_query($conStr,$newMemberData);
		
$profileDir = "user/profilePics/customerPix".$numrecfound.".jpg";
$pixTemp = $_FILES['pix']['tmp_name'];
if(move_uploaded_file($pixTemp , $profileDir))
{
		$updateUserPix = "UPDATE tlbcustomer
							SET
							profilePics = '$profileDir' WHERE userLoginId = '$newMemberIdValue'";
		$updateUserPixQ = mysqli_query($conStr,$updateUserPix);
}
 $to = "$eMail,info@autofix.org";     //Change to your email address here    
      $subject = "Welcome Note from Auto Fix";
      $message= "\n";                  // Fill in message you wish to receiv
     // $from = "info@gc-currencies.com";   //Change to
	  $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    // Additional headers
    $headers .= "To: $sName <$eMail>" . "\r\n";
    $headers .= "From: AUTO FIX <info@autofix.org>" . "\r\n";
    $headers.="X-Mailer: PHP/" . phpversion()."\r\n";
    $headers.= "BCC: $eMail"; 
//==============================================================================================================
   

		 
$message =" Dear $sName $fName $lName, Your Profile has been created, to login to your Platform use the Username and Password Below.<br>
  Account No: $acct_no <br>
  UserName :$userName<br>
  Email: $eMail <br>
  Password: $password <br>
  UserType: $type<p>
 Thanks for your patronization
 
	";

 mail($to, $subject, $message, $headers); 		
		
		if($newMemberDataQ )
		{
				$msg = "<div class='alert alert-success'>New Customer Added Successfully</div>";
		}
		if(!$newMemberDataQ )
		{
				$msg = "<div class='alert alert-danger'>Customer not Added Successfully... </div>";
		}
}
include("customer_add.php");
?>
<!--<meta http-equiv="refresh"  content="0; url=list-event.php"  / > -->