<?php
session_start();
$_SESSION["schoolid"]="MILE12 CONNECT";
 if(isset($_POST["submit"])){
include("components/connect.php");
 $eMail = mysqli_real_escape_string($conStr,$_POST['eMail']);
 			
$qry="SELECT * FROM userlogin WHERE eMail='$eMail' ";
$checkUserQ = mysqli_query($conStr,$qry);
		$checkUserF = mysqli_fetch_array($checkUserQ,MYSQLI_ASSOC);
		if($checkUserF)
		{	 
		 
			$id = $checkUserF['id'];
			
			$eMail = $checkUserF['eMail'];
			 $passWd = $checkUserF['password'];
			$newpassWd=base64_decode("$passWd");
				//include("sign-mail.php");
				$to = "$eMail,lifestyle@mile12connect.com";     //Change to your email address here    
      $subject = "Mile12 Connect Password Retrieval";
      $message= "\n";                  // Fill in message you wish to receiv
     // $from = "info@gc-currencies.com";   //Change to
	  $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    // Additional headers
    $headers .= "To: $eMail <$eMail>" . "\r\n";
    $headers .= "From: MILE12 CONNECT <lifestyle@mile12connect.com>" . "\r\n";
    $headers.="X-Mailer: PHP/" . phpversion()."\r\n";
    $headers.= "BCC: $eMail"; 
//==============================================================================================================
   

		 
$message ="    Password Retrieval on MILE12 CONNECT, Find below your Password retrieved.<br>
 
  
  
  Email: $eMail <br>
  Password: $newpassWd <br>
  Use this Password to login to your Dashboard, Click this link  to login:
  
 <a href=https://mile12connect.com/admin/>https://mile12connect.com/admin/</a>
  
	 
   
 	 
 
	";
 mail($to, $subject, $message, $headers); 
 
			?>
			
 
<?php 
		$msg=	 "<div class='alert alert-success'><strong>SUCESS:</strong>Your Password has been sent to your Email</div>";
		}else{
			$error = "<div class='alert alert-danger'><strong>ERROR:</strong> Enter your Register Email</div>";
			 
		}
	 }
?>
 
<!DOCTYPE html>
<html>
<head>
  <title>Member Forget Password ::: <?php echo $_SESSION["schoolid"] ?></title>
  
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
        <form action="forget_password.php" method="POST">
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
              <input type="text" class="form-control" placeholder="Enter your Email" aria-describedby="basic-addon1" name="eMail">
            </div>
            
            <div class="text-center">
                <input type="submit" name="submit" class="btn btn-success btn-submit" value="Retrieve Password">
            </div>
        </form>

        <div class="form-line">
          <div class="title">OR</div>
        </div>
        <div class="form-footer">
          
            <a href="signUp.php">
			<button type="button" class="btn btn-default btn-sm btn-info">
			<div class="btn-info">
                <i class="icon fa fa-lock" aria-hidden="true"></i> &nbsp; 
                <span class="title">SIGN UP</span>              </div>
            </button>
			</a>
			  <a href="van_setup.php">
			<button type="button" class="btn btn-default btn-sm btn-info">
			<div class="btn-info" >
                <i class="icon fa fa-bus" aria-hidden="true"></i> &nbsp; 
                <span class="title">REGISTER VAN</span>              </div>
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