<script type="text/javascript">
    setTimeout(function() { window.location.href = "logout.php"; }, 40000 * 10);
</script>

<?php

session_start();
include("Includes/connection.php");
 
$userLogId = $_SESSION['login_id'];
$usrID = $_SESSION['login_id'];
$usertype = $_SESSION['user_type'];
$acct_no = $_SESSION['acct_no'];
/**

if($_SESSION['login_user'] && $_SESSION['login_id'] && $_SESSION['user_type'] && $_SESSION['user_email'] && $_SESSION['login_id'] && $_SESSION['user_fName'] && $_SESSION['user_lName'])
{
$usrType = base64_encode($_SESSION['user_type']);
$usrID = base64_encode( $_SESSION['login_id']);
$page = 'event';
$pageTitle = 'Profile';
$userDir = "users/".$_SESSION['login_id'];
$userLogId = $_SESSION['login_id'];
$userType = $_SESSION['user_type'];
$eventType;
$resourceType;

$userInfo = "SELECT * FROM userinfo WHERE id = '$userLogId'";
$userInfoQ = mysqlii_query($conStr,$userInfo);
$userInfoF = mysqlii_fetch_array($userInfoQ,mysqliI_ASSOC);
$id = $userInfoF['id'];
$acctNo = $userInfoF['acct_no'];
$sName = $userInfoF['sName'];
$fName = $userInfoF['fName'];
$lName = $userInfoF['lName'];
$phone = $userInfoF['phone'];
$gender = $userInfoF['gender'];
$profilePics = $userInfoF['profilePics'];
$industry = $userInfoF['industry'];
$country = $userInfoF['country'];
$state = $userInfoF['state'];
$doj = $userInfoF['doj'];
$userLog = "SELECT * FROM userlogin WHERE id = '$userLogId'";
$userLogQ = mysqlii_query($conStr,$userLog);
$userLogF = mysqlii_fetch_array($userLogQ,mysqliI_ASSOC);
$userName = $userInfoF['userName'];
$eMail = $userInfoF['eMail'];
//$industryNameQ = mysqli

$userReg = "SELECT * FROM tlbreg WHERE userLoginID = '$userLogId'";
$userRegQ = mysqlii_query($conStr,$userReg);
$userRegF = mysqlii_fetch_array($userRegQ,mysqliI_ASSOC);
$rAddress = $userRegF['r_address'];
$oAddress = $userRegF['office_address'];
$religion = $userRegF['religion'];
$nationality = $userRegF['nationality'];
$maritalStatus = $userRegF['marital_status'];
$town = $userRegF['town'];
 
$hobbies = $userRegF['hobbies'];
$game = $userRegF['game'];
**/
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
	   include("side-bar.php");
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
						<?php echo $msg ?>
                            <h2>
                                LIST OF ORDERS
                            </h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
										<th style="width:1%;">S/N</th>
            <th>Item  </th>
			<th>CustomerDetails  </th>
			<th>Date</th>
             <th>Status</th>
			 
           
											 <th>Action</th>
                                        </tr>
                                    </thead>
                                     
                                    <tbody>
                                       <?php
									   $sn=0;
			$userSelect = "SELECT * FROM tlborder WHERE productType='KUNLEXYSALES' ORDER BY id DESC";
			$userSelectQ = mysqli_query($conStr,$userSelect);
			while($selectEventF = mysqli_fetch_array($userSelectQ,MYSQLI_ASSOC))
			{
				$eventPostId = $selectEventF['id'];
					$eventOrderId = $selectEventF['order_id'];
					 
					$eventTotalPrice = $selectEventF['total_price'];
					$eventShippingCost= $selectEventF['shipping_cost'];
					$eventAvgWeight = $selectEventF['avg_weight'];
					$eventDate = $selectEventF['date'];
					 
					$eventCustId = $selectEventF['cust_id'];
					$eventFullName= $selectEventF['fullname'];
					$eventPhoneNo = $selectEventF['phoneno'];
					$eventEmail = $selectEventF['email'];
					$eventAddress = $selectEventF['address'];
					$eventLocation = $selectEventF['location'];
					$eventVanId = $selectEventF['vanid'];
					$eventStatus = $selectEventF['status'];
			 		$eventMonth = $selectEventF['month'];
					$eventYear = $selectEventF['year'];
			 $sn++;
		 
		  $query = "SELECT * FROM wallettransaction WHERE ownerId='$eventCustId' AND status='Confirmed' order by id Asc";
  
  $result = mysqli_query($conStr,$query );

       while( ($r = mysqli_fetch_array( $result,MYSQLI_ASSOC )) )  {
        $Fetchedid= $r["id"];
     
 $Fetchedbal = $r["newBalance"];
        if( !$Fetchedbal ) { $Fetchedbal="&nbsp;"; }
 
 
 
			}
		 
		 $_SESSION["newBal"]=$Fetchedbal;
		 $_SESSION["totalPrice"]=$eventTotalPrice;
		 
	?>
	 

        <tr>
		 <td><?php echo $sn ?></td>
            
				 
			            <td>
						
			 
			 <?php 
			
					$cities = "SELECT * FROM userinfo WHERE cust_id='$eventCustId'  ";
					$citiesQ = mysqli_query($conStr,$cities);
					while ($row = mysqli_fetch_array($citiesQ,MYSQLI_ASSOC))
					{
					$fetchedid=$row["id"];
					$fetchedclass=$row["customer_class"];
					 
					}
					
			?>
			<div class="col-md-9 col-lg-9 col-xs-9 col-sm-9" style="padding:0px 0px 0px 0px;">
			
			<strong><?php echo "Order ID: ".$eventOrderId ?></strong><br/>
			 
			<?php echo "<strong>Total Price: &#8358;".number_format($eventTotalPrice)."</strong>" ?> <br><?php echo "<strong><font color=red>Wallet Bal: &#8358;".number_format($Fetchedbal)."</font></strong>" ?>  
			</p>
			</div>
			 
			 
			</td>
		     <td>   <a href="add-cart.php?id=<?php echo $eventPostId?>" target="_blank">
			 
			 
			
			<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="padding:0px 0px 0px 0px;">
			
			<strong><?php echo "Fulname: ".$eventFullName ?></strong><br/>
			<strong><?php echo "Address: ".$eventAddress ?></strong><br/>
			 
			<?php echo "<strong>PhoneNo: $eventPhoneNo</strong>" ?> <p><?php echo "<strong>Email: $eventEmail</strong>" ?>  </p>
			<p><?php echo "<strong>Customer Class: $fetchedclass</strong>" ?>  </p>
			<p>
			<?php echo "<strong>Month:  $eventMonth </strong>" ?> 
			   
		 
			</p>
			</div>
			 </td>
		  <td><?php echo $eventDate ?></td>
			
			 
			 
			<td><?php echo "<font color=red>".$eventStatus."</font>"; ?></td>
			
           
           
          		<td>
			  <?php if ($usertype=='Admin'){
		 ?>
			 
			 
			 <?php if ($eventStatus=='Pending'){
		 ?>
	<div style="height:25px;"></div>
			<a onClick="confirm('Are You Sure Your Want To Confirm this Order: <?php echo $eventOrderId ?> ')" href="confirmOrder.php?type=<?php echo base64_encode('tlborder')?>&ie=<?php echo base64_encode($eventPostId) ?>&ca=<?php echo base64_encode(confirm) ?>&it=<?php echo base64_encode($usertype)?>" ><span class="alert" style="padding-top:5px; padding-bottom:5px; border-bottom:3px #990000  solid; border-radius:2px; background-color: #CC0000; color:#fff;">Confirm</span></a>
				 
			 <?php } ?>
 			 
			<div style="height:25px;"></div>
 			<a onClick="confirm('Are You Sure Your Want To Delete this Order: <?php echo $eventOrderId ?> ')" href="order_delete.php?type=<?php echo base64_encode('event')?>&ie=<?php echo base64_encode($eventPostId) ?>&ca=<?php echo base64_encode(delete) ?>&it=<?php echo base64_encode($userType)?>" ><span class="alert" style="padding-top:5px; padding-bottom:5px; border-bottom:3px #990000  solid; border-radius:2px; background-color: #990000; color:#fff;">Delete</span></a>
			<div style="height:25px;"></div>
 			 
			 <?php } ?>		
			 
			<!--<a href="" data-toggle="modal" data-target="<?php echo '#tlborder'.$eventPostId ?>">-->
			<a href="EditableInvoice/index.php?orderid=<?php echo $eventOrderId ?>"><span class="alert alert-primary" style="padding-top:5px; padding-bottom:5px; background-color:#000046; border-bottom:thick solid #000022; border-radius:2px;color:#fff;">PrintInvoice</span></a>
			 
			</td>
            <!--<td></td>-->
        </tr>
	<?php
			}
			
	?>
                                    </tbody>
                                </table>
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
 <!-- Jquery DataTable Plugin Js -->
     <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>
    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>