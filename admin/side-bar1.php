 <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo $_SESSION["passport"] ?>" width="60" height="60" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo "Driver"; ?></div>
                    <div class="email"><?php echo $_SESSION["fullname"] ?>( <a href="logout.php">LogOut</a>)</div>
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
					 
                        <a href="dashboard1.php">
                             
                            <span>Home</span>
                        </a>
                    </li>
				    <li>
                        <a href="profile1.php">
                           
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="billing5.php">
                           
                            <span>Kunlexy Orders</span>
                        </a>
                    </li>
                     
					 
				     <li>
                        <a href="logout.php">
                           
                            <span>Log out</span>
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
                    
                </div>
            </div>
            <!-- #Footer -->
        </aside>