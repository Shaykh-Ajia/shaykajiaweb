 
<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

 include("Includes/connection.php");

$id = $_POST['id'];
$username = $_POST['username'];
$amount = trim(mysqli_real_escape_string($conStr,$_POST["amount"]));
  $query = "SELECT * FROM wallettransaction WHERE ownerId='$username' order by id Asc";
  
  $result = mysqli_query($conStr,$query );

       while( ($r = mysqli_fetch_array( $result,MYSQLI_ASSOC )) )  {
        $Fetchedid= $r["id"];
     
 $Fetchedbal = $r["newBalance"];
        if( !$Fetchedbal ) { $Fetchedbal="&nbsp;"; }
 
  

   
			}
			  
	$newBalance=$Fetchedbal+$amount;	 
	 
		//$location = trim(mysqli_real_escape_string($_POST["location"]));		
		 	
		
		 
		 
		 
$rsUpdate = mysqli_query($conStr,"UPDATE  tmp_wallet
					SET
				
					 
					 				 
					 amount='$amount',
					newBalance='$newBalance'
					 
					
	WHERE id = '$id' ");
	
	 


if($rsUpdate)
		{
				$msg = "<div class='alert alert-success'>Fund Updated Successfully...</div>";
		}
		if(!$rsUpdate)
		{
				$msg = "<div class='alert alert-danger'>Fund Update Not Successfully... </div>";
		}
 
include("fund_update.php");
?>

