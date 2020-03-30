 <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                         
                        <div class="content">
                            <div class="text"> UNANSWERED QUESTIONS</div>
							 <?php
	 // $total = 0;
	 session_start();
	 
include("Includes/connection.php");
	  	 	$selectOnline3 = "SELECT count(code) AS total_count2 FROM questions WHERE status='unanswered'";
				//ticketsales WHERE paymentStatus	 = 'Confirm'";
				$selectOnline3Q =mysqli_query($conStr,$selectOnline3);
				$selectOnline3F = mysqli_fetch_assoc($selectOnline3Q);
				$total3 = $selectOnline3F['total_count2'];
			 
				 
	  ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $total3 ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                       
                        <div class="content">
                            <div class="text">TOTAL QUESTIONS ASKED </div>
							<?php
							$selectOnline3 = "SELECT count(code) AS total_count2 FROM questions";
                            //ticketsales WHERE paymentStatus	 = 'Confirm'";
                            $selectOnline3Q =mysqli_query($conStr,$selectOnline3);
                            $selectOnline3F = mysqli_fetch_assoc($selectOnline3Q);
                            $totalQ = $selectOnline3F['total_count2'];
			?>
            <div class="number count-to" data-from="0" data-to="<?php echo $totalQ ?>" data-speed="1000" data-fresh-interval="20"></div>
                             
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                         
                        <div class="content">
                            <div class="text">ANSWERED QUESTIONS </div>
							<?php
							   
				$selectOnline = "SELECT count(code) AS total_count4 FROM questions WHERE status='answered'";
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
                            <div class="text">TOTAL LECTURES UPLOADED</div>
							<?php
							  $totalexp = 0;
	  		 
				 $query = "SELECT * FROM lectures  order by id Asc";
  
  $result = mysqli_query($conStr,$query );

       while( ($r = mysqli_fetch_array( $result,MYSQLI_ASSOC )) )  {
        $Fetchedid= $r["id"];
     
 $Fetchedamount = $r["title"];
        if( !$Fetchedamount ) { $Fetchedamount="&nbsp;"; }
 
 
$totalexp=$totalexp +  $Fetchedamount;
   
   
    

   
			}
			?>
            <div class="number count-to" data-from="0" data-to="<?php echo $totalexp ?>" data-speed="1000" data-fresh-interval="20"></div>
                             
                        </div>
                    </div>
                </div>
            </div>