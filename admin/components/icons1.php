 <div class="card">
                        <div class="header">
                            
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                   
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix demo-icon-container">
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                  <a href="profile.php"> <div class="demo-google-material-icon"> <i class="material-icons">person</i> <span class="icon-name">My Profile</span> </div></a>
                                </div>
								<?php
					if ($usertype=='Admin'){
					?>
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                   <a href="user_add.php"> <div class="demo-google-material-icon"> <i class="material-icons">person_add</i> <span class="icon-name">Add User</span> </div></a>
                                </div>
						 
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <a href="staff_index.php"><div class="demo-google-material-icon"> <i class="material-icons">people</i> <span class="icon-name">User List</span> </div></a>
                                </div>

                                 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                   <a href="bank_add.php"> <div class="demo-google-material-icon"> <i class="material-icons">person_add</i> <span class="icon-name">Add Category</span> </div></a>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                  <a href="customer_print.php"> <div class="demo-google-material-icon"> <i class="material-icons">view_list</i> <span class="icon-name"> All Questions</span></div></a>
                                </div>
									<?php } ?>
									
									
								     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                   <a href="pending_questions.php"> <div class="demo-google-material-icon"> <i class="material-icons">view_list</i> <span class="icon-name">Pending Questions</span></div></a>
                                </div>
								<?php
					if ($usertype=='Admin' || $usertype=='Staff'){
					?>
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                  <a href="product_add.php"> <div class="demo-google-material-icon"> <i class="material-icons">local_grocery_store</i> <span class="icon-name">Add New Book</span></div></a>
                                </div>
								
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                  <a href="product_index.php"> <div class="demo-google-material-icon"> <i class="material-icons">view_list</i> <span class="icon-name">Book List</span> </div></a>
                                </div>
						 
								 
                            
                                
                                 
								 
                               
                                
                             
								 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                   <a href="info_add.php">   <div class="demo-google-material-icon"> <i class="material-icons">account_balance</i> <span class="icon-name">Add New Lecture</span></div></a>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <a href="info_index.php"><div class="demo-google-material-icon"> <i class="material-icons">local_offer</i> <span class="icon-name">View Lectures</span></div></a>
                                </div>
                                
								    
					 
							 
								  
							<?php } ?>	 
								<!-- 
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                   <a href="components/@@cht">   <div class="demo-google-material-icon"> <i class="material-icons">account_balance</i> <span class="icon-name">Live Chat</span></div></a>
                                </div>-->
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                 <a href="reset_password.php">  <div class="demo-google-material-icon"> <i class="material-icons">no_encryption</i> <span class="icon-name">Reset Password</span></div></a></div>
                   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">              
                              <a href="logout.php"> <div class="demo-google-material-icon"> <i class="material-icons">network_locked</i> <span class="icon-name">Log Out</span></div>  </a>
                                 
                               
                                </div>
                            </div>
                        </div>
                    </div>