<aside class="app-sidebar" id="sidebar" style="position:fixed; margin-top:-10px;">
  <div class="sidebar-header">
    <!--<a class="sidebar-brand" href="#"><span class="highlight">Flat v3</span> Admin</a>-->
	<img src="assets/images/logo.png" />
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>
  <div class="sidebar-menu " style="margin-top:-45px;">
    <ul class="sidebar-nav">
      <li class="<?php if($page == 'dash'){ echo 'active'; } ?>">
        <a href="dashboard.php">
          <div class="icon">
            <i class="fa fa-tasks" aria-hidden="true"></i>
          </div>
          <div class="title">Dashboard</div>
        </a>
      </li>
      <li class="dropdown @@menu.messaging <?php if($page == 'event'){ echo 'active'; } ?>">
        <a href="profile.php">
          <div class="icon">
            <i class="fa fa-users" aria-hidden="true"></i>
          </div>
          <div class="title">My Profile</div>
        </a>
		 
      </li>
	  
	  <li class="dropdown @@menu.messaging <?php if($page == 'transaction'){ echo 'active'; } ?>">
        <a href="#">
          <div class="icon">
            <i class="fa fa-credit-card" aria-hidden="true"></i>
          </div>
          <div class="title">Activities</div>
        </a>
		<div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-user-circle-o" aria-hidden="true"></i>ACTIVITIES</li>
			 
				<li><a href="wallet.php">Kunlexy Wallet</a></li>
				 
           
			 <?php
	  if($userType=="Admin" || $userType=="Staff")
	  {
	  ?>
		 <li><a href="add-user.php">Add User</a></li>
			  <li><a href="list-user.php">View User</a></li>
            	<li><a href="list-members.php">All Customers</a></li>
				<li><a href="cart-mgt.php">Cart Management</a></li>
				<li><a href="billing.php">Billing</a></li>
			<?php } ?>
			 
				
		 
			 
           
           
            <!--<li><a href="list-online-ticket.php">View Online Ticket</a></li>-->
            <!-- <li><a href="./uikits/timeline.html">Timeline</a></li>
            <li><a href="./uikits/chart.html">Chart</a></li> -->
			
            <!-- <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i>FEATURED EVENT</li>
            <li><a href="./pages/landing.html">Landing</a></li>
            <li><a href="./pages/login.html">Add Featured Event(s)</a></li> -->
            <!-- <li><a href="./pages/404.html">404</a></li> -->
          </ul>
        </div>
      </li>
	  
	  <?php
	  if($userType=="Admin")
	  {
	  ?>
	  <li class="dropdown @@menu.messaging <?php if($page == 'admin-member'){ echo 'active'; } ?>">
        <a href="#">
          <div class="icon">
            <i class="fa fa-cog" aria-hidden="true"></i>
          </div>
          <div class="title">Settings</div>
        </a>
		<div class="dropdown-menu">
          <ul>
			 <li class="section"><i class="fa fa-cog" aria-hidden="true"></i> SETTINGS</li>
			 
            <li><a href="add-bank.php">Add Bank</a></li>
			 
		 
			           

			 
		

        <!--<li><a href="add-event.php">Add Event</a></li>
            <li class="line"></li>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> TRANSACTION</li>
            <li><a href="list-members-transaction.php">List Transactions</a></li>
            <!--<li><a href="list-online-ticket.php">View Online Ticket</a></li>-->
            <!-- <li><a href="./uikits/timeline.html">Timeline</a></li>
            <li><a href="./uikits/chart.html">Chart</a></li> -->
			
            <!-- <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i>FEATURED EVENT</li>
            <li><a href="./pages/landing.html">Landing</a></li>
            <li><a href="./pages/login.html">Add Featured Event(s)</a></li> -->
            <!-- <li><a href="./pages/404.html">404</a></li> -->
          <!--</ul>
        </div>-->
      </li>
	  <?php
	  }
	  ?>
	  <!--
      <li class="dropdown <?php if($page == 'facilitator'){ echo 'active'; } ?> " >
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-cube" aria-hidden="true"></i>
          </div>
          <div class="title">Facilitators</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i>MY PROFILE AS FACILITATOR</li>
            <li><a href="#">View / Edit Profile</a></li>
            <li><a href="#">Courses I Facilitate</a></li>
            <li><a href="#">My Fee</a></li>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> EXPERIENCE</li>
            <li><a href="#">Add Previous Event</a></li>
            <!-- <li><a href="./uikits/timeline.html">Timeline</a></li>
            <li><a href="./uikits/chart.html">Chart</a></li> 
			
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i>UPGRADE FACILITATOR MEMBERSHIP</li>-->
            <!-- <li><a href="./pages/landing.html">Landing</a></li>
            <li><a href="./pages/login.html">Featured Package</a></li> -->
            <!-- <li><a href="./pages/404.html">404</a></li>
          </ul>
        </div>
      </li> -->
  <!--    <li class="dropdown <?php if($page == 'job'){ echo 'active'; } ?>">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-file-o" aria-hidden="true"></i>
          </div>
          <div class="title">Job</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> MY JOB(S)</li>
            <li><a href="#">Post Jobs</a></li>
            <li><a href="#">View My Posted Jobs</a></li>
            <li class="line"></li>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> OTHER(S)</li> -->
            <!-- <li><a href="./pages/landing.html">Landing</a></li>
            <li><a href="./pages/login.html">View Posted Job(s)</a></li> -->
            <!-- <li><a href="./pages/404.html">404</a></li> 
			
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i>UPGRADE MEMBERSHIP</li>-->
            <!-- <li><a href="./pages/landing.html">Landing</a></li> 
            <li><a href="./pages/login.html">Premium Package</a></li>-->
            <!-- <li><a href="./pages/404.html">404</a></li> -->
    <!--       </ul>
        </div>
      </li>
	 <li class="dropdown <?php if($page == 'job'){ echo 'active'; } ?>">
        <a  class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-file-o" aria-hidden="true"></i>
          </div>
          <div class="title">Resource</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i>E-LEARNING</li>
            <li><a href="#">Lis E-Learning</a></li>
            <li><a href="#">Add E-Learning</a></li>
            <li><a href="#">View Other E-Learning</a></li>
            <li class="line"></li>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i>VIDEO TUTORIAL</li>
            <li><a href="#">Lis E-Learning</a></li>
            <li><a href="#">Add E-Learning</a></li>
            <li><a href="#">View Other E-Learning</a></li>
          </ul>
        </div>
      </li> --->
    </ul>
  </div>
  <div class="sidebar-footer">
    <ul class="menu">
      <li>
        <a href="/" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-cogs" aria-hidden="true"></i>
        </a>
      </li>
      <li><a href="#"><span class="flag-icon flag-icon-th flag-icon-squared"></span></a></li>
    </ul>
  </div>
</aside>