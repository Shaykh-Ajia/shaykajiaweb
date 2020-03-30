<?php
session_start();

include("Includes/connection.php");
$schoolid=$_SESSION["schoolid"];
 
$date = date("d/m/Y");
$time=date("h:m:s");
	$username = trim(mysqli_real_escape_string($conStr,$_POST["userName"]));
		$tellerno = trim(mysqli_real_escape_string($conStr,$_POST["teller_no"]));	
		$postedby = trim(mysqli_real_escape_string($conStr,$_POST["postedby"]));	
		$amount = trim(mysqli_real_escape_string($conStr,$_POST["amount"]));		
		$description = trim(mysqli_real_escape_string($conStr,$_POST["description"]));
		 
		 $status="Pending";
  			$amount=str_replace(",", "", $amount);
			
					$cities = "SELECT * FROM userinfo WHERE cust_id='$username'";
					$citiesQ = mysqli_query($conStr,$cities);
					while ($row = mysqli_fetch_array($citiesQ,MYSQLI_ASSOC))
					{
					$fetchedid=$row["id"];
					$fetchedcustomerClass=$row["customer_class"];	 
		 	}
	 
 	 $query = "SELECT * FROM wallettransaction WHERE ownerId='$username' order by id Asc";
  
  $result = mysqli_query($conStr,$query );

       while( ($r = mysqli_fetch_array( $result ,MYSQLI_ASSOC)) )  {
        $Fetchedid= $r["id"];
     
 $Fetchedbal = $r["newBalance"];
        if( !$Fetchedbal ) { $Fetchedbal="&nbsp;"; }
 
  

   
			}
			  
	$newBalance=$Fetchedbal+$amount;	 
		 
	 

  
	 
	$insertEvent = "INSERT  INTO tmp_wallet
					SET
				     ownerId='$username',
					 customer_class='$fetchedcustomerClass',
					amount = '$amount',
					description = '$description',
				 tellerno = '$tellerno',
					 
					date = '$date',
					time = '$time',
					 postedby='$postedby',
					newBalance=$newBalance,
					
					status = '$status'
					
					 
					";
					 
		$insertEventQ = mysqli_query($conStr,$insertEvent);
		
  		
		
		if($insertEventQ )
		{
				$msg = "<div class='alert alert-success'>Funds Added to Wallet Successfully</div>";
		}
		if(!$insertEventQ )
		{
				$msg = "<div class='alert alert-danger'>Funds not Added Successfully... </div>";
		}
 
include("balance_add.php");
?>
<!--<meta http-equiv="refresh"  content="0; url=list-event.php"  / > -->