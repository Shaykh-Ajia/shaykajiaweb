<?php
session_start();
if(isset($_SESSION['name'])){
    $text = $_POST['text'];
     
    $cb = fopen("log.html", 'a');
	$h=date("G")-7;
    fwrite($cb, "<div class='msgln'>(".date("$h:i ").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
    fclose($cb);
}
?>