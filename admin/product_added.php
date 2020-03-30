<?php
include("components/connect.php");

$productName = mysqli_escape_string($conStr,$_POST['productName']);
$productDescription = mysqli_escape_string($conStr, $_POST['productDescription']);
$eventBanner =  $_FILES['eventBanner']['name'];
$price = mysqli_escape_string($conStr, $_POST['price']);
//$variety = mysqli_escape_string($conStr, $_POST['variety']);
//$otherMarket =  mysqli_escape_string($conStr,$_POST['otherMarket']);
//$otherPrice =  mysqli_escape_string($conStr,$_POST['otherPrice']);
//$avgWeight =  mysqli_escape_string($conStr,$_POST['avgWeight']);
$qty =  mysqli_escape_string($conStr,$_POST['qty']); 
$startDate =  mysqli_escape_string($conStr,$_POST['startDate']); 
$price=str_replace(",", "", $price);
//$otherPrice=str_replace(",", "", $otherPrice);

$total_amount=$price*$qty;
// $priceDiff=$otherPrice - $price;
$dix = base64_decode($_POST['dix']);
$dix2 = base64_decode($_POST['dix2']);

//$dix = $_SESSION['login_id'];
//$dix2 = $_SESSION['user_type'];
$qry="SELECT * FROM event ";
$result = mysqli_query($conStr,$qry);
$num_rows = mysqli_num_rows($result);

$c=$num_rows+1;
$code="M12CP".$c;

$status = "Not Authorised";
if($dix2 =='Admin')
{
$status = "Instock";
}


if($productName)
{
	$insertEvent = "INSERT INTO event
					SET
					code='$code',
					item = '$productName' ,
					variety = '$variety' ,
					 
					price = '$price' ,
					summary = '$productDescription' ,
					 
					 eventBanner = '$eventBanner' ,
					startDate = '$startDate' ,
					 
					quantity = '$qty' ,
					total_amt = '$total_amount' ,
					status = '$status' ";
					
		$insertEventQ = mysqli_query($conStr,$insertEvent);
		$recent = "SELECT * FROM event ORDER BY id DESC";
		$recentQ = mysqli_query($conStr,$recent);
		$recentF = mysqli_fetch_array($recentQ,MYSQLI_ASSOC);
		$recentID = $recentF['id'];
		
		 
			
			if($eventBanner)
			{
			$eventBannerTmp =  $_FILES['eventBanner']['tmp_name'];
			$eventBannerDir = "user/event/eventCover".$recentID.".jpg";
			if(move_uploaded_file ( $eventBannerTmp , $eventBannerDir  ))
			{
				$updateBanner = "UPDATE event
							SET
							eventBanner = '$eventBannerDir' WHERE id = '$recentID'";
				mysqli_query($conStr,$updateBanner);
			}
			 
		}
		
		 
		
		if($insertEventQ )
		{
				$msg = "<div class='alert alert-success'>Product Added Successfully...  </div>";
		}
		if(!$insertEventQ )
		{
				$msg = "<div class='alert alert-danger'>Product Not Added Successfully... </div>";
		}
}
include("product_add.php");
?>

 