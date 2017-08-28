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

		<div class="row">
			<div class="col-sm-12">
				<div class="blog">
					<div class="row">
						<div class="col-sm-6">
							<div class="blogPosts">
								<div class="blogTitle">Fostering Cuzco</div>
								Zeshan Jeewanjee - January 16, 2017
								<br>
								<img id="cuzcoPic" src="http://res.cloudinary.com/dp3spzmf7/image/upload/c_scale,q_100,w_600/v1500397274/Cuzco_bh2qeb.jpg">
								<br>
								<div class="webPageText" id="blogText">Lorem ipsum dolor sit amet, consectetura dipiscing elit, sed doeiusmod temporut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud…</div>
								<a href="blogcuzco.html" class="readPost">Read Post</a>
								</div>
							<div class="blogPosts">
								<div class="blogTitle">India vs. Pakistan, Final</div>
								Zeshan Jeewanjee - June 30, 2017
								<br>
								<img id="pakPic" src="http://res.cloudinary.com/dp3spzmf7/image/upload/c_scale,q_100,w_600/v1500397259/PakIndia_xdqigp.jpg">
								<br>
								<div class="webPageText" id="blogText">In 2017, the ICC Champions Trophy took a dramatic turn which saw Pakistan and India face each other for the first time in an ICC tournament final. Pakistan was the 8th and lowest ranked seed in the tournament, yet they squeezed…</div>
								<a href="blogcuzco.html" class="readPost">Read Post</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include '../includes/footer.php';?>

	</div>


</body>
</html>
