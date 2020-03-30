<footer id="footer">
<div id="fb-root"></div>
	<section class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="widget widget_contact">
						<h3 class="widget_title">Where We Are ?</h3>
						
						<ul>
							<li>
								<span>Address :</span>
								No 30, Taoba street zone G , Gaasaka Ilorin.
							</li>
							
							<li>Support Email Account : Sheilkajiafatawa@gmail.com</li>
						</ul>
					</div>
				</div>
				<div class="col-md-2">
					<div class="widget">
						<h3 class="widget_title">Quick Links</h3>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="ask_question.php">Ask Question</a></li>
							<li><a href="about.php">About Sheikh</a></li>
							<li><a href="more_questions.php">Questions</a></li>
							
							<li><a href="contact_us.html">Contact Us</a></li>
							 
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="widget">
					<h3 class="widget_title">Recent Questions</h3>
					<?php $userSelect = "SELECT * FROM  questions order by id DESC LIMIT 1";
			$userSelectQ = mysqli_query($conStr,$userSelect);
			while($userSelectF = mysqli_fetch_array($userSelectQ,MYSQLI_ASSOC))
			{
				$eventPostId = $userSelectF ['id'];
				 
				$title = $userSelectF['title'];
				$summary = $userSelectF['summary'];
                $date = $userSelectF['startDate'];
				 
			 $category = $userSelectF['category'];
			 $postedby = $userSelectF['postedby'];
			 

						?>
						
						<ul class="related-posts">
							<li class="related-item">
								<h3><a href="single_question.php?id=<?php echo $eventPostId ?>"><?php echo $title ?></a></h3>
								<p><?php echo $summary ?></p>
								<div class="clear"></div><span><?php echo $date ?></span>
							</li>
			<?php } ?>	 
						</ul>
					</div>	
				</div>
				<div class="col-md-3">
					<div class="widget widget_twitter">
						<h3 class="widget_title">Facebook Page</h3>
						 
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FSheikh-Ajia-Fatawa-468198463989343&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=384067311972029" width="340" height="300" style="border:none;overflow:hidden" scrolling="yes" frameborder="1" allowTransparency="true" allow="encrypted-media"></iframe>
						 
					</div>
				</div>
			</div><!-- End row -->
		</section><!-- End container -->
	</footer><!-- End footer -->
	<footer id="footer-bottom">
		<section class="container">
			<div class="copyrights f_left">Copyright sheikhajiafatawa group | <a href="#">Islamic Coders</a></div>
			<div class="social_icons f_right">
				<ul>
					<li class="twitter"><a original-title="Twitter" class="tooltip-n" href="#"><i class="social_icon-twitter font17"></i></a></li>
					<li class="facebook"><a original-title="Facebook" class="tooltip-n" href="#"><i class="social_icon-facebook font17"></i></a></li>
					<li class="gplus"><a original-title="Google plus" class="tooltip-n" href="#"><i class="social_icon-gplus font17"></i></a></li>
					<li class="youtube"><a original-title="Youtube" class="tooltip-n" href="#"><i class="social_icon-youtube font17"></i></a></li>
					<li class="skype"><a original-title="Skype" class="tooltip-n" href="skype:#?call"><i class="social_icon-skype font17"></i></a></li>
					<li class="flickr"><a original-title="Flickr" class="tooltip-n" href="#"><i class="social_icon-flickr font17"></i></a></li>
					<li class="rss"><a original-title="Rss" class="tooltip-n" href="#"><i class="social_icon-rss font17"></i></a></li>
				</ul>
			</div><!-- End social_icons -->
		</section><!-- End container -->
	</footer><!-- End footer-bottom -->