<script type="text/javascript">
    setTimeout(function() { window.location.href = "logout.php"; }, 40000 * 10);
</script>
<?php
session_start();
include("Includes/connection.php");
 $userLogId = $_SESSION['login_id'];
$usrID = $_SESSION['login_id'];
$usertype = $_SESSION['user_type'];
$cust_id = $_SESSION['cust_id'];
$userLogId = $_SESSION['login_id'];
$userInfo = "SELECT * FROM userinfo WHERE userLoginId = '$userLogId'";
$userInfoQ = mysqli_query($conStr,$userInfo);
$userInfoF = mysqli_fetch_array($userInfoQ,MYSQLI_ASSOC);
$id = $userInfoF['id'];
$sName = $userInfoF['sName'];
$fName = $userInfoF['fName'];
$lName = $userInfoF['lName'];

$phone = $userInfoF['phone'];
$gender = $userInfoF['gender'];
$profilePics = $userInfoF['profilePics'];
$customer_class = $userInfoF['customer_class'];
$address = $userInfoF['address'];
$state = $userInfoF['state'];
$dob = $userInfoF['dob'];
$date = $userInfoF['doj'];
 
$userLog = "SELECT * FROM userlogin WHERE id = '$userLogId'";
$userLogQ = mysqli_query($conStr,$userLog);
$userLogF = mysqli_fetch_array($userLogQ,MYSQLI_ASSOC);
$userName = $userLogF['userName'];
$eMail = $userLogF['eMail'];
$type = $userLogF['type'];

//$industryNameQ = mysqli

 
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
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                          <?php echo $msg ?>
 
        <div class="card-header">
          <h2>Profile Details </h2>
        </div>
        <div class="card-body">
			<div class="row">
				<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12" style="border:thin solid #CCCCCC;">
				
        <div class="card-header" style="padding-left:0px; padding-top: 0px 0px;">
		BASIC INFORMATION &nbsp;&nbsp; / &nbsp;&nbsp; <span style="color:#006600; font-weight:bold;">Edit Profile</span> &nbsp;&nbsp;&nbsp;<small><em>&laquo;<a href="<?php echo "staff_update.php?id=$userLogId" ?>">Click To Edit Profile</a></em></small>
				</div>
		
		<div class="form-group" id="basicDis">
		
		<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="padding:0px 0px 0px 0xp;">
        <div class="col-md-2" style="padding-top:10px; padding-bottom:5px;">
		<p>
          <label>Name</label>
		</p>
        </div>
        <div class="col-md-10" style="padding-top:10px; padding-bottom:5px;">
		<p>
          <?php echo $sName." ".$fName." ".$lName ?>
		</p>
        </div>
		</div>
		
		<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="padding:0px 0px 0px 0xp;">
        <div class="col-md-2" style="padding-top:10px; padding-bottom:5px;">
		<p>
          <label class="control-label">Email</label>
		</p>
        </div>
        <div class="col-md-10" style="padding-top:10px; padding-bottom:5px;">
		<p>
          <?php echo $eMail ?>
		</p>
        </div>
		</div>
		
		<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="padding:0px 0px 0px 0xp;">
        <div class="col-md-2" style="padding-top:10px; padding-bottom:5px;">
		<p>
          <label>Phone No</label>
		</p>
        </div>
        <div class="col-md-10" style="padding-top:10px; padding-bottom:5px;">
		<p>
          <?php echo $phone  ?>
		</p>
        </div>
		</div>
		 
		 
		<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="padding:0px 0px 0px 0xp;">
        <div class="col-md-2" style="padding-top:10px; padding-bottom:5px;">
		<p>
          <label>Address</label>
		</p>
        </div>
        <div class="col-md-10" style="padding-top:10px; padding-bottom:5px;">
		<p>
          <?php echo $address ?>
		</p>
        </div>
		</div>
		<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="padding:0px 0px 0px 0xp;">
        
		</div>
		
		 
		<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="padding:0px 0px 0px 0xp;">
        <div class="col-md-2" style="padding-top:10px; padding-bottom:5px;">
		<p>
          <label>Usertype</label>
		</p>
        </div>
        <div class="col-md-10" style="padding-top:10px; padding-bottom:5px;">
		<p>
          <?php echo $type ?>
		</p>
        </div>
		</div>
		<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="padding:0px 0px 0px 0xp;">
        <div class="col-md-2" style="padding-top:10px; padding-bottom:5px;">
		<p>
          <label>Customer Class: </label>
		</p>
        </div>
        <div class="col-md-10" style="padding-top:10px; padding-bottom:5px;">
		<p>
          <?php echo $customer_class ?>
		</p>
        </div>
		</div>
		<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="padding:0px 0px 0px 0xp;">
        <div class="col-md-2" style="padding-top:10px; padding-bottom:5px;">

		<p>
          <label>Gender</label>
		</p>
        </div>
        <div class="col-md-10" style="padding-top:10px; padding-bottom:5px;">
		<p>
          <?php echo $gender ?>
		</p>
        </div>
		</div>
		<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="padding:0px 0px 0px 0xp;">
        <div class="col-md-2" style="padding-top:10px; padding-bottom:5px;">
		<p>
          <label>Date</label>
		</p>
        </div>
        <div class="col-md-10" style="padding-top:10px; padding-bottom:5px;">
		<p>
          <?php echo $date ?>
		</p>
        </div>
		</div>
      </div></div>
	  	<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12" style="border:thin solid #CCCCCC;">
		 <div class="card-header" style="padding-left:0px; padding-top: 0px 0px;">
		   <p align="center"> <center><img src="<?php echo $profilePics ?>" width="250px" height="250px"></center>  
		    
		   
				</div>
				</div>
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12" style="border:thin solid #CCCCCC;">
		 <div class="card-header" style="padding-left:0px; padding-top: 0px 0px;">
		   <p align="center"> <center><label>OTHER DETAILS</label> </center>  </p>
		    
		   
		   
		   
				</div>
				</div>
				
				 <div class="col-md-2" style="padding-top:10px; padding-bottom:5px;">
		<p>
          <label>UserName:</label>
		   <?php echo $userName  ?>
		</p>
        </div>
        
			 <div class="col-md-2" style="padding-top:10px; padding-bottom:5px;">
	 
        </div>	
		 <div class="col-md-2" style="padding-top:10px; padding-bottom:5px;">
	 
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