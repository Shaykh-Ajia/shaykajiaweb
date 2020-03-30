<?php
session_start();
				if($_SESSION['login_user'] && $_SESSION['login_id'] && $_SESSION['user_type'] && $_SESSION['user_email'] && $_SESSION['login_id'] && $_SESSION['user_fName'] && $_SESSION['user_lName'])
{
include("components/connect.php");
?>


<!DOCTYPE html>
<html>
<head>
  <title>New Member Account Signup (STEP 2) ::: Mile12 Connect</title>
  
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
  
  
      <script>
        /* function showResult(str) {
			
            if (str.length == 0) {
               document.getElementById("state").innerHTML = "";
               document.getElementById("state").style.border = "0px";
               return;
            }
            
            if (window.XMLHttpRequest) {
               xmlhttp = new XMLHttpRequest();
            }else {
               xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            
            xmlhttp.onreadystatechange = function() {
				
               if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                  document.getElementById("state").innerHTML = xmlhttp.responseText;
                  document.getElementById("state").style.border = "1px solid #A5ACB2";
               }
            }
            
            xmlhttp.open("GET","state.php?q="+str,true);
            xmlhttp.send();
         } */
      </script>
	  <script>
$(function() {
    $( "#states" ).autocomplete({
        source: 'components/states.php'
    });
});
</script>
      
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
            <h3>STEP 2: </h3>Set Up Your Profile For Easy Visibility         </div>
			<?php
					if($error)
					{
					echo $error;
					}
			?>
          <form action="valStep2.php" method="post" enctype="multipart/form-data">
              <div class="input-group">
                 
				<input type="hidden" name="dix" value="<?php echo base64_encode($_SESSION['login_id']); ?>" />
              </div>
          <div class="input-group">
                <input type="text" class="form-control" placeholder="Delivery Address" aria-describedby="basic-addon1" name="address" required>
              </div> 
			   
			  
              <div class="input-group">
                <select type="text" class="form-control" placeholder="Gender" aria-describedby="basic-addon2"   name="gender">
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				</select>
				<input type="hidden" name="dix" value="<?php echo base64_encode($_SESSION['login_id']); ?>" />
              </div>   
			 
			  
              <div class="input-group">
			  <small style="padding-left:10px;"><em>Attach Picture To Your Profile</em></small><br/>
                <input type="file" class="form-control" placeholder="Profile Picture" aria-describedby="basic-addon1" name="pix" required id="states" >
             		
			  </div>
          <div>
		  &nbsp;
          </div>
              <div class="text-center">
			
			   
			  
			  <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12  pull-left">
                  <input type="submit"  name="submit" class="btn btn-success btn-submit" value="Submit" />
			</div>
			
              </div>
          </form>
          <div class="form-footer">
          <!--  <button type="button" class="btn btn-default btn-sm btn-social __facebook"> -->
              
            <a href="index.php">
			<button type="button" class="btn btn-default btn-sm btn-info">
			<div>
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

<?php
}
else
{
header("locator:index.php");
}
?>