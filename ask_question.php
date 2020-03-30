<?php
session_start();
//$_SESSION["schoolid"]="KUNLEXY SAT";
include("include/connection.php");
include("include/head.php");
$title=$_POST["question_title"];
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
					<h1>Ask Question</h1>
				</div>
				<div class="col-md-12">
					<div class="crumbs">
						<a href="#">Home</a>
						<span class="crumbs-span">/</span>
						<a href="#">Pages</a>
						<span class="crumbs-span">/</span>
						<span class="current">Ask Question</span>
					</div>
				</div>
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<section class="container main-content">
		<div class="row">
			<div class="col-md-9">
				
				<div class="page-content ask-question">
					<div class="boxedtitle page-title"><h2>Ask Question</h2></div>
					<?php
					if($msg)
					{
					echo $msg;
					}
			?>
					<p>Ask the People of Remembrance if you do not know.</p>
					
					<?php
					if($error)
					{
					echo $error;
					}
			?>
					<div class="form-style form-style-3" id="question-submit">
						<form method="post" action="val_ask_question.php" enctype="multipart/form-data">
							<div class="form-inputs clearfix">
								<p>
									<label class="required">Question Title: <span>*</span></label>
									<input type="text"   name="question_title" value="<?php echo $title; ?>" required>
									<span class="form-description">Please choose an appropriate title for the question to answer it even easier .</span>
								</p>
								<p>
									<label>Email</label>
									<input type="text" class="input" name="eMail" id="question_tags" data-seperator=",">
									<span class="form-description">Please enter valid Email: <span class="color">question , poll</span> .</span>
								</p>
								<p>
									<label class="required">Category<span>*</span></label>
									<span class="styled-select">
										<select name="category">
											<option value="">Select a Category</option>
                                            <?php 
				                        $selectBank= "SELECT * FROM categories where status='Question'";
				                        $selectBankQ = mysqli_query($conStr,$selectBank);
				                        while($selectBankF = mysqli_fetch_array($selectBankQ,MYSQLI_ASSOC))
				                        {
				                        ?>
				                        <option ><?php echo $selectBankF['categoryName']?></option>
				                        <?php
				                        }
				                        ?>
				
										</select>
									</span>
									<span class="form-description">Please choose the appropriate section so easily search for your question .</span>
								</p>
								 
								<div class="clearfix"></div>
								<div class="poll_options">
									<p class="form-submit add_poll">
										<button id="add_poll" type="button" class="button color small submit"><i class="icon-plus"></i>Add Field</button>
									</p>
									<ul id="question_poll_item">
										<li id="poll_li_1">
											<div class="poll-li">
												<p><input id="ask[1][title]" class="ask" name="ask[1][title]" value="" type="text"></p>
												<input id="ask[1][value]" name="ask[1][value]" value="" type="hidden">
												<input id="ask[1][id]" name="ask[1][id]" value="1" type="hidden">
												<div class="del-poll-li"><i class="icon-remove"></i></div>
												<div class="move-poll-li"><i class="icon-fullscreen"></i></div>
											</div>
										</li>
									</ul>
									<script> var nextli = 2;</script>
									<div class="clearfix"></div>
								</div>
								<!--
								<label>Attachment</label>
								<div class="fileinputs">
									<input type="file" class="file">
									<div class="fakefile">
										<button type="button" class="button small margin_0">Select file</button>
										<span><i class="icon-arrow-up"></i>Browse</span>
									</div>
								</div>
								-->
							</div>
							<div id="form-textarea">
								<p>
									<label class="required">Details<span>*</span></label>
									<textarea id="question-details" name="details" aria-required="true" cols="58" rows="8"></textarea>
									<span class="form-description">Type the description thoroughly and in detail .</span>
								</p>
							</div>
							<p class="form-submit">
								<input type="submit" id="publish-question"  name="submit" value="Publish Your Question" class="button color small submit">
							</p>
						</form>
					</div>
				</div><!-- End page-content -->
			</div><!-- End main -->
            <?php include("include/sidebar.php") ?>
		</div><!-- End row -->
	</section><!-- End container -->
	
	<?php include("include/footer.php") ?>
<?php include("include/foot.php") ?>