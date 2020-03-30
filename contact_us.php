<?php
session_start();
//$_SESSION["schoolid"]="KUNLEXY SAT";
include("include/connection.php");
include("include/head.php");
$id=$_GET['id'];
 
 
?>
 
<body>

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
	
<?php include("include/top_login_panel.php") ?>
	
	

    <?php include("include/top_nav.php") ?>
		</section><!-- End container -->
	</header><!-- End header --><!-- End header -->
	
	<div class="breadcrumbs">
		<section class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Contact Us</h1>
				</div>
				<div class="col-md-12">
					<div class="crumbs">
						<a href="#">Home</a>
						<span class="crumbs-span">/</span>
						<a href="#">Pages</a>
						<span class="crumbs-span">/</span>
						<span class="current">Contact Us</span>
					</div>
				</div>
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<section class="container main-content page-full-width">
		<div class="row">
			<div class="contact-us">
				<div class="col-md-12">
					<div class="page-content">
					<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3946.190199267766!2d4.496915763829636!3d8.480878993902223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d8.480464399999999!2d4.4993494!4m5!1s0x1036536a63cd0777%3A0x86e04ac96ec09!2sKwara+State+College+of+Arabic+and+Islamic+Legal+Studies%2C+Ilorin%2C+Western+Reservoir+Rd%2C+Ilorin!3m2!1d8.4813604!2d4.4978339!5e0!3m2!1sen!2sng!4v1556563491834!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div><!-- End page-content -->
				</div>
				<div class="col-md-7">
					<div class="page-content">
						<h2>Say Salam Alaykm !</h2>
						<p>Feel free to send us message, for any comment, observation and question.</p>
						<form class="form-style form-style-3 form-style-5 form-js" action="contact_us.php" method="post">
							<div class="form-inputs clearfix">
								<p>
									<label for="name" class="required">Name<span>*</span></label>
									<input type="text" class="required-item" value="" name="name" id="name" aria-required="true">
								</p>
								<p>
									<label for="mail" class="required">E-Mail<span>*</span></label>
									<input type="email" class="required-item" id="mail" name="mail" value="" aria-required="true">
								</p>
								<p>
									<label for="phone" class="required">PhoneNo</label>
									<input type="text" id="url" name="phone" value="">
								</p>
							</div>
							<div class="form-textarea">
								<p>
									<label for="message" class="required">Message<span>*</span></label>
									<textarea id="message" class="required-item" name="message" aria-required="true" cols="58" rows="7"></textarea>
								</p>
							</div>
							<p class="form-submit">
								<input name="submit" type="submit" value="Send" class="submit button small color">
							</p>
						</form>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
				<div class="col-md-5">
					<div class="page-content">
						<h2>Sheikh Profile</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.<a href="about.php">Read more...</a></p>
						<div class="widget widget_contact">
							<ul>
								<li><i class="icon-map-marker"></i>Address :<p>No 30, Taoba street zone G , Gaasaka Ilorin.</p></li>
								<li><i class="icon-phone"></i>Phone number :<p>(+234)80 53456634</p></li>
								<li><i class="icon-envelope-alt"></i>E-mail :<p>info@sheikhajia.com</p></li>
								<li>
									<i class="icon-share"></i>Social links :
									<p>
										<a href="#" original-title="Facebook" class="tooltip-n">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#3b5997" span_hover="#2f3239">
													<i i_color="#FFF" class="social_icon-facebook"></i>
												</span>
											</span>
										</a>
										<a href="#" original-title="Twitter" class="tooltip-n">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#00baf0" span_hover="#2f3239">
													<i i_color="#FFF" class="social_icon-twitter"></i>
												</span>
											</span>
										</a>
										<a original-title="Youtube" class="tooltip-n" href="#">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#cc291f" span_hover="#2f3239">
													<i i_color="#FFF" class="social_icon-youtube"></i>
												</span>
											</span>
										</a>
										<a href="#" original-title="Linkedin" class="tooltip-n">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#006599" span_hover="#2f3239">
													<i i_color="#FFF" class="social_icon-linkedin"></i>
												</span>
											</span>
										</a>
										<a href="#" original-title="Google plus" class="tooltip-n">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#ca2c24" span_hover="#2f3239">
													<i i_color="#FFF" class="social_icon-gplus"></i>
												</span>
											</span>
										</a>
										 
									</p>
								</li>
							</ul>
						</div>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
			</div><!-- End contact-us -->
		 
	
    <?php include("include/sidebar.php") ?>
		</div><!-- End row -->
	</section><!-- End container -->
	
	<?php include("include/footer.php") ?>
<?php include("include/foot.php") ?>