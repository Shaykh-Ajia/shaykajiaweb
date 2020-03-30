<?php
   session_start();
   require_once("connect.php");
   require_once("Includes/functions.php");

    if (isset($_POST["reg"]))
   {
      $schoolname =   trim(mysql_real_escape_string($_POST["schoolname"]));
	  $cont_person = trim(mysql_real_escape_string($_POST["contperson"]));
	  $mobile =      trim(mysql_real_escape_string($_POST["mobile"]));
	  $mail =        trim(mysql_real_escape_string($_POST["mail"]));
	  $school_add =      trim(mysql_real_escape_string($_POST["school_add"]));
	    $school_info =      trim(mysql_real_escape_string($_POST["school_info"]));
	  $state =       trim(mysql_real_escape_string($_POST["state"]));
	  $uname =       trim(mysql_real_escape_string($_POST["uname"]));
	  $pass =        trim(mysql_real_escape_string($_POST["pass"]));
	  $con_pass =    trim(mysql_real_escape_string($_POST["passcon"]));
	   $color =    trim(mysql_real_escape_string($_POST["color"]));
	  $domain="www.".$state."schoollink.com";
	  $subdomain =    trim(mysql_real_escape_string($_POST["subdomain"]));
	  $link=$domain."/".$subdomain;
	  $hashed_pass = sha1($pass);
	  $logo = addslashes($_FILES["logo"]["tmp_name"]);
	  $img_name = addslashes($_FILES["logo"]["name"]);
	  $logo = file_get_contents($logo);
	  $logo = base64_encode($logo);
	  
	   $logo2 = addslashes($_FILES["logo2"]["tmp_name"]);
	  $img_name = addslashes($_FILES["logo2"]["name"]);
	  $logo2 = file_get_contents($logo2);
	  $logo2 = base64_encode($logo2);
	  $usertype="Admin";
	  $class="Admin";
	  $status="FREE";
	  if ($usertype=="Admin"){
	  $object="AdminMemberArea08732h637j4index.php";
	  }
	  $date=date('l dS \of F Y h:i:s A');
	  $query =  "INSERT INTO ";
	  $query .= "user "; 
	  $query .= "VALUES('','$uname','$cont_person','$mail','$mobile','$school_add','$usertype','$status','$hashed_pass','$con_pass','$logo','$object','$class','$schoolname','$state','$date','$link','$color','$school_info','$logo2')";
	  $result_set = mysql_query($query);
	  if($result_set)
	  {
	     $msg = "Registration was successful! <br>Your Link is: ".$link;
		 
		 $to = "$mail";     //Change to your email address here    
      $subject = "$schoolname -School Login Details";
      $message= "\n";                  // Fill in message you wish to receiv
      $from = "admin@schoollink.com";   //Change to

		 
$message =" Dear $cont_person,

CONGRATULATION!!! Find below your login details of your School on $domain Portal.



School Link:  $link

Username:  $uname

Password:  $con_pass

Thanks,
$domain ";
mail($to, $subject, "$message", $from); 
	  }
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ministry of Education:: Send Message</title>
<link rel="stylesheet" type="text/css" href="Styles/styles.css" />
<link rel="stylesheet" type="text/css" href="Styles/jquery-ui.css" />
</head>

<body>
 <div id="wrapper">
       <img src="../smt2.jpg" alt="" class="img-rounded pull-right" width="700">
	 <div class="sub-header">
	    <center> <font size="+2" color="#009999">SEND MESSAGE</font></center> 
	   
	 </div>
     <div id="container">
	 <form action="register.php" method="post" enctype="multipart/form-data">
	   
		<div class="register">
		   <table>
		      <tr>
			    <th colspan="2"> Send message to Schools <br /><?php echo $msg; ?></th>
			  </tr>
			  <tr>
			     <td width="198" class="label">Subject:</td>
				 <td width="290" class="field"><input type="text" name="schoolname" id="schoolname" /></td>
			  </tr>
			  <tr>
			     <td class="label">Date:</td>
				 <td class="field"><input type="text" name="contperson" id="contperson" /></td>
			  </tr>
			  <tr>
			     <td class="label">Message:</td>
				 <td class="field"><textarea name="school_add" id="school_add"></textarea></td>
			  </tr>			 
			  
			   <tr>
			     <td class="label">  Posted By:</td>
				 <td class="field">  
					  
				  
					  
				 <input name="subdomain" type="text" id="subdomain" size="12" /></td>				 
			  </tr>
			   
			  <tr>
			    <td class="label"><input type="submit" name="reg" id="reg" value="Submit" class="button" /></td>
				<td class="field"><a href=../index.php><input type="button"  value="Back" class="button" /></a></td>
			  </tr>
		   </table>
		</div> 	 </form>
     </div>
</div>
</body>
</html>
