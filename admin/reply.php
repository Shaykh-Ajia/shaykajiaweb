<script >

           function Comma(Num) { //function to add commas to textboxes
        Num += '';
        Num = Num.replace(',', ''); Num = Num.replace(',', ''); Num = Num.replace(',', '');
        Num = Num.replace(',', ''); Num = Num.replace(',', ''); Num = Num.replace(',', '');
        x = Num.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1))
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        return x1 + x2;
    }

  </script>

<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.
session_start();
include("Includes/connection.php");
$type = base64_decode($_GET['type']);
$eventPostId = base64_decode($_GET['ie']);
$userID = base64_decode($_GET['iu']);
$userType = base64_decode($_GET['it']);  
$schoolid=$_SESSION["schoolid"];
 
$id = $_GET['id'];

$c_Z = mysqli_query($conStr,"SELECT * FROM list_rec WHERE id = '$id' ");
$r_Z = mysqli_fetch_array($c_Z);
extract($r_Z); 
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
                            <h2>REPLY </h2>
                           
                        </div>
                        <div class="body">
                            <form id="form_validation" method="post" action="reply_added.php">
							<div class="form-group form-float">
                                    <div class="form-line">
									 <label class="col-md-2 control-label">Customer ID</label>
                                        <input type="text" class="form-control" name="cust_id"  value="<?php echo stripslashes($cust_id) ?>" required>
                                         
                                    </div>
                                </div>   
                               <div class="form-group form-float">
                                    <div class="form-line">
									 <label class="col-md-2 control-label">Customer Name</label>
                                        <input type="text" class="form-control" name="customer_name"  value="<?php echo stripslashes($postedby) ?>" required>
                                         
                                    </div>
                                </div>   
								<div class="form-group form-float">
                                    <div class="form-line">
									 <label class="col-md-2 control-label">Location</label>
                                        <input type="text" class="form-control" name="location"  value="<?php echo stripslashes($location) ?>" required>
                                         
                                    </div>
                                </div>   			
   				<div class="form-group form-float">
                                    <div class="form-line">
									 <label class="col-md-2 control-label">Delivery Address</label>
                                        <input type="text" class="form-control" name="address"  value="<?php echo stripslashes($address) ?>" required>
                                         
                                    </div>
                                </div>   			  
								<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                             
                            
                        </div>
                        <div class="body">
                            <textarea id="ckeditor" name="details"  >
                               <?php echo stripslashes($details) ?>
                            </textarea>
                        </div>
                    </div>
                </div>
            </div> 
								   
							 <div class="form-group form-float">
                                    <div class="form-line">
									 <label class="col-md-2 control-label">Amount of the List</label>
                                        <input type="text" class="form-control" name="amount"  onkeyup = "javascript:this.value=Comma(this.value);"  required>
                                        
                                    </div>
                                </div>	  	   
								 <div class="form-group form-float">
                                    <div class="form-line" style="width:200px" >
									 <label>Date</label>
                                        <input type="date" class="form-control" name="date"   required>
                                         
                                    </div>
                                </div>
								  
								 <div class="form-group form-float">
                                    <div class="form-line">
									 <label class="col-md-2 control-label">Posted By</label>
                                        <input type="text" class="form-control" name="postedby"  value="<?php echo $_SESSION['user_fName']." ".$_SESSION['user_lName']; ?>" required>
                                         
                                    </div>
                                </div>	
                                <button class="btn btn-primary waves-effect" type="submit" name="submit">SEND</button>
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