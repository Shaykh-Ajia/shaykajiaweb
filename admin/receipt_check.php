<script type="text/javascript">
    setTimeout(function() { window.location.href = "logout.php"; }, 40000 * 10);
</script>

<?php

session_start();
include("Includes/connection.php");
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
$userInfoQ = mysqli_query($conStr,$userInfo);
$userInfoF = mysqli_fetch_array($userInfoQ,MYSQLI_ASSOC);
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
$userLogQ = mysqli_query($conStr,$userLog);
$userLogF = mysqli_fetch_array($userLogQ,MYSQLI_ASSOC);
$userName = $userInfoF['userName'];
$eMail = $userInfoF['eMail'];
//$industryNameQ = mysql

$userReg = "SELECT * FROM tlbreg WHERE userLoginID = '$userLogId'";
$userRegQ = mysqli_query($conStr,$userReg);
$userRegF = mysqli_fetch_array($userRegQ,MYSQLI_ASSOC);
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
	
	   <!-- Bootstrap Tagsinput Css -->
    <link href="plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
	
	<link href="plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
	    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Colorpicker Css -->
    <link href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="plugins/nouislider/nouislider.min.css" rel="stylesheet" />

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
                            <h2>PRINT RECEIPT</h2><p>
                            
                        </div>
                        <div class="body">
                            <form id="form_validation" method="post" action="receipt_print.php" enctype="multipart/form-data">
                              <div class="form-group">
                                <div class="col-md-12">
                                    
                                    <select class="form-control show-tick" name="studentname">
									<option>Select Studentname</option>
                                        <?php
      

      
$schoolid=$_SESSION["schoolid"];
      
 $query = "SELECT * FROM studentbio WHERE schoolid='$schoolid' ORDER BY studentname";
  
  $result = mysql_query($query );

       while( ($r = mysql_fetch_array( $result )) )  {
        $Fetchedid= $r["id"];
     
 $Fetchedstudentname = $r["studentname"];
        if( !$Fetchedstudentname ) { $Fetchedstudentname="&nbsp;"; }
 
 
   
  echo "<option>$Fetchedstudentname</option>";
    }

   
   

?>
                                    </select>

                                </div></div> 
	  <div class="form-group">
                                <div class="col-md-12">
                                    
                                    <select class="form-control show-tick" name="acct_type">
									<option>Select Account Type</option>
                                        <?php
      

      
 $query = "SELECT * FROM acctype WHERE schoolid='$schoolid'";
  
  $result = mysql_query($query );

       while( ($r = mysql_fetch_array( $result )) )  {
        $Fetchedid= $r["id"];
     
 $Fetchedaccounttype = $r["accounttype"];
        if( !$Fetchedaccounttype ) { $Fetchedaccounttype="&nbsp;"; }
 
 

   
  echo "<option>$Fetchedaccounttype</option>";
    }

   
   

?>
                                    </select>

                                </div></div> 	
								  <div class="form-group form-float">
                                <div class="col-md-12">
                                    
                                    <select class="form-control show-tick" name="term" id="term">
									<option>Select Term</option>
                                       <option>First Term</option>
										<option>Second Term</option>
    									<option>Third Term</option>                               </select>

                                </div></div> 	
									  <div class="form-group form-float">
                                <div class="col-md-12">
                                    
                                    <select class="form-control show-tick" name="year" id="year">
									<option>Select Year</option>
									<?php
									for ($i=2017;$i<=2090;$i++){
									
                                      echo "<option>$i</option>";
									  }
									  ?>
	                     </select>

                                </div></div> 				 
                                                       
								  
                             
                         
                                
								   
						     <div class="form-group">
                                <div class="col-md-12">
								
                                    
                                    <select class="form-control show-tick" name="class">
									<option>Select Class</option>
                                        <?php
      

      
$schoolid=$_SESSION["schoolid"];
      
  $query = "SELECT * FROM tlbclass WHERE schoolid='$schoolid' GROUP BY class";
  
  $result = mysql_query(  $query );

       while( ($r = mysql_fetch_array( $result )) )  {
        $Fetchedid= $r["id"];
     
 
 
 $Fetchedclass = $r["class"];
         if( !$Fetchedclass) { $Fetchedclass="&nbsp;"; }

   
  echo "<option>$Fetchedclass</option>";
    }

   
   

?>
                                    </select>

                                </div></div> 				
						 
                                <button class="btn btn-primary waves-effect" type="submit" name="submit">Search</button>
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
	 <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/forms/advanced-form-elements.js"></script>

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

     <!-- Dropzone Plugin Js -->
    <script src="plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>


    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>