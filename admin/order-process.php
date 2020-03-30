<script type="text/javascript">
    setTimeout(function() { window.location.href = "logout.php"; }, 40000 * 10);
</script>

<?php

session_start();
 $newbal=$_SESSION["newbalance"];
/**
include("Includes/connection.php");
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
                            <h2>
							 
		 <font color="#FF0000" size="+3"> WALLET BALANCE: &#8358;<?php echo number_format($newbal,2,'.',',') ?> </font>
		</h2>
                         
                        </div>
                        <div class="body">
						 <?php echo $msg ?><p>
                         <?php
						   unset($_SESSION['cart_item']);
						   ?>
						    <a href="dashboard.php"> <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Back to Dashboard
                        </button></a>
						   </center>
                                    </div>
                                </div>
                                
                                
                                
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