<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Selection</title>
</head>

<body>
<?php
$term=$_POST["term"];
if($term=="First Term"){
include ("StudentReportCardProcess2.php");
}elseif($term=="Second Term"){
include ("StudentReportCardProcess2.php");
}else{
include ("STUDENTCummulativeReport.php");
}


?>
</body>
</html>
