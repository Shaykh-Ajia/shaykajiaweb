<?php
session_start();
//$_SESSION["schoolid"]="KUNLEXY SAT";
include("include/connection.php");
include("include/head.php");
$id=$_GET['id'];
 $userSelect = "SELECT * FROM  questions WHERE id='$id'";
			$userSelectQ = mysqli_query($conStr,$userSelect);
			while($userSelectF = mysqli_fetch_array($userSelectQ,MYSQLI_ASSOC))
			{
				$eventPostId = $userSelectF ['id'];
				$code = $userSelectF['code'];
				$title = $userSelectF['title'];
				$summary = $userSelectF['summary'];
                $date = $userSelectF['startDate'];
				$eventBanner = $userSelectF['eventBanner'];
                $status = $userSelectF['status'];
			 $category = $userSelectF['category'];
			 $postedby = $userSelectF['postedby'];
            }
 
?>
 
<body>

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
	
<?php include("include/top_login_panel.php") ?>
	
	

    <?php include("include/top_nav.php") ?>
		</section><!-- End container -->
	</header><!-- End header -->
	
	<div class="breadcrumbs">
		<section class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><?php echo $title ?></h1>
				</div>
				<div class="col-md-12">
					<div class="crumbs">
						<a href="#">Home</a>
						<span class="crumbs-span">/</span>
						<a href="#">Questions</a>
						<span class="crumbs-span">/</span>
						<span class="current"><?php echo $title ?></span>
					</div>
				</div>
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<section class="container main-content">
		<div class="row">
			<div class="col-md-9">
				<article class="question single-question question-type-normal">
					<h2>
						<a href="#"><?php echo $title ?></a>
					</h2>
					 
					<div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
					<div class="question-inner">
						<div class="clearfix"></div>
						<div class="question-desc">
							<p><?php echo $summary ?></p>
							 
						</div>
						<div class="question-details">
                        <span class="question-answered question-answered-done"><i class="icon-ok"></i>Category: <?php echo $category ?></span>
										<span class="question-view"><i class="icon-user"></i>Status: <?php echo $status ?></span>	
									<span class="question-date"><i class="icon-date"></i>Date: <?php echo $date ?></span>

									
									<span class="question-view"><i class="icon-user"></i>Posted by: <?php echo $postedby ?></span>
						 
						<div class="clearfix"></div>
					</div>
				</article>
				
			 
				 
				   
				 <!-- End about-author -->
				
				
				
				<div id="commentlist" class="page-content">
					<div class="boxedtitle page-title"><h2>Response from Sheikh</h2></div>
					<ol class="commentlist clearfix">
					    <li class="comment">
					        <div class="comment-body comment-body-answered clearfix"> 
					            <div class="avatar"><img alt="" src="../ask-me/images/demo/admin.jpg"></div>
					            <div class="comment-text">
					                <div class="author clearfix">
					                	<div class="comment-author"><a href="#">Shekh</a></div>
					                	<div class="comment-vote">
						                	<ul class="question-vote">
						                		<li><a href="#" class="question-vote-up" title="Like"></a></li>
						                		<li><a href="#" class="question-vote-down" title="Dislike"></a></li>
						                	</ul>
					                	</div>
					                	<span class="question-vote-result">+1</span>
					                	<div class="comment-meta">
					                        <div class="date"><i class="icon-time"></i><?php echo $date ?></div> 
					                    </div>
					             
					                </div>
									 
									<div id="audio" class="row">
					<div class="col-md-12"><div class="boxedtitle page-title"><h2>Audio</h2></div></div>
					
					<div class="col-md-12">
						<div class="audio-soundcloud">
					<iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=<?php echo $eventBanner ?>&color=%23ff5500&auto_play=true&hide_related=true&show_comments=true&show_user=true&show_reposts=false&show_teaser=false&visual=true"></iframe>
					
							 
						 
						</div>
					</div>
				</div>
					                <div class="text"><p><?php echo $summary ?></p>
					                
									</div>
									<div class="question-answered question-answered-done"><i class="icon-ok"></i>Best Answer</div>
					            </div>
					        </div>
					        <ul class="children">
					             
					                 </ul><!-- End children -->
					            </li>
					            
					        </ul><!-- End children -->
					    </li>
					     
					</ol><!-- End commentlist -->
				</div><!-- End page-content -->
				<!-- End related-posts -->
			 <!-- End post-next-prev -->	
			</div><!-- End main -->
            <?php include("include/sidebar.php") ?>
		</div><!-- End row -->
	</section><!-- End container -->
	
	<?php include("include/footer.php") ?>
<?php include("include/foot.php") ?>