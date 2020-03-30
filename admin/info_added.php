<?php
include("components/connect.php");

$productName = mysqli_escape_string($conStr,$_POST['productName']);
$productDescription = mysqli_escape_string($conStr, $_POST['productDescription']);

$url = mysqli_escape_string($conStr, $_POST['url']);
 
$category =  mysqli_escape_string($conStr,$_POST['category']); 
$startDate =  mysqli_escape_string($conStr,$_POST['startDate']); 
 
$dix = base64_decode($_POST['dix']);
$dix2 = base64_decode($_POST['dix2']);

//$dix = $_SESSION['login_id'];
//$dix2 = $_SESSION['user_type'];
$qry="SELECT * FROM lectures ";
$result = mysqli_query($conStr,$qry);
$num_rows = mysqli_num_rows($result);

$c=$num_rows+1;
$code="MSHK".$c;

$status = "Authorised";
 


if($productName)
{
	$insertEvent = "INSERT INTO lectures
					SET
					code='$code',
					title = '$productName' ,
					category = '$category' ,
					 
				 
					summary = '$productDescription' ,
					 
					 eventBanner = '$url' ,
					startDate = '$startDate' ,
					 
					status = '$status' ";
					
		$insertEventQ = mysqli_query($conStr,$insertEvent);
		 
		
		 
			
			 
		 
		
		if($insertEventQ )
		{
				$msg = "<div class='alert alert-success'>Lecture Added Successfully...  </div>";
		}
		if(!$insertEventQ )
		{
				$msg = "<div class='alert alert-danger'>Lecture Not Added Successfully... </div>";
		}
}
include("info_add.php");
?>

 