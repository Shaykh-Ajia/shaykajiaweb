<?php 
// start the session 
session_start(); 
//header("Cache-control: private"); 
//IE 6 Fix 

if($_SESSION['schoolid'])
{ 

$_SESSION = array(); 
session_destroy(); 
}

?>

<html>
<head>

<script>
			history.forward();
			</script>


<title>Member Area Log-out Page</title>
<meta http-equiv="refresh" content="5; url=index.php">
</head>

<body background="images/nature.jpg">



<p><font size=6 >You have been logged out sucessfully</FONT></p>
<p>&nbsp;<img src="byebye.gif"> Bye Bye ......</p>
<P><font size=4>Kindly close the browser<br>Thank You


</body>

</html>