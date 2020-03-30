<script type="text/javascript">
    setTimeout(function() { window.location.href = "logout.php"; }, 40000 * 10);
</script>

<?php

session_start();
 $cust_id=$_SESSION["cust_id"];
 $total=$_SESSION["item_total"];
  $item_totalweight=$_SESSION["item_totalweight"];
   $item_totalpay=$_SESSION["pay_amount"];
include("Includes/connection.php");
$id=$_POST["id"];
//$qty=$_POST["qty"];
$address=$_POST["address"];
$location=$_POST["location"];
//$van_del=$_POST["van_del"];
//$state=$_POST["state"];
									   $sn=0;
			$userSelect = "SELECT * FROM event WHERE id='$id'";
			$userSelectQ = mysqli_query($conStr,$userSelect);
			while($selectEventF = mysqli_fetch_array($userSelectQ,MYSQLI_ASSOC))
			{
				$eventPostId = $selectEventF['id'];
					$eventPostItem = $selectEventF['item'];
					$eventPostVariety = $selectEventF['variety'];
					$eventBanner = $selectEventF['eventBanner'];
					$eventPrice = $selectEventF['price'];
					$eventSummary = $selectEventF['summary'];
					$eventStartDate = $selectEventF['startDate'];
					$eventOtherMarket= $selectEventF['other_market'];
					$eventOtherMarketPrice = $selectEventF['other_market_price'];
					$eventPriceDiff = $selectEventF['price_diff'];
					$eventAvgWeight = $selectEventF['avg_weight'];
					$eventQuantity = $selectEventF['quantity'];
					$eventTotalAmt= $selectEventF['total_amt'];
					$eventTotalDiff = $selectEventF['price_diff'];
					
					$eventStatus = $selectEventF['status'];
			 
			 }
			 
			 
			 
			 $locationSelect = "SELECT * FROM tlblocation WHERE location='$location'";
			$locationSelectQ = mysqli_query($locationSelect);
			while($locationSelectF = mysqli_fetch_array($locationSelectQ))
			{
				$eventPostId = $locationSelectF['id'];
					$eventlocation = $locationSelectF['location'];
					$shipping = $locationSelectF['amount'];
					 
					 
			 
			 }
		 
	 //$totaldiff=$qty*$eventTotalDiff;
	 //$totalPrice=$qty*$eventPrice;
	  
 	 $query = "SELECT * FROM wallettransaction WHERE ownerId='$cust_id' AND status='Confirmed' order by id Asc";
  
  $result = mysqli_query($conStr,$query );

       while( ($r = mysqli_fetch_array( $result ,MYSQLI_ASSOC)) )  {
        $Fetchedid= $r["id"];
     
 $Fetchedbal = $r["newBalance"];
        if( !$Fetchedbal ) { $Fetchedbal="&nbsp;"; }
 
  

   
			}
	 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $_SESSION["schoolid"] ?></title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <?php
	   include("top-nav.php");
	   ?>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
       <?php
	   require_once("side-bar.php");
	   ?>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
       <?php
	   include("right-sidebar.php");
	   ?>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        

            <!-- Widgets -->
            <?php
	  // include("components/transactionBadge.php");
	   ?>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                         
                         <div class="header">
                            <h2>SHOPPING CART </h2>
                           <font color="#FF0000" size="+2">Max. Amt for Pay on Delivery Order: &#8358;<?php echo number_format($item_totalpay,2,'.',',') ?> </font>
                      <br> <font color="#FF0000" size="+2">TOTAL ORDER: &#8358;<?php echo number_format($total,2,'.',',') ?> </font>
					    </div>
                         
                           <div class="container">
    <div class="row">
        <div class="col-sm-10 col-md-9 col-md-offset-1">
		<form id="form_validation" method="post" action="cart-process2_cod.php" enctype="multipart/form-data">
            <table class="table table-hover">
                <thead>
                    <tr>
					<th>Item Code</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
						<th  class="text-center"><strong>OtherMarketPrice</strong></th>
						<th ><strong>AmtSaved</strong></th>
                        <th class="text-center">Total</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php		
    foreach ($_SESSION["cart_item"] as $item){
		?>
				<tr>
				<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["code"]; ?></td>
				<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["item"]; ?></strong></td>
				<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
				<td style="text-align:center;border-bottom:#F0F0F0 1px solid;"><?php echo "&#8358;".$item["price"]; ?></td>
				<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo "&#8358;".$item["other_market_price"]; ?></td>
				<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo "&#8358;".$item["price_diff"]*$item["quantity"]; ?></td>
				<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo "&#8358;".$item["price"]*$item["quantity"]; ?></td>
				<?php
        $item_total += ($item["price"]*$item["quantity"]);
		
		
		}
		?> 
				</tr>
                   
                    <tr>
                        
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>&#8358;<?php echo number_format($item_total,2,'.',',') ?></strong></h5></td>
                    </tr>
                    <tr>
                         
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong><?php echo "&#8358;".number_format($shipping,2,'.',','); ?></strong></h5></td>
                    </tr>
                    <tr>
                         
                        <td>  </td>
                        <td> </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong><?php 
						$total=$shipping+$item_total;
						echo "&#8358;".number_format($total,2,'.',','); ?></strong></h3></td>
                    </tr>
				 
				 
					 
					<input type="hidden" value="<?php echo $total  ?>" name="total">
					<input type="hidden" value="<?php echo $shipping  ?>" name="shipping">
					<input type="hidden" value="<?php echo date("d/m/Y")  ?>" name="date">
					<input type="hidden" value="<?php echo $totaldiff  ?>" name="totaldiff">
					<input type="hidden" value="<?php echo $item_totalpay  ?>" name="walletbal">
					<input type="hidden" value="<?php  echo $eventOtherMarketPrice  ?>" name="othermarket">
					<input type="hidden" value="<?php  echo  $item_totalweight  ?>" name="item_totalweight">
					<input type="hidden" value="<?php  echo  $address  ?>" name="address">
					<input type="hidden" value="<?php  echo  $location  ?>" name="location">
				 
                    <tr>
                        
                        <td>   </td>
                        <td>   </td>
                        <td>
                       <a href="cart.php"> <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></a></td>
                        <td>
                         <button type="submit" class="btn btn-success">
                            Check Out <span class="glyphicon glyphicon-play"></span>
                        </button> </td>
                    </tr>
                </tbody>
            </table></form>
        </div>
    </div>
</div>
                       
                    </div>
                </div>
            </div>
            </div>
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>