 <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
				 <?php
				 $userLogId=$_SESSION['login_id'];
		  		$selectUser = "SELECT * FROM userinfo WHERE userLoginId = '$userLogId'";
				$selectUserQ = mysqli_query($conStr,$selectUser);
				$selectUserF = mysqli_fetch_array($selectUserQ,MYSQLI_ASSOC);
				$selectUserPics = $selectUserF['profilePics'];
				if($selectUserPics)
				{
		  ?>
		  <img src="<?php echo $selectUserPics ?>" width="50" height="50" alt="User" />
           
			<?php
				}
				if(!$selectUserPics)
				{
			?>
            <img src="images/profile.png" width="50" height="50" alt="User" />
			<?php
				}
			?>
                    
                </div>
                <div class="info-container">
				
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo   $_SESSION["user_type"]." (".$_SESSION["customer_class"].")" ?></div>
                    <div class="email"><?php echo   $_SESSION['user_sName']." ".$_SESSION['user_fName']." ".$_SESSION['user_lName']  ?></div>
                    <div class="btn-group user-helper-dropdown">
                        
                       
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
					 
                        <a href="dashboard.php">
                             
                            <span>Home</span>
                        </a>
                    </li>
					 
                    <li>
                        
				     <li>
                        <a href="profile.php">
                           
                            <span>My Profile</span>
                        </a>
                    </li>
				 	<?php
					if ($usertype =='Admin' ){
					?>
					  <li>
                        <a href="javascript:void(0);" class="menu-toggle">

                             
                            <span>Setup User</span>
                        </a>
                        <ul class="ml-menu">
					
                            <li>
                                <a href="user_add.php">Add User</a>
                            </li>
							 <li>
                                <a href="staff_index.php">View User</a>
                            </li>
							
                           
                     

                           
                        </ul>
                    </li>
                  <?php } ?>
				  <?php
					if ($usertype =='Admin' || $usertype =='Staff'){
					?>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                             
                            <span>Questions</span>
                        </a>
                        <ul class="ml-menu">
						
                              <li>
                                <a href="customer_print.php">View questions</a>
                            </li>
						
                          
                            
                        </ul>
                    </li>
						
							<?php } ?>
					  <li>
                        <a href="javascript:void(0);" class="menu-toggle">

                             
                            <span>Books</span>
                        </a>
                        <ul class="ml-menu">
						 
                            <li>
                                <a href="product_add.php">Add New Book</a>
                            </li>
						 
                            <li>
                                <a href="product_index.php">Book List</a>
                            </li>
                            

                           
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">

                             
                            <span>Lectures</span>
                        </a>
                        <ul class="ml-menu">
						 
                            
                            <li>
                                <a href="product_add.php">Add New Lecture</a>
                            </li>
						 
                            <li>
                                <a href="product_index.php">Lecture List</a>
                            </li> 

                           
                        </ul>
                    </li>
		
                    <li class="header">SETTINGS</li>
					<?php
					if ($usertype =='Admin' ){
					?>
					<li>
                        <a href="bank_add.php">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Add Category</span>
                        </a>
                    </li>
				 
					<?php } ?> 
                    <li>
                        <a href="reset_password.php">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Reset Password</span>
                        </a>
                    </li>
					 
					 
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; <?php echo date("Y");?> <a href="javascript:void(0);"><?php echo $_SESSION["schoolid"] ?></a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>