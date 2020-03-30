<?php
include("components/connect.php");

$marketName = mysqli_escape_string($conStr,$_POST['marketName']);
$owner_name = mysqli_escape_string($conStr,$_POST['store_owner']);
$phoneno = mysqli_escape_string($conStr,$_POST['phoneno']);
$address = mysqli_escape_string($conStr,$_POST['address']);
$product = mysqli_escape_string($conStr,$_POST['product']);

//$location = mysqli_escape_string($conStr,$_POST['location']);
// $date=date("d/m/Y");
if($marketName)
{
	$insertEvent = "INSERT INTO othermarket
					SET
					industry = '$marketName',
					fullname = '$owner_name',
					phoneno = '$phoneno',
					address = '$address',
					product_sales = '$product'
					";
					
		$insertEventQ = mysqli_query($conStr,$insertEvent);
		
		
		
		if($insertEventQ )
		{
				$msg = "<div class='alert alert-success'>New Market Added Successfully</div>";
		}
		if(!$insertEventQ )
		{
				$msg = "<div class='alert alert-danger'>Market not Added Successfully... </div>";
		}
}
include("othermarket_add.php");
?>
<!--<meta http-equiv="refresh"  content="0; url=list-event.php"  / > -->