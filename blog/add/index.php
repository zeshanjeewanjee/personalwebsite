<?php
  $prefix = '../..';
    include $prefix.'/includes/dbconnect.php';


    if(!empty($_POST))
    {

        // 2 cases:

        // 1: Upate Case
        if(array_key_exists('blogID', $_POST))
        {
          // an update case
        }
        else {
          // Insert case
          $sql = "INSERT INTO blog_table (blog_name, author, publish_date, short_post, full_post, blog_image)
          VALUES ('$blog_name', '$author', '$publish_date', '$short_post', '$full_post', '$blog_image')";

              if ($conn->query($sql) === TRUE) {
                  $message = "Thank you! Your blog post has been entered into the db!";
                  // add  a link to go back to /blog
              } else {
                  $message = "Error:" . $sql . "<br>" . $conn->error;
              }

        }

    }
    else if (!empty($_GET))
    {
        // get the blog from db and setup the form fields
        $blog = array();
    }
    else { // they have arrived
      // just show the empty form
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

    <?php include $prefix.'/includes/header.php' ?>

    <div class="row">
      <div class="col-sm-12">
        <div class="blogPageHero">
					<div id="blogTitle">Blog Entry</div>
          <br>
          <div id="blogQuote"><q>It ain't whatcha write,it's the way atcha write it</q>
            <br>
            Jack Kerouac
      </div>
    </div>

          <div class="blogEntryForm">
          	<form method="post" action="index.php" id="formPost">
              <div class="row">
                <div class="col-sm-4 col-sm-offset-3">
                <label id="blogEntryText">Blog Title : </label><br><input class="blogInsert" type="text" name="blog_name" value="<?php echo $blog['blog_name']?>" />
                <?php
                  if(!empty($_GET))
                  {
                    ?>
                    <input type="hidden" name="blogID" value="<?php echo $blog['blogID']?>">
                    <?php
                  }
                 ?>
                 <br>
                </div>
                <div class="col-sm-4">
                  <label id="blogEntryText">Author Name : </label><br><input class="blogInsert" type="text" name="author"  value="<?php echo $blog['author']?>" />
          		    <br>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-4 col-sm-offset-3">
          		  <label id="blogEntryText">Publish Date : </label><br><input class="blogInsert" type="text" name="publish_date" value="<?php echo $blog['publish_date']?>" />
                  <br>
                </div>
                <div class="col-sm-4">
                <label id="blogEntryText">Image URL : </label><br><input class="blogInsert" type="text" name="blog_image" value="<?php echo $blog['blog_image']?>" />
                </div>
              </div>

            <div class="row">
              <div class="col-sm-9 col-sm-offset-3">
                <label id="blogEntryText">Short Blurb :</label><br><textarea class="blogInsert" name="short_post" id="formPost" rows="5" cols="81"><?php echo $blog['short_post']?></textarea>
                  <br>
              </div>
            </div>


            <div class="row">
              <div class="col-sm-9 col-sm-offset-3">
                <label id="blogEntryText">Full Post :</label><br><textarea class="blogInsert" name="full_post" id="formPost" rows="10" cols="81"><?php echo $blog['full_post']?></textarea>
                  <br>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 col-sm-offset-5">
          		<input id="insertButton" type="submit" value="Insert">
      	   </form>
              </div>
         </div>
        </div>
       </div>
     </div>

    <?php include $prefix.'/includes/footer.php' ?>


</body>
</html>
