<script type="text/javascript">
    //setTimeout(function() { window.location.href = "../logout.php"; }, 40000 * 10);
</script>
<?php
   session_start();
   
 require_once("Includes/connection.php");
 //$userDir = "users/".$_SESSION['login_id'];
$userLogId = $_SESSION['login_id'];
$usrID = $_SESSION['login_id'];
$usertype = $_SESSION['user_type'];
$reg_id = $_SESSION['reg_id'];
$passport = $_SESSION['passport'];
   //require_once("Includes/functions.php");
   /**
 $inactive = 600;

if(isset($_SESSION['timeout']) ) {
  $session_life = time() - $_SESSION['timeout'];
  if($session_life > $inactive) { 
    header("Location: ../logout.php"); 
  }
}

$_SESSION['timeout'] = time();
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
<meta charset="UTF-8">
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
	   include("side-bar1.php");
	   ?>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
       <?php
	   include("right-sidebar.php");
	   ?>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                
				
            </div>

            <!-- Widgets -->
               
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2> DRIVER'S DASHBOARD</h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                     
                                </div>
                            </div>
                            
                        </div>
                        <div class="body">
						
                         
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->
           
             <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
						<?php echo $msg ?>
                            <h2><font color="#CC6600"><?php echo "LIST OF   ORDERS TO BE DELIVERED" ?></font></h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th><span class="label bg-green">NewOrder</span></th>
                                             <th><span class="label bg-red">Type</span></th>
                                            <th><span class="label bg-red">Status</span></th>
											 
											  <th><span class="label bg-orange">Action</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
									   $snn=0;
			$userSelect = "SELECT * FROM van_order WHERE van_id='$reg_id' AND status='Pending' AND (productType='Mile12Sales' or productType='Farmsales' or productType='Customer List') order by id desc";
			$userSelectQ = mysqli_query($conStr,$userSelect);
			while($userSelectF = mysqli_fetch_array($userSelectQ,MYSQLI_ASSOC))
			{
				$eventPostId = $userSelectF ['id'];
				 
				$date = $userSelectF['date'];
				$total = $userSelectF['total_price']; 
				 $status = $userSelectF['status']; 
				 $productType = $userSelectF['productType']; 
				
		 
				
				
	 
			 $snn++;
			 
		 
	?>
        <tr>
            
			 <td><?php echo $snn ?></td>	 
			 
		  <td><?php echo $date ?></td>
		   
             <td>&#8358;<?php  echo number_format($total,2,'.',',') ?></td>
          		   <td><?php echo $productType ?></td>
           <td><?php echo $status ?></td>
		     
			 <td>
			 <?php if($productType=='Mile12Sales'){
			 ?>
			 <a  href="billing5.php" ><span class="alert" style="padding-top:5px; padding-bottom:5px; border-bottom:3px #990000  solid; border-radius:2px; background-color: #990000; color:#fff;">View</span></a>
			 <?php }elseif($productType=='Farmsales'){
			 ?>
			  <a  href="billing6.php" ><span class="alert" style="padding-top:5px; padding-bottom:5px; border-bottom:3px #990000  solid; border-radius:2px; background-color: #990000; color:#fff;">View</span></a>
			  <?php }else{
			 ?>
			  <a  href="billing8.php" ><span class="alert" style="padding-top:5px; padding-bottom:5px; border-bottom:3px #990000  solid; border-radius:2px; background-color: #990000; color:#fff;">View</span></a>
			  <?php } ?>
			 </td>
                                        </tr>
						 <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2><font color="#00CC33">NOTICE BOARD</font></h2>
                          
                        <div class="body">
                            <div id="donut_chart" class="dashboard-donut-chart">
													<?php
							
	  
				 

 $query = "SELECT * FROM government   ORDER BY id DESC LIMIT 1";
  
  $result = mysqli_query($conStr,$query );

       while( ($r = mysqli_fetch_array( $result,MYSQLI_ASSOC )) )  {
        $Fetchedid= $r["id"];
     
 $Fetcheddate= $r["date"];
        if( !$Fetcheddate ) { $Fetcheddate="&nbsp;"; }
 $Fetcheddetails= $r["details"];
        if( !$Fetcheddetails ) { $Fetcheddetails="&nbsp;"; }
 
  $Fetchedposted= $r["posted"];
        if( !$Fetchedposted ) { $Fetchedposted="&nbsp;"; }
		
		
							echo "DATE: ".$Fetcheddate."<BR>";
							echo "<b><u>INFORMATION:</u></b> <br><font color=orange> $Fetcheddetails</font>";
							}
							?>
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