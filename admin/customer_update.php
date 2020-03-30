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

//$c_Z = mysqli_query("SELECT * FROM userinfo WHERE userLoginId  = '$id' ");
//$r_Z = mysqli_fetch_array($c_Z,MYSQLI_ASSOC);
//extract($r_Z);

$userSelect = "SELECT * FROM questions WHERE id  = '$id' ";
			$userSelectQ = mysqli_query($conStr,$userSelect);
			while($userSelectF = mysqli_fetch_array($userSelectQ,MYSQLI_ASSOC))
			{
                $eventPostId = $userSelectF ['id'];
				$code = $userSelectF['code'];
				$title = $userSelectF['title'];
				$summary = $userSelectF['summary'];
                $date = $userSelectF['startDate'];
				 
                $status = $userSelectF['status'];
			 $category = $userSelectF['category'];
			 $postedby = $userSelectF['postedby'];
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
                            <h2>REPLY QUESTION</h2>
                           
                        </div>
                        <div class="body">
                            <form id="form_validation" method="post" action="customer_updated.php" enctype="multipart/form-data">
							 <div class="form-group form-float">
                                    <div class="form-line">
									 <label class="col-md-2 control-label">Question</label>
                                        <input type="text" class="form-control" name="title"  value="<?php echo $title  ?>" required>
                                        
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
									 <label class="col-md-2 control-label">Category</label>
                                        <input type="text" class="form-control" name="category"  value="<?php echo  $category  ?>" required>
                                        
                                    </div>
									  
                                 
                                 
								 
								<div class="form-group form-float">
                                    <div class="form-line">
									 <label class="col-md-2 control-label">Summary</label>
                                        <div class="form-group">
                                          <label for=""></label>
                                          <textarea class="form-control" name="summary" id="" rows="5"><?php echo  $summary  ?></textarea>
                                       
                                </div></div></div>
								 
								<div class="form-group form-float">
                                    <div class="form-line">
									 <label class="col-md-2 control-label">Date  </label>
                                        <input type="text" class="form-control" name="date" value="<?php echo  $date  ?>" required>
                                         
                                    </div>
                                </div>


                                <div class="form-group form-float">
                                    <div class="form-line">
									 <label class="col-md-2 control-label">Enter reply's Url here:</label>
                                        <input type="text" class="form-control" name="pix"    required>
                                         <input type="hidden" name="postedby" value="<?php echo $postedby ?>">
                                    </div>
                                    <!--
								  <div class="row">
	  <div class="col-md-10 col-lg-10 col-xs-12 col-sm-12">
        <label class="col-md-2 control-label">Upload Reply here:</label>
        <div class="col-md-10 ">
          <input type="file" class="form-control" placeholder="" name="pix"  data-toggle="tooltip" data-placement="top" title="Upload Reply"   style="margin-left:5%;" />
        </div></div>
		<div class="col-md-2 col-lg-2 col-xs-2 col-sm-2">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" align="center">
			<img src="<?php //echo  $profilePics  ?>" class="img-responsive" />
			Upload the Audio &uarr;
			<div>&nbsp;</div>
			</div></div>-->
			
			 
										 
										  
                                       <input type="hidden" name="id" value="<?php echo $id ?>">
                                       <input type="hidden" name="eMail" value="<?php echo $postedby ?>">
									    </div></div>
                                    </div>
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