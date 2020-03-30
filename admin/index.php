<?php
session_start();
$_SESSION["schoolid"]="SHEIKH AJIA PORTAL";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Member Account Login ::: <?php echo $_SESSION["schoolid"] ?></title>
  
  <script type="text/javascript" src="assets/js/vendor.js"></script>
  <script type="text/javascript" src="assets/js/app.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="assets/css/flat-admin.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="assets/css/theme/yellow.css">
</head>
<body>
  <div class="app app-default" >

<div class="app-container app-login" style="background-image:url(nature-blur-summer-background--4877220.jpg)">
  <div class="flex-center">
    <div class="app-header"></div>
    <div class="app-body">
      <div class="loader-container text-center">
          <div class="icon">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
              </div>
            </div>
          <div class="title">Logging in...</div>
      </div>
      <div class="app-block">
      <div class="app-form">
        <div class="form-header">
          <!--<div class="app-brand"><span class="highlight">Simplio</span> Admin</div>-->
		  
	<img src="assets/logo.png" />        </div>
        <form action="valLogin.php" method="POST">
            <?php 
					if($error)
					{
						echo $error;
					}
			?>
			 <?php 
					if($msg)
					{
						echo $msg;
					}
			?>
			
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">
                <i class="fa fa-user" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="userName">
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon2">
                <i class="fa fa-key" aria-hidden="true"></i></span>
              <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon2" name="password">
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-success btn-submit" value="Login">
            </div>
        </form>

        <div class="form-line">
          <div class="title">OR</div>
        </div>
        <div class="form-footer">
          
           
			  <a href="forget_password.php">
			<button type="button" class="btn btn-default btn-sm btn-info">
			<div class="btn-info" >
                <i class="icon fa fa-bus" aria-hidden="true"></i> &nbsp; 
                <span class="title">FORGET PASSWORD</span>              </div>
            </button>
			</a>        </div>
			
        
      </div>
      </div>
    </div>
    <div class="app-footer">    </div>
  </div>
</div>
  </div>
</body>
</html>