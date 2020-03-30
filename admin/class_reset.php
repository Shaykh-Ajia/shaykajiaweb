 
<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

 include("Includes/connection.php");
 
$acct_no = trim(mysqli_real_escape_string($conStr,$_POST["acct_no"]));

 
	 
		  $newclass = trim(mysqli_real_escape_string($conStr,$_POST["newclass"]));
		 
$rsUpdate = mysqli_query($conStr,"UPDATE userinfo
				SET 
					customer_class = '$newclass'
	WHERE cust_id = '$acct_no' ");
	
	


if($rsUpdate)
		{
				$msg = "<div class='alert alert-success'>Class Updated Successfully, System will Log out Soon</div>";
		}
		if(!$rsUpdate)
		{
				$msg = "<div class='alert alert-danger'>Class Update Not Successfully... </div>";
		}
 
include("change_class.php");
?>
<meta http-equiv="refresh" content="5; url=logout.php" />
