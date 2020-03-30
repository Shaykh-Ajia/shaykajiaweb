 
<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

 include("Includes/connection.php");
 
$userName = trim(mysqli_real_escape_string($_POST["userName"]));

 
	   $oldpassword = base64_encode(trim(mysqli_real_escape_string($conStr,$_POST["oldpassword"])));
		  $password = base64_encode(trim(mysqli_real_escape_string($conStr,$_POST["password"])));
		  $newpassword = base64_encode(trim(mysqli_real_escape_string($conStr,$_POST["newpassword"])));

if($password==$newpassword){		 
$rsUpdate = mysqli_query($conStr,"UPDATE userlogin
				SET 
					password = '$password'
	WHERE userName = '$userName' ");
	
	


if($rsUpdate)
		{
				$msg = "<div class='alert alert-success'>Password Updated Successfully...</div>";
		}
		if(!$rsUpdate)
		{
				$msg = "<div class='alert alert-danger'>Password Update Not Successfully... </div>";
		}
 }else{
 $msg = "<div class='alert alert-danger'>Password Mismatched... </div>";
 }
include("reset_password.php");
?>

