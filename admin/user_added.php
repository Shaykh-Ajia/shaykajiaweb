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
		$usertype = trim(mysqli_real_escape_string($conStr,$_POST["usertype"]));
		 
		$password = trim(mysqli_real_escape_string($conStr,$_POST["password"]));
		 $newPassword=base64_encode($password);
		 $gender = trim(mysqli_real_escape_string($conStr,$_POST["gender"]));
		 
		  $status='Pending';
		 
		 
		$pix = $_FILES['pix']['name'];
		$dateTime=date('D d-M-Y')." | ".date('H : i : s');
		  

 $query = "SELECT * FROM userlogin ";
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
							status = '$status' ,
							type = '$usertype'";
					
		$insertEventQ = mysqli_query($conStr,$newEvent);
		
		
			$newMemberId = 'SELECT * FROM userlogin ORDER BY id DESC';
			$newMemberIdQ = mysqli_query($conStr,$newMemberId);
			$newMemberIdF = mysqli_fetch_array($newMemberIdQ,MYSQLI_ASSOC);
			$newMemberIdValue = $newMemberIdF['id'];
			$newMemberData = "INSERT INTO userinfo
							SET 
							cust_id = '$acct_no' ,
							sName = '$sName' ,
							fName = '$fName' ,
							lName = '$lName' ,
							phone = '$phone' ,
							gender = '$gender' ,
							address = '$address' ,
						 
							userLoginId = '$newMemberIdValue',
							type = '$usertype',
							doj = '$dateTime'";
			$newMemberDataQ = mysqli_query($conStr,$newMemberData);
		
$profileDir = "user/profilePics/profilePix".$numrecfound.".jpg";
$pixTemp = $_FILES['pix']['tmp_name'];
if(move_uploaded_file($pixTemp , $profileDir))
{
		$updateUserPix = "UPDATE userinfo
							SET
							profilePics = '$profileDir' WHERE userLoginId = '$newMemberIdValue'";
		$updateUserPixQ = mysqli_query($conStr,$updateUserPix);
}
 $to = "$eMail,info@kunlexysat.com.ng";     //Change to your email address here    
      $subject = "Welcome Note from Kunlexy Sat";
      $message= "\n";                  // Fill in message you wish to receiv
     // $from = "info@gc-currencies.com";   //Change to
	  $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    // Additional headers
    $headers .= "To: $sName <$eMail>" . "\r\n";
    $headers .= "From: KUNLEXY SAT <info@kunlexysat.com.ng>" . "\r\n";
    $headers.="X-Mailer: PHP/" . phpversion()."\r\n";
    $headers.= "BCC: $eMail"; 
//==============================================================================================================
   

		 
$message =" Dear $sName $fName $lName, Your Profile has been created, to login to your Platform use the Username and Password Below.<br>
  Account No: $acct_no <br>
  UserName :$userName<br>
  Email: $eMail <br>
  Password: $password <br>
  UserType: $usertype<p>
 
 
	";

 mail($to, $subject, $message, $headers); 		
		
		if($newMemberDataQ )
		{
				$msg = "<div class='alert alert-success'>New User Added Successfully</div>";
		}
		if(!$newMemberDataQ )
		{
				$msg = "<div class='alert alert-danger'>User not Added Successfully... </div>";
		}
 
include("user_add.php");
?>
<!--<meta http-equiv="refresh"  content="0; url=list-event.php"  / > -->