 <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                         
                        <div class="content">
                            <div class="text">WALLET BALANCE </div>
							 <?php
	 // $total = 0;
	 session_start();
	 $cust_id=$_SESSION["cust_id"];
include("Includes/connection.php");
	   			   
	  		 
				 $query = "SELECT * FROM wallettransaction WHERE ownerId='$cust_id' AND status='Confirmed' order by id Asc";
  
  $result = mysqli_query($conStr,$query );

       while( ($r = mysqli_fetch_array( $result,MYSQLI_ASSOC )) )  {
        $Fetchedid= $r["id"];
     
 $Fetchedbal = $r["newBalance"];
        if( !$Fetchedbal ) { $Fetchedbal="&nbsp;"; }
 
 
 
   
   
    

   
			}
			$_SESSION["newBal"]=$Fetchedbal;
			?>
                            <div><?php echo "<h4>&#8358;".number_format($Fetchedbal,2,'.',',')."</h4>" ?> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                       
                        <div class="content">
                            <div class="text">NEW PRODUCT ADDED</div>
							 <?php
	 // $total = 0;
	 
	  	 	$selectOnline3 = "SELECT count(item) AS total_count3 FROM event";
				//ticketsales WHERE paymentStatus	 = 'Confirm'";
				$selectOnline3Q =mysqli_query($conStr,$selectOnline3);
				$selectOnline3F = mysqli_fetch_assoc($selectOnline3Q);
				$total4 = $selectOnline3F['total_count3'];
			 
				 
	  ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $total4 ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                         
                        <div class="content">
                            <div class="text">NO OF PRODUCTS BOUGHT</div>
							<?php
							   
				$selectOnline = "SELECT count(productType) AS total_count4 FROM tlborder WHERE cust_id='$cust_id'";
				// WHERE ownerId = 'Online Transaction' AND paymentStatus	 = 'Not Confirm'";
				$selectOnlineQ = mysqli_query($conStr,$selectOnline);
				$selectOnlineF = mysqli_fetch_assoc($selectOnlineQ);
				$total =  $selectOnlineF['total_count4'] ;
			 
			?>
                          <div class="number count-to" data-from="0" data-to="<?php echo $total ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        
                        <div class="content">
                            <div class="text">TOTAL ORDERS </div>
							<?php
							  $totalexp = 0.00;
	  		 
				 $query = "SELECT * FROM tlborder WHERE cust_id='$cust_id'";
  
  $result = mysqli_query($conStr,$query );

       while( ($r = mysqli_fetch_array( $result,MYSQLI_ASSOC )) )  {
        $Fetchedid= $r["id"];
     
 $Fetchedamount = $r["total_price"];
        if( !$Fetchedamount ) { $Fetchedamount="&nbsp;"; }
 
 
$totalexp=$totalexp +  $Fetchedamount;
   
   
    

   
			}
			?>
                            <div ><?php echo "<h4>&#8358;".number_format($totalexp,2,'.',',')."</h4>" ?> </div>
                        </div>
                    </div>
                </div>
            </div>