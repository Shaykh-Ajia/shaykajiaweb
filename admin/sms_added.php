<?php
session_start();

include("Includes/connection.php");
$schoolid=$_SESSION["schoolid"];

$message = trim(mysql_real_escape_string($_POST["message"]));
		$senderid = trim(mysql_real_escape_string($_POST["senderid"]));
		$category = trim(mysql_real_escape_string($_POST["category"]));
		$phoneno = trim(mysql_real_escape_string($_POST["phoneno"]));
		//$signature = trim(mysql_real_escape_string($_POST["signature"]));
		$date=date("d/m/Y");		 
		 
		 
		if($schoolid)
{

  
	 
	$insertEvent = "INSERT INTO message
					SET
				
					senderid = '$senderid',
					phoneno = '$phoneno',
					details = '$message',
					category = '$category',
					date = '$date',
					
					schoolid = '$schoolid'
					";
					
		$insertEventQ = mysql_query($insertEvent);
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
        $sendsms .="&sender=SCHOOLSPLAN";
        $sendsms .="&recipient=".$phoneno; //Assuming that $pno is the variable name that holds the phone number
        $sendsms .="&message=";
        $sendsms .="YOUR LOGIN CODE: $message . THE CODES EXPIRES IN 60 SECONDS";
        httpRequest($sendsms, $sendpage); // Call the functions and pass the parameters
 echo "Message sent Successfully";	
		**/
		if($insertEventQ )
		{
				$msg = "<div class='alert alert-success'>Message sent Successfully</div>";
		}
		if(!$insertEventQ )
		{
				$msg = "<div class='alert alert-danger'>Message not Successfully... </div>";
		}
}
include("sms_add.php");
?>
<!--<meta http-equiv="refresh"  content="0; url=list-event.php"  / > -->