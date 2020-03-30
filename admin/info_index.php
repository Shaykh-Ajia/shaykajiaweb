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
                                 LECTURE  RECORDS
                            </h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                          
                                           
                                             <th>Title</th>
											 <th>Description</th>
                                             <th>url</th>
                                             <th>Category</th>
											   <th>Postedby</th>
											     <th>Date</th>
											 <th>Action</th>
                                        </tr>
                                    </thead>
                                     
                                    <tbody>
                                       <?php
			$userSelect = "SELECT * FROM lectures  ";
			$userSelectQ = mysqli_query($conStr,$userSelect);
			while($userSelectF = mysqli_fetch_array($userSelectQ,MYSQLI_ASSOC))
			{
                $eventPostId = $userSelectF ['id'];
				$code = $userSelectF['code'];
				$title = $userSelectF['title'];
				$summary = $userSelectF['summary'];
                $date = $userSelectF['startDate'];
				$eventBanner = $userSelectF['eventBanner'];
                $status = $userSelectF['status'];
			 $category = $userSelectF['category'];
			 $postedby = $userSelectF['postedby'];
			 
			 
		 
	?>
        <tr>
            
		   <td><?php echo $title ?></td>
		    
			 <td><?php echo $summary ?></td>
			   
			 <td><?php echo $eventBanner ?></td>
               
			 <td><?php echo $category ?></td>
             <td><?php echo $postedby ?></td>
            <td><?php echo $date ?></td>
          		<td>
			  
			 
			 
			<!--<a href="" data-toggle="modal" data-target="<?php echo '#lectures'.$eventPostId ?>">-->
			<a href="info_update.php?id=<?php echo $eventPostId ?>"><span class="alert alert-primary" style="padding-top:5px; padding-bottom:5px; background-color:#000046; border-bottom:thick solid #000022; border-radius:2px;color:#fff;">Update</span></a>
 			 
			<div style="height:25px;"></div>
 			<a onClick="confirm('Are You Sure Your Want To Delete this Info: <?php echo $title ?> ')" href="info_delete.php?type=<?php echo base64_encode('government')?>&ie=<?php echo base64_encode($eventPostId) ?>&ca=<?php echo base64_encode(delete) ?>&it=<?php echo base64_encode($userType)?>" ><span class="alert" style="padding-top:5px; padding-bottom:5px; border-bottom:3px #990000  solid; border-radius:2px; background-color: #990000; color:#fff;">Delete</span></a>
			 	
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