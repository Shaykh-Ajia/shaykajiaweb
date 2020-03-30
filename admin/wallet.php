<script type="text/javascript">
    setTimeout(function() { window.location.href = "logout.php"; }, 40000 * 10);
</script>

<?php

session_start();
include("Includes/connection.php");
$schoolid=$_SESSION["schoolid"];
$userLogId = $_SESSION['login_id'];
$usrID = $_SESSION['login_id'];
$usertype = $_SESSION['user_type'];
$acct_no = $_SESSION['acct_no'];
$cust_id=$_SESSION["cust_id"];
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
                                WALLET (LIST OF FUNDS)
								<?php if($usertype=='Admin' || $usertype=='Staff'){
								?>
								
								 <a href="balance_add.php"><button class="btn btn-primary waves-effect" type="button" name="button">ADD FUND</button></a>
								<?php
								} ?>
                            </h2>
                            <?php
							  $totalamount = 0;
	  		 if ($usertype=='Admin' || $usertype=='Staff'){
				 $query = "SELECT * FROM wallettransaction WHERE status='Confirmed'  ";
				 }else{
				$query = "SELECT * FROM wallettransaction WHERE   ownerId='$cust_id' AND status='Confirmed'  ";
  	           }
  $result = mysqli_query($conStr,$query );

       while( ($r = mysqli_fetch_array( $result,MYSQLI_ASSOC )) )  {
        $Fetchedid= $r["id"];
     
 $Fetchedamount = $r["newBalance"];
        if( !$Fetchedamount ) { $Fetchedamount="&nbsp;"; }
 
 
$totalamount=$totalamount +  $Fetchedamount;
   
   
    

   
			}
			echo "<font color=red size=+3>WALLET BALANCE: &#8358;".number_format($totalamount,2,'.',',')."</font>";
			?>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>SNO</th>
											
                                            <th>Acct No</th>
                                          
                                             <th>Teller No</th>
											  <th>Amount Added</th>
											   <th>New Balance</th>
											   <th>Description</th>
											   <th>Status</th>
											   <th>Date</th>
											    <th>Posted by</th>
												
											 <th>Action</th>
                                        </tr>
                                    </thead>
                                     
                                    <tbody>
                                       <?php
									   $sn=0;
			if($usertype=='Admin' || $usertype=='Staff'){
			$userSelect = "SELECT * FROM tmp_wallet order by id Desc  ";
			}else{
			$userSelect = "SELECT * FROM tmp_wallet WHERE ownerId='$cust_id' order by id Desc  ";
			}
			$userSelectQ = mysqli_query($conStr,$userSelect);
			while($userSelectF = mysqli_fetch_array($userSelectQ,MYSQLI_ASSOC))
			{
				$eventPostId = $userSelectF ['id'];
				$amount = $userSelectF['amount'];
				$newbal = $userSelectF['newBalance'];
				$ownerid = $userSelectF['ownerId'];
				$description = $userSelectF['description'];
			 	$date = $userSelectF['date'];
				 $time = $userSelectF['time'];
			 $tellerno = $userSelectF['tellerno'];
			 $status = $userSelectF['status'];
			 $postedby = $userSelectF['postedby'];		 
					  

			 
		  $sn++;
	?>
	
	 
        <tr>
            <td><?php echo $sn ?></td>
		  <td><?php echo $ownerid ?></td>
		   <td><?php echo $tellerno ?></td>
		    <td>&#8358;<?php echo number_format($amount,2,'.',',') ?></td>
			<td>&#8358;<?php echo number_format($newbal,2,'.',',') ?></td>
			 <td><?php echo $description ?></td>
			 
           
           
           <td><?php echo $status ?></td>
			 
            <td><?php echo $date ?></td>
			 <td><?php echo $postedby ?></td>
          		<td>
				 <?php if ($status=='Pending' AND $usertype=='Admin'){
		 ?>
				<!--<a href="" data-toggle="modal" data-target="<?php echo '#tmp_wallet'.$eventPostId ?>">-->
			<a href="fund_update.php?id=<?php echo $eventPostId ?>"><span class="alert alert-primary" style="padding-top:5px; padding-bottom:5px; background-color:#000046; border-bottom:thick solid #000022; border-radius:2px;color:#fff;">UpdateFund</span></a>
			 <?php } ?>
			  <?php if ($status=='Pending' AND $usertype=='Admin'){
		 ?>
			 
			 
			 
 			<div style="height:25px;"></div>
			<a onClick="confirm('Are You Sure Your Want To Confirm this Fund: <?php echo $amount ?> ')" href="confirmPayment.php?type=<?php echo base64_encode('tmp_wallet')?>&ie=<?php echo base64_encode($eventPostId) ?>&ca=<?php echo base64_encode(confirm) ?>&it=<?php echo base64_encode($usertype)?>" ><span class="alert" style="padding-top:5px; padding-bottom:5px; border-bottom:3px #990000  solid; border-radius:2px; background-color: #CC0000; color:#fff;">Confirm</span></a>	
			<div style="height:25px;"></div>
			<a onClick="confirm('Are You Sure Your Want To Reject this Fund: <?php echo $amount ?> ')" href="rejectPayment.php?type=<?php echo base64_encode('tmp_wallet')?>&ie=<?php echo base64_encode($eventPostId) ?>&ca=<?php echo base64_encode(reject) ?>&it=<?php echo base64_encode($usertype)?>" ><span class="alert" style="padding-top:5px; padding-bottom:5px; border-bottom:3px #000000  solid; border-radius:2px; background-color: #000000; color:#fff;">Reject</span></a>	
			 <?php } ?>	
			  <?php if ($status=='Confirmed' AND $usertype=='Admin'){
		 ?>
				<!--<a href="" data-toggle="modal" data-target="<?php echo '#wallettransaction'.$eventPostId ?>">-->
			<a href="fund_update1.php?id=<?php echo $eventPostId ?>"><span class="alert alert-primary" style="padding-top:5px; padding-bottom:5px; background-color:#099046; border-bottom:thick solid #099022; border-radius:2px;color:#fff;">ReverseFund</span></a>
			 <?php } ?>			
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