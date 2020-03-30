<?php //include("include/connection.php"); ?>
<header id="header">
		<section class="container clearfix">
			<div class="logo"><a href="index.php"><img alt="" src="images/sheikhlogo.jpg"></a></div>
			<nav class="navigation">
				<ul>
					<li class="current_page_item"><a href="index.php">Home</a>
						
					</li>
					
					<li><a href="cat_question.php">Categories</a>
					
						<ul>
						<?php $userSelect = "SELECT * FROM  categories where status='Question' ";
			$userSelectQ = mysqli_query($conStr,$userSelect);
			while($userSelectF = mysqli_fetch_array($userSelectQ,MYSQLI_ASSOC))
			{
				$eventPostId = $userSelectF ['categoryID'];
				$categoryName = $userSelectF['categoryName'];
				 
			 

						?>
							<li><a href="cat_question.php?cat_id=<?php echo $categoryName ?>"><?php echo $categoryName ?></a></li>
			<?php } ?>
							 
						</ul>
					</li>
					<li class="ask_question"><a href="ask_question.php">Send a question</a></li>
					<li><a href="user_profile.php">New answers</a>
						<ul>
						<?php $userSelect = "SELECT * FROM  categories where status='Question' ";
			$userSelectQ = mysqli_query($conStr,$userSelect);
			while($userSelectF = mysqli_fetch_array($userSelectQ,MYSQLI_ASSOC))
			{
				$eventPostId = $userSelectF ['categoryID'];
				$categoryName = $userSelectF['categoryName'];
				 
			 

						?>
							<li><a href="new_answers.php?cat_id=<?php echo $categoryName ?>"><?php echo $categoryName ?></a></li>
			<?php } ?>
						</ul>
					</li>
					<li><a href="#">Classes</a>
					<ul>
						<?php $userSelect = "SELECT * FROM  lectures GROUP BY category ";
			$userSelectQ = mysqli_query($conStr,$userSelect);
			while($userSelectF = mysqli_fetch_array($userSelectQ,MYSQLI_ASSOC))
			{
				$eventPostId = $userSelectF ['categoryID'];
				$category  = $userSelectF['category'];
				 
			 

						?>
							<li><a href="classes.php?cat_id=<?php echo $category  ?>"><?php echo $category  ?></a></li>
			<?php } ?>
							 
						</ul>
					</li>
					<li><a href="about.php">About Sheikh</a>
						 
					</li>
				 
					<li><a href="contact_us.php">Contact Us</a></li>
				</ul>
				<div data-tml-language-selector="popup"></div>  
			</nav>
		