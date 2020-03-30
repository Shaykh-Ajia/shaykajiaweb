<?php
session_start();
include("include/connection.php");
$eMail = mysqli_real_escape_string($conStr,$_POST['eMail']);
$title = mysqli_real_escape_string($conStr,$_POST['question_title']);
$category = mysqli_real_escape_string($conStr,$_POST['category']);
$details = mysqli_real_escape_string($conStr,$_POST['details']);
 
//$userName = mysqli_real_escape_string($conStr,$_POST['userName']);
//$passWd = mysqli_real_escape_string($conStr,$_POST['passWd']);
//$confirmP = mysqli_real_escape_string($conStr,$_POST['confirmP']);
$dateTime = date('D d-M-Y') ;
 
$IdValue = rand(100,10000);
			
$qry="SELECT * FROM questions ";
$result = mysqli_query($conStr,$qry);
$num_rows = mysqli_num_rows($result);

$c=$num_rows+1;
		 
$acct_no =       "qtn".$IdValue."00".$c; 
 
$status='unanswered';
 
			$newMemberData = "INSERT INTO questions
							SET 
							code = '$acct_no' ,
							title = '$title' ,
							category = '$category' ,
							summary = '$details' ,
							status = '$status' ,
							startDate = '$dateTime',
							postedby = '$eMail'
							 ";
			$newMemberDataQ = mysqli_query($conStr,$newMemberData);
			
			if($newMemberDataQ)
			{
			 
				$to = "$eMail,odeyale_kehinde@yahoo.com";     //Change to your email address here    
      $subject = "Sheikh Ajia Fatawa Notification";
      $message= "\n";                  // Fill in message you wish to receiv
     // $from = "info@gc-currencies.com";   //Change to
	  $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    // Additional headers
    $headers .= "To: $eMail <$eMail>" . "\r\n";
    $headers .= "From: SHEIKH AJIA FATAWA <ask@sheikhajia.com>" . "\r\n";
    $headers.="X-Mailer: PHP/" . phpversion()."\r\n";
    $headers.= "BCC: $eMail"; 
//==============================================================================================================
   

		 
$message ="   Dear $eMail, Your Question has been received and would be reply shortly <br>

 Question ID: $acct_no <br>
  Title :$title<br>
  Status: $status <br>
  Date: $dateTime <br>
  Thanks for your Question.
	";
 mail($to, $subject, $message, $headers); 

 /**
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
  $msg='<div class="alert-message success">
							    <i class="icon-ok"></i>
							    <p><span>success message</span><br>
							    You successfully added one question.</p>
							</div>';
 
	include("ask_question.php");
			?>
			
<meta http-equiv="refresh" content="5; url=ask_question.php" />
<?php
		 
	}
	else{
			$error = "<div class='alert alert-danger'><strong>ERROR:</strong> Question not submitted successfully</div>";
			include("ask_question.php");
	}
?>