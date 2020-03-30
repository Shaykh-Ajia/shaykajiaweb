<?php
session_start();
include('components/connect.php');
$userName = mysqli_real_escape_string($conStr,$_POST['userName']);
$password =  mysqli_real_escape_string($conStr,$_POST['password']);
$password2=base64_encode($password);
$chkLogin = "SELECT * FROM userlogin WHERE userName = '$userName'   AND password='$password2'";
$chkLoginQ = mysqli_query($conStr,$chkLogin);

	if($chkLoginF = @mysqli_fetch_array($chkLoginQ,MYSQLI_ASSOC))
		{
				
				$_SESSION['login_user']= $chkLoginF['userName'];
				$_SESSION['login_id'] = $chkLoginF['id'];
				$_SESSION['user_type']=  $chkLoginF['type'];
				$_SESSION['user_email']= $chkLoginF['eMail'];
				$_SESSION['password']= $chkLoginF['password'];
				$userId = $_SESSION['login_id'];
				$selectName = "SELECT * FROM userinfo WHERE userLoginId = '$userId'";
				$selectNameQ = mysqli_query($conStr,$selectName);
				$selectNameF = mysqli_fetch_array($selectNameQ,MYSQLI_ASSOC);
				$_SESSION['user_fName']= $selectNameF['fName'];
				$_SESSION['user_lName']= $selectNameF['lName'];
				$_SESSION['user_sName']= $selectNameF['sName'];
				$_SESSION['cust_id']= $selectNameF['cust_id'];
				$_SESSION['customer_class']= $selectNameF['customer_class'];
?>
<meta http-equiv="refresh" content="0; url=dashboard.php" />
<?php
		}
		elseif(!($chkLoginF = @mysqli_fetch_array($chkLoginQ,MYSQLI_ASSOCS)))
		{
			$error="<div class='alert alert-danger'><strong>ERROR:</strong> Invalid Username or Password</div>";
			include('index.php');
			exit;
		}
?>
