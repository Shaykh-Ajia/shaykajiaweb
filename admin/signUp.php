<?php
session_start();
$_SESSION["schoolid"]="KUNLEXY SAT";
include("components/connect.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $_SESSION["schoolid"] ?> :::New Account Signup Form</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="assets/js/vendor.js"></script>
  <script type="text/javascript" src="assets/js/app.js"></script>

  <link rel="stylesheet" type="text/css" href="assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="assets/css/flat-admin.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="assets/css/theme/yellow.css">
</head>
<body>
  <div class="app app-default">

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
         
        <div class="app-form" style="margin-top:-40px;">
          <div class="form-suggestion">
            <h3>SIGN UP</h3>Create an account for free.          </div>
			<?php
					if($error)
					{
					echo $error;
					}
			?>
          <form action="valSignUp.php" method="post">
		   <div class="input-group">
                <input type="text" class="form-control" placeholder="Surname" aria-describedby="basic-addon1" name="sName" required>
              </div>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="First Name" aria-describedby="basic-addon1" name="fName" required>
              </div>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Middle Name" aria-describedby="basic-addon1" name="lName" required>
              </div>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                  <i class="fa fa-phone" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="E.g +2348091234567" aria-describedby="basic-addon1" name="phone" required>
              </div>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                  <i class="fa fa-envelope" aria-hidden="true"></i></span>
                <input type="eMail" class="form-control" placeholder="E-mail" aria-describedby="basic-addon1" name="eMail" required>
              </div>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon2">
                  <i class="fa fa-user" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon2" required name="userName">
              </div>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon3">
                  <i class="fa fa-key" aria-hidden="true"></i></span>
                <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon3" required name="passWd">
              </div>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon4">
                  <i class="fa fa-check" aria-hidden="true"></i></span>
                <input type="password" class="form-control" placeholder="Confirm Password" aria-describedby="basic-addon4" required name="confirmP">
              </div>
	 <div class="input-group">
                <select type="text" class="form-control" placeholder="Customer Class" aria-describedby="basic-addon1" name="customer_class" required>
				<option>Customer Type</option>
				<?php 
				$selectBank= "SELECT * FROM categories";
				$selectBankQ = mysqli_query($conStr,$selectBank);
				while($selectBankF = mysqli_fetch_array($selectBankQ,MYSQLI_ASSOC))
				{
				?>
				<option ><?php echo $selectBankF['categoryName']?></option>
				<?php
				}
				?>
				</select>
              </div>
			   <div class="input-group">
			 
                <span class="input-group-addon" id="basic-addon2">
				   <label>Registered by:</label>
                  <i class="fa fa-user" aria-hidden="true"></i></span>
				 
                <input type="text" class="form-control" placeholder="Registered by:" aria-describedby="basic-addon2" required name="postedby" value="<?php echo   $_SESSION['user_sName']." ".$_SESSION['user_fName']." ".$_SESSION['user_lName']  ?>" readonly="1">
              </div>
              <div class="text-center">
                  <input type="submit"  name="submit" class="btn btn-success btn-submit" value="Register" />
              </div>
          </form>
          <div class="form-line">
            <div class="title">OR</div>
          </div>
          <div class="form-footer">
          <!--  <button type="button" class="btn btn-default btn-sm btn-social __facebook"> -->
              
            <a href="index.php">
			<button type="button" class="btn btn-default btn-sm btn-info">
			<div class="btn-info">
                <i class="icon fa fa-lock" aria-hidden="true"></i> &nbsp; 
                <span class="title">LOGIN</span>              </div>
            </button>
			</a>          </div>
        </div>
      </div>
    </div>
    <div class="app-footer">    </div>
  </div>
</div>
  </div>
  
</body>
</html>