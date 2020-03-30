
<aside class="col-md-3 sidebar">

<div class="widget">
<h3 class="widget_title">Latest Questions</h3>
<?php $userSelect = "SELECT * FROM  questions WHERE status='unanswered' order by id DESC LIMIT 2";
			$userSelectQ = mysqli_query($conStr,$userSelect);
			while($userSelectF = mysqli_fetch_array($userSelectQ,MYSQLI_ASSOC))
			{
				$eventPostId = $userSelectF ['id'];
				 
				$title = $userSelectF['title'];
				$summary = $userSelectF['summary'];
                $date = $userSelectF['startDate'];
				 
		 
			 

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
				<div class="widget widget_stats">
					<h3 class="widget_title">Stats</h3>
					<div class="ul_list ul_list-icon-ok">
						<ul>
						<?php
						$selectOnline3 = "SELECT count(code) AS total_count2 FROM questions  ";
				//ticketsales WHERE paymentStatus	 = 'Confirm'";
				$selectOnline3Q =mysqli_query($conStr,$selectOnline3);
				$selectOnline3F = mysqli_fetch_assoc($selectOnline3Q);
				$total3 = $selectOnline3F['total_count2'];
			?>
							<li><i class="icon-question-sign"></i>Questions ( <span><?php echo $total3 ?></span> )</li>
							
							<?php
						$selectOnline3 = "SELECT count(code) AS total_count2 FROM questions WHERE status='answered'";
				//ticketsales WHERE paymentStatus	 = 'Confirm'";
				$selectOnline3Q =mysqli_query($conStr,$selectOnline3);
				$selectOnline3F = mysqli_fetch_assoc($selectOnline3Q);
				$total4 = $selectOnline3F['total_count2'];
			?>			
							<li><i class="icon-comment"></i>Answers ( <span><?php echo $total4 ?></span> )</li>
						</ul>
					</div>
				</div>
				
				
				
				<div class="widget widget_login">
					<h3 class="widget_title">Login</h3>
					<div class="form-style form-style-2">
						<form method="post" action="index.php">
							<div class="form-inputs clearfix">
								<p class="login-text">
									<input type="text" value="Username" onfocus="if (this.value == 'Username') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Username';}">
									<i class="icon-user"></i>
								</p>
								<p class="login-password">
									<input type="password" value="Password" onfocus="if (this.value == 'Password') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Password';}">
									<i class="icon-lock"></i>
									<a href="#">Forget</a>
								</p>
							</div>
							<p class="form-submit login-submit">
								<input type="submit"  name="submit" value="Log in" class="button color small login-submit submit">
							</p>
							<div class="rememberme">
								<label><input type="checkbox" checked="checked"> Remember Me</label>
							</div>
						</form>
						<ul class="login-links login-links-r">
							<li><a href="#">Register</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
				
				<div class="widget widget_highest_points">
					<h3 class="widget_title"> Time table for Classes</h3>
					<ul>
					<li><strong>Tefseer Session</strong> | Fri. & Sat.: 4:30pm - 6:00pm (Masjidul-Hujaylee,Gaa Saka)</li>
					<!-- <li><strong> Tefseer for Women </strong> | Sat. & Sun. : 11:00pm - 1:00pm (Masjidul-Hujaylee,Gaa Saka)</li>-->	
					<li><strong>HALQAH </strong> | Sat. & Sun. : 7am - 9am (Masjidul-Hujaylee,Gaa Saka)</li>
					
					</ul>
				</div>
				
				<div class="widget widget_tag_cloud">
					<h3 class="widget_title">Categories</h3>
					<?php $userSelect = "SELECT * FROM  categories  ";
			$userSelectQ = mysqli_query($conStr,$userSelect);
			while($userSelectF = mysqli_fetch_array($userSelectQ,MYSQLI_ASSOC))
			{
				$eventPostId = $userSelectF ['categoryID'];
				$categoryName = $userSelectF['categoryName'];
				 
			 

						?>
							 <a href="cat_question.php?cat_id=<?php echo $categoryName ?>"><?php echo $categoryName ?></a> 
			<?php } ?>
							 
					 
					 
				</div>
				
				
				
			</aside><!-- End sidebar -->