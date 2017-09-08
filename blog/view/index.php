<?php

  $prefix = '../..';
  include $prefix.'/includes/dbconnect.php';


	if(!empty($_GET))
	{

			$query = "SELECT * FROM blog_table WHERE blogID = " .$_GET['id'];

      // echo $query; exit();

      $result = mysqli_query($conn, $query);

      // print_r($result); exit();

			// $result = $conn->query($query);

      $row = mysqli_fetch_assoc($result);

      $key = $row["blogID"];


	} else {
			// header redirect back to blog page
			echo "0 results";
	}

?>

<?php echo $resultArr['blogID'];?>


<?php include $prefix.'/includes/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Blog : <?php echo $conf['titleTagPost']?></title>
<?php include $prefix.'/includes/links.php';?>
</head>
<body>

	<div class="container-full">

		<?php include $prefix.'/includes/header.php';?>

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
							<div class="blogPosts">
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-2">
								    <div class="fullBlogTitle"><?php echo $row['blog_name'];?></div>
					          <div class="fullBlogSubTitle"><?php echo $row['author'];?> - <?php echo $row['publish_date'];?></div>
								    <br>
								    <div class="webPageText" id="blogText"><?php echo $row['full_post'];?></div>
                  </div>
              </div>
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-2">
                    <img id="fullBlogPic" src="<?php echo $row['blog_image'];?>">
                  </div>
                </div>
                  <div class="row">
                    <div class="col-sm-12 text-center">
                      <div class="viewButton">
                        <a href="/personalwebsite/blog/update/?id=<?php echo $key['blogID'];?>" class="readPost">Update</a>
                      </div>
                  </div>
                </div>
					</div>
				</div>
			</div>
		</div>

		<?php include $prefix.'/includes/footer.php';?>

	</div>


</body>
</html>
