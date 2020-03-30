<?php 
include("include/head.php");
include("include/connection.php");
?>

<body>

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
	<!-- this is the top login panel -->
<?php include("include/top_login_panel.php") ?>
	
	

		<?php include("include/top_nav.php") ?>

		<?php include("include/slider.php") ?>
	
	<section class="container main-content">
		<div class="row">
			<div class="col-md-9">
				
				<div class="tabs-warp question-tab">
		            <ul class="tabs">
		                <li class="tab"><a href="#" class="current">New Answers</a></li>
		                <!-- <li class="tab"><a href="#">Most Responses</a></li>
		                <li class="tab"><a href="#">Recently Answered</a></li>
		                <li class="tab"><a href="#">No answers</a></li> -->
		            </ul>
		            <div class="tab-inner-warp">
						<div class="tab-inner">
						<?php $userSelect = "SELECT * FROM  questions WHERE status='answered' order by id DESC LIMIT 10";
			$userSelectQ = mysqli_query($conStr,$userSelect);
			while($userSelectF = mysqli_fetch_array($userSelectQ,MYSQLI_ASSOC))
			{
				$eventPostId = $userSelectF ['id'];
				$code = $userSelectF['code'];
				$title = $userSelectF['title'];
				$summary = $userSelectF['summary'];
                $date = $userSelectF['startDate'];
				$eventBanner = $userSelectF['profilePics'];
                $status = $userSelectF['status'];
			 $category = $userSelectF['category'];
			 $postedby = $userSelectF['postedby'];
			 $res_date = $userSelectF['res_date'];

						?>
							<article class="question question-type-normal">
								<h3>
									<a href="single_question.php?id=<?php echo $eventPostId ?>"><?php echo $title ?></a>
								</h3>
								
							<!--	<div class="question-type-main"><i class="icon-question-sign"></i>Question</div>-->
								
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc"><?php echo $summary ?></p>
									<div class="question-details">
										<span class="question-answered question-answered-done"><i class="icon-ok"></i>Category: <?php echo $category ?></span>
										<span class="question-view"><i class="icon-user"></i>Status: <?php echo $status ?></span>	
									<span class="question-date"><i class="icon-date"></i>Date: <?php echo $res_date ?></span>

									
									<span class="question-view"><i class="icon-user"></i>Posted by: <?php echo $postedby ?></span>
									<div class="clearfix"></div>
								</div>
							</article>
							 <?php
			                  }		
							 ?>
							 
							<a href="new_answers.php" class="load-questions"><i class="icon-refresh"></i>Load More answers</a>
		                </div>
		            </div>
		            
		        </div><!-- End page-content -->
			</div><!-- End main -->
			<?php include("include/sidebar.php") ?>
		</div><!-- End row -->
	</section><!-- End container -->
	
	<?php include("include/footer.php") ?>
<?php include("include/foot.php") ?>