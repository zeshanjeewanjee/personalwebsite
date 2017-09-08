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


	}
  else if(!empty($_POST))
  {
    $updateString = array();
    $updateString[] = 'blog_name = "'.$_POST['blog_name'].'"';
    $updateString[] = 'author = "'.$_POST['author'].'"';
    $updateString[] = 'publish_date = "'.$_POST['publish_date'].'"';
    $updateString[] = 'short_post = "'.$_POST['short_post'].'"';
    $updateString[] = 'full_post = "'.$_POST['full_post'].'"';
    $updateString[] = 'blog_image = "'.$_POST['blog_image'].'"';

    $queryString = "UPDATE blog_table
            SET ".implode(',', $updateString)."
            WHERE blogID = ".$_POST['blogID'];

            echo $queryString;


  }
 else {
			// header redirect back to blog page
			echo "0 results";
	}






?>


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


  <div class="blogEntryForm">
    <form method="post" action="index.php" id="formPost">
      <div class="row">
        <div class="col-sm-4 col-sm-offset-3">
        <label id="blogEntryText">Blog Title : </label><br><input class="blogInsert" type="text" name="blog_name" value="<?php echo $row['blog_name'];?>" />
        <?php
          if(!empty($_GET))
          {
            ?>
            <input type="hidden" name="blogID" value="<?php echo $row['blogID']?>">
            <?php
          }
         ?>
         <br>
        </div>
        <div class="col-sm-4">
          <label id="blogEntryText">Author Name : </label><br><input class="blogInsert" type="text" name="author"  value="<?php echo $row['author']?>" />
          <br>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4 col-sm-offset-3">
        <label id="blogEntryText">Publish Date : </label><br><input class="blogInsert" type="text" name="publish_date" value="<?php echo $row['publish_date']?>" />
          <br>
        </div>
        <div class="col-sm-4">
        <label id="blogEntryText">Image URL : </label><br><input class="blogInsert" type="text" name="blog_image" value="<?php echo $row['blog_image']?>" />
        </div>
      </div>

    <div class="row">
      <div class="col-sm-9 col-sm-offset-3">
        <label id="blogEntryText">Short Blurb :</label><br><textarea class="blogInsert" name="short_post" id="formPost" rows="5" cols="81"><?php echo $row['short_post']?></textarea>
          <br>
      </div>
    </div>


    <div class="row">
      <div class="col-sm-9 col-sm-offset-3">
        <label id="blogEntryText">Full Post :</label><br><textarea class="blogInsert" name="full_post" id="formPost" rows="10" cols="81"><?php echo $row['full_post']?></textarea>
          <br>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 col-sm-offset-5">
      <input id="insertButton" type="submit" value="Update">
   </form>
      </div>
    </div>
  </div>

<?php include $prefix.'/includes/footer.php';?>

</div>


</body>
</html>
