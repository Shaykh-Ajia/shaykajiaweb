 
<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

 include("Includes/connection.php");

$id = $_POST['id'];
$fName = trim(mysqli_real_escape_string($conStr,$_POST["fName"]));
$lName = trim(mysqli_real_escape_string($conStr,$_POST["lName"]));
$sName = trim(mysqli_real_escape_string($conStr,$_POST["sName"]));
		$eMail = trim(mysqli_real_escape_string($conStr,$_POST["eMail"]));
		$userName = trim(mysqli_real_escape_string($conStr,$_POST["userName"]));
		$phone = trim(mysqli_real_escape_string($conStr,$_POST["phone"]));
		$address = trim(mysqli_real_escape_string($conStr,$_POST["address"]));
		$type = trim(mysqli_real_escape_string($conStr,$_POST["type"]));
 
		 $gender = trim(mysqli_real_escape_string($conStr,$_POST["gender"]));
		 
		$pix = $_FILES['pix']['name'];
		$rsUpdatelogin ="UPDATE userlogin
				SET  userName = '$userName' ,
							eMail = '$eMail' ,
							type = '$type' 
	WHERE id = '$id' ";
	$rsUpdatedlogin= mysqli_query($conStr,$rsUpdatelogin );
	
$rsUpdate = "UPDATE userinfo
				SET  sName = '$sName' ,
							fName = '$fName' ,
							lName = '$lName' ,
							phone = '$phone' ,
							gender = '$gender' ,
							address = '$address' ,
					doj = '$date'
	WHERE userLoginId = '$id' ";
	$rsUpdated= mysqli_query($conStr,$rsUpdate );
	$profileDir = "user/profilePics/profilePix".$id.".jpg";
$pixTemp = $_FILES['pix']['tmp_name'];
if(move_uploaded_file($pixTemp , $profileDir))
{
		$updateUserPix = "UPDATE userinfo
							SET
							profilePics = '$profileDir' WHERE userLoginId = '$id'";
		$updateUserPixQ = mysqli_query($conStr,$updateUserPix);
}


if($rsUpdated)
		{
				$msg = "<div class='alert alert-success'>User Updated Successfully...</div>";
		}
		if(!$rsUpdate)
		{
				$msg = "<div class='alert alert-danger'>User Update Not Successfully... </div>";
		}
 
include("staff_update.php");
?>

