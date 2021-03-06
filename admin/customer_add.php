<script type="text/javascript">
    setTimeout(function() { window.location.href = "logout.php"; }, 40000 * 10);
</script>

<?php

session_start();
include("Includes/connection.php");
 
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
                            <h2>ADD CUSTOMER INFO</h2>
                           
                        </div>
                        <div class="body">
                            <form id="form_validation" method="post" action="customer_added.php" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="sName" required>
                                        <label class="form-label">FirstName</label>
                                    </div>
                                </div>
								<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="fName" required>
                                        <label class="form-label">MiddleName</label>
                                    </div>
                                </div>
								<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="lName" required>
                                        <label class="form-label">LastName</label>
                                    </div>
                                </div>
								 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="eMail" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
								   <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="phone" required>
                                        <label class="form-label">Telephone</label>
                                    </div>
                                    <div class="help-info">Numbers only</div>
                                </div>
								<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="userName" required>
                                        <label class="form-label">Username</label>
                                    </div>
                                </div>
								  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
								   
                                <div class="form-group">
                                    <input type="radio" name="gender" id="male" class="with-gap" value="Male">
                                    <label for="male">Male</label>

                                    <input type="radio" name="gender" id="female" class="with-gap" value="Female">
                                    <label for="female" class="m-l-20">Female</label>
                                </div>
								<div class="form-group">
                                <div class="col-md-12">
                                    
                                    <select class="form-control show-tick" name="state">
									<option>Select State</option>
                                       <?php 
				$selectIndustry = "SELECT * FROM states WHERE country_id=160 order by name ASC";
				$selectIndustryQ = mysql_query($selectIndustry);
				while($selectIndustryF = mysql_fetch_array($selectIndustryQ))
				{
				?>
				<option ><?php echo $selectIndustryF['name']?></option>
				<?php
				}
				?>
                                        
                                        
                                    </select>

                                </div></div> 
                                <div class="form-group form-float">
                                    <div class="form-line">
									  <label >Address</label>
                                        <textarea name="address" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                      
                                    </div>
                                </div>
								
										  <div class="form-group">
                                <div class="col-md-12">
                                      <label >Usertype</label>
                                    <select class="form-control show-tick" name="usertype">
									<option>Select UserType</option>
                                        <option>Customer</option>
                                        
                                        
                                    </select>

                                </div></div> 
										 
   								<div class="form-group form-float">
                                    <div class="form-line">
									<label> Profession </label>
                                        <input type="text" class="form-control" name="profession" required>
                                         
                                    </div>
                                </div>
								<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="designation"  >
                                        <label class="form-label">Designation</label>
                                    </div>
                                </div>
								<div class="form-group form-float">
                                    <div class="form-line">
									 <label >Date of Birth</label>
                                        <input type="date" class="form-control" name="dob" required>
                                       
                                    </div>
                                </div>
  								<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="socialmediaid"  >
                                        <label class="form-label">Social Media ID</label>
                                    </div>
                                </div>
                        <div class="body">
                           
                                <div class="dz-message">
                                     
                                    <h4>Upload Picture here or click to upload.</h4>
                                    
                                </div>
                                <div class="fallback">
                                    <input name="pix" type="file" multiple />
                                </div>
                           </div>
							<div class="active" ><h2> ADD DRIVER'S INFO </h2></div>	
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="driverName" required>
                                        <label class="form-label">DriverName</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="driverPhone" required>
                                        <label class="form-label">DriverPhoneNo</label>
                                    </div>
                                </div>
								<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="driverEmail" required>
                                        <label class="form-label">DriverEmail</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit" name="submit">SUBMIT</button>
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