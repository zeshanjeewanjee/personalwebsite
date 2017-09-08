<?php

	include '../includes/dbconnect.php';


	// if(!empty($_GET))
	// {

			// $query = "SELECT * FROM `blog_page` WHERE blogID = " .$_GET['blogID'];

			$result = $conn->query("SELECT * FROM blog_table");

			$resultArr = array();

			if ($result->num_rows > 0)
			{

					while($row = $result->fetch_assoc())
					{

						$key = $row["blogID"];

						$resultArr[$key] = $row;
					}
					// print_r($resultArr); exit();

			}
	// } else {
	// 		// header redirect back to blog page
	// 		echo "0 results";
	// }

?>


<?php include '../includes/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Blog : <?php echo $conf['titleTagPost']?></title>
<?php include '../includes/links.php';?>
</head>
<body>

	<div class="container-full">

		<?php include '../includes/header.php';?>

		<div class="row">
			<div class="col-sm-12">
				<div class="blogPageHero">
					<div id="blogTitle">Worldly Adventures<br></div>
					<div id="blogQuote"><q>Not all who wander are lost</q></div>
				</div>
			</div>
		</div>


		<div class="row blogContainer">
			<div class="col-sm-7">

					<?php
					foreach($resultArr as $key => $val)
					{
					?>

						<div class="blogPosts">
							<div class="blogTitle"><?php echo $val['blog_name'];?></div>
							<?php echo $val['author'];?> - <?php echo $val['publish_date'];?>
							<br>
							<img id="cuzcoPic" src="<?php echo $val['blog_image'];?>">
							<br>
							<div class="webPageText" id="blogText"><?php echo $val['short_post'];?></div>
							<a href="/personalwebsite/blog/view/?id=<?php echo $val['blogID'];?>" class="readPost">Read Post</a>
						</div>

					<?php
						}
					?>

			</div>


		<div class="row">
			<div class="col-sm-5">
				<h4 id="instagramFeedTitle">My Instagram Feed</h4>
				<div id="instafeed"></div>
				<div id="center">
					<a href="https://www.instagram.com/zeshan.jeewanjee/" id="followMe">Follow Me</a>
				</div>
			</div>
		</div>
		</div>



		<a href ="/personalwebsite/blog/add/">Insert Post</a>

		<?php include '../includes/footer.php';?>

	</div>

<script src="/personalwebsite/js/instafeed.min.js"></script>
<script src="/personalwebsite/js/custom.js"></script>

</body>
</html>
