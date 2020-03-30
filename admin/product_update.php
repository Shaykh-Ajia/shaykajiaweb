<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.
session_start();
 include("Includes/connection.php");
$userLogId = $_SESSION['login_id'];
$usrID = $_SESSION['login_id'];
$usertype = $_SESSION['user_type'];
$acct_no = $_SESSION['acct_no'];
$id = $_GET['id'];

//$c_Z = mysqli_query($conStr,"SELECT * FROM event WHERE id = '$id' ");
//$r_Z = mysqli_fetch_array($c_Z,MYSQLI_ASSOC);
//extract($r_Z);
$userSelect = "SELECT * FROM event WHERE id = '$id' ";
			$userSelectQ = mysqli_query($conStr,$userSelect);
			while($userSelectF = mysqli_fetch_array($userSelectQ,MYSQLI_ASSOC))
			{
				$eventrateId = $userSelectF ['id'];
				$item = $userSelectF['item'];
				//$summary=$userSelectF['summary'];
				//$variety=$userSelectF['variety'];
				$price=$userSelectF['price'];
				$other_market_price=$userSelectF['other_market_price'];
				$price_diff=$userSelectF['price_diff'];
				$other_market=$userSelectF['other_market'];
				 
				   $avg_weight=$userSelectF['avg_weight'];
				   // $quantity=$userSelectF['quantity'];
					// $total_amt=$userSelectF['total_amt'];
					 
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
                          <?php echo $msg ?>

                         <div class="header">
                            <h2>UPDATE PRODUCT INFO</h2>
                           
                        </div>
                        <div class="body">
                            <form id="form_validation" method="post" action="product_updated.php">
							 <div class="form-group form-float">
                                    <div class="form-line">
									 <label class="col-md-2 control-label">Product Name</label>
                                        <input type="text" class="form-control" name="productName"  value="<?php echo $item ?>" required>
                                        
                                    </div>
                                </div>
								                                 <div class="form-group form-float">
                                    <div class="form-line">
									 <label class="col-md-2 control-label">Price</label>
                                        <input type="text" class="form-control" name="price" value="<?php echo  $price  ?>" required>
                                         <input type="hidden" name="id" value="<?php echo $id ?>">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
									 <label class="col-md-2 control-label">Other Market</label>
                                        <input type="text" class="form-control" name="otherMarket" value="<?php echo  $other_market  ?>" required>
                                         
                                    </div>
                                </div>
								<div class="form-group form-float">
                                    <div class="form-line">
									 <label class="col-md-2 control-label">Other Market Price</label>
                                        <input type="text" class="form-control" name="otherPrice" value="<?php echo  $other_market_price  ?>" required>
                                         
                                    </div>
                                </div>
								<div class="form-group form-float">
                                    <div class="form-line">
									 <label class="col-md-2 control-label">Price Difference</label>
                                        <input type="text" class="form-control" name="price_diff" value="<?php echo  $price_diff  ?>" required>
                                         
                                    </div>
                                </div>
								<div class="form-group form-float">
                                    <div class="form-line">
									 <label class="col-md-2 control-label">Average Weight</label>
                                        <input type="text" class="form-control" name="avgWeight" value="<?php echo  $avg_weight  ?>" required>
                                         
                                    </div>
                                </div>
							 
								 
								<div class="form-group form-float">
                              
								 
								  <div class="row">
	  
                                <button class="btn btn-primary waves-effect" type="submit" name="submit">UPDATE</button>
                            </form>
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

    <!-- Ckeditor -->
    <script src="plugins/ckeditor/ckeditor.js"></script>

    <!-- TinyMCE -->
    <script src="plugins/tinymce/tinymce.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/forms/editors.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>