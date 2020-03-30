<?php
include("components/connect.php");
$gender = mysqli_real_escape_string($conStr,$_POST['gender']);
$address = mysqli_real_escape_string($conStr,$_POST['address']);
//$acctNumber = mysqli_real_escape_string($conStr,$_POST['acctNumber']);
//$state = mysqli_real_escape_string($conStr,$_POST['state']);
$dix = base64_decode($_POST['dix']);
//$acctName = mysqli_real_escape_string($conStr,$_POST['acctName']);
//$bankName = mysqli_real_escape_string($conStr,$_POST['bankName']);
$pix = $_FILES['pix']['name'];
$updateUser = "UPDATE userinfo
				SET
				gender = '$gender' , 
				address = '$address' 
				 
				WHERE 
				userLoginId = '$dix'";
				
$updateUserQ = mysqli_query($conStr,$updateUser);



$profileDir = "user/profilePics/profilePix".$dix.".jpg";
$pixTemp = $_FILES['pix']['tmp_name'];
if(move_uploaded_file($pixTemp , $profileDir))
{
		$updateUserPix = "UPDATE userinfo
							SET
							profilePics = '$profileDir' WHERE userLoginId = '$dix'";
		$updateUserPixQ = mysqli_query($conStr,$updateUserPix);
}
 if($updateUserPixQ )
		{	
				$msg = "<div class='alert alert-success'>Request Added Successfully</div>";
		}
		if(!$updateUserPixQ )
		{
				$msg = "<div class='alert alert-danger'>Request not Added Successfully... </div>";
		}

include("index.php");
?>


