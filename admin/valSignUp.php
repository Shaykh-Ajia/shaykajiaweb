<?php
session_start();
include("components/connect.php");
$postedby = mysqli_real_escape_string($conStr,$_POST['postedby']);
$sName = mysqli_real_escape_string($conStr,$_POST['sName']);
$fName = mysqli_real_escape_string($conStr,$_POST['fName']);
$lName = mysqli_real_escape_string($conStr,$_POST['lName']);
$phone = mysqli_real_escape_string($conStr,$_POST['phone']);
$eMail = mysqli_real_escape_string($conStr,$_POST['eMail']);
$customer_class = mysqli_real_escape_string($conStr,$_POST['customer_class']);
$userName = mysqli_real_escape_string($conStr,$_POST['userName']);
$passWd = mysqli_real_escape_string($conStr,$_POST['passWd']);
$confirmP = mysqli_real_escape_string($conStr,$_POST['confirmP']);
$dateTime = date('D d-M-Y')." | ".date('H : i : s');
 
$IdValue = rand(100,10000);
			
$qry="SELECT * FROM userinfo ";
$result = mysqli_query($conStr,$qry);
$num_rows = mysqli_num_rows($result);

$c=$num_rows+1;
		 
	  $acct_no =       "KXY".$IdValue."00".$c; 
$type = 'Customer';
if ($usertype=='Admin'){
$status='Confirmed';
}else{
$status ='Pending';
}
	if($sName && $fName && $lName && $phone && $eMail && $userName && $passWd && $confirmP)
	{
		if($passWd !== $confirmP)
		{
			$error = "<div class='alert alert-danger'><strong>ERROR:</strong> Password Unmatch</div>";
			include('signUp.php');
			exit;
		}
		
		else{
		$checkUser = "SELECT * FROM userlogin WHERE userName = '$userName' OR eMail = '$eMail' ";
		$checkUserQ = mysqli_query($conStr,$checkUser);
		$checkUserF = mysqli_fetch_array($checkUserQ,MYSQLI_ASSOC);
		if(!$checkUserF)
		{
		$newPassword = base64_encode($passWd);
			$newMember = "INSERT INTO userlogin 
							SET 
							userName = '$userName' ,
							eMail = '$eMail' ,
							password = '$newPassword' ,
							status = '$status' ,
							type = '$type'";
			$newMemberQ = mysqli_query($conStr,$newMember);
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
							userLoginId = '$newMemberIdValue',
							doj = '$dateTime',
							customer_class = '$customer_class',
							postedby = '$postedby',
							type='$type'";
			$newMemberDataQ = mysqli_query($conStr,$newMemberData);
			
			if($newMemberDataQ)
			{
				session_start();
				$_SESSION['login_id']= $newMemberIdValue;
				$_SESSION['login_user']= $userName;
				$_SESSION['user_type']= $type;
				$_SESSION['user_email']= $eMail;
				$_SESSION['user_fName']= $fName;
				$_SESSION['user_lName']= $lName;
				
				mkdir('user/'.$newMemberIdValue.'/profilePics/' , 0777 , true);
				chmod('user/'.$newMemberIdValue.'/profilePics/' , 0777);
				mkdir('user/'.$newMemberIdValue.'/event/' , 0777, true);
				chmod('user/'.$newMemberIdValue.'/event/' , 0777);
				mkdir('user/'.$newMemberIdValue.'/trainingResource/' , 0777, true);
				chmod('user/'.$newMemberIdValue.'/trainingResource/' , 0777);
				mkdir('user/'.$newMemberIdValue.'/jobs/' , 0777, true);
				chmod('user/'.$newMemberIdValue.'/jobs/' , 0777);
				/**
				//include("sign-mail.php");
				$to = "$eMail,lifestyle@mile12connect.com";     //Change to your email address here    
      $subject = "Mile12 Connect Registration Notification";
      $message= "\n";                  // Fill in message you wish to receiv
     // $from = "info@gc-currencies.com";   //Change to
	  $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    // Additional headers
    $headers .= "To: $sName <$email>" . "\r\n";
    $headers .= "From: MILE12 CONNECT <lifestyle@mile12connect.com>" . "\r\n";
    $headers.="X-Mailer: PHP/" . phpversion()."\r\n";
    $headers.= "BCC: $eMail"; 
//==============================================================================================================
   

		 
$message ="   Dear $sName $fName $lName, welcome to MILE12 CONNECT<br>
 Customer ID: $acct_no <br>
  
  UserName :$userName<br>
  Email: $eMail <br>
  Password: $passWd <br>
  Thanks for Register on Mile12 Connect, you can now shop on our Platform with your Wallet
	 
   
 	 
 
	";
 mail($to, $subject, $message, $headers); 

 
  function httpRequest($fields, $sendpage){
    $curl = curl_init($sendpage);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
}

//Compose the sms and call the function with the required parameters

        $sendpage ="http://www.smsparo.com/components/com_spc/smsapi.php?";
        $sendsms ="username=odeyale2016&password=alphatech";
        $sendsms .="&sender=RAPPORT";
        $sendsms .="&recipient=".$phone; //Assuming that $pno is the variable name that holds the phone number
        $sendsms .="&message=";
        $sendsms .="Dear $sName $lName,welcome to RAPPORT GROUP,your Username: $userName,PWD:$passWd";
        httpRequest($sendsms, $sendpage); // Call the functions and pass the parameters 
   **/
			?>
			
<meta http-equiv="refresh" content="0; url=step2.php" />
<?php
				//include("step2.php");
				//exit;
				//header("location:step2.php");
			}
		}
		else{
			$error = "<div class='alert alert-danger'><strong>ERROR:</strong> Username / E-mail Already Exist</div>";
			include("signUp.php");
		}
		}
	}
	else{
			$error = "<div class='alert alert-danger'><strong>ERROR:</strong> Ensure you leave no field blank and check your network connection</div>";
			include("signUp.php");
	}
?>