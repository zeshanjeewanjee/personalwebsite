<?php



    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "root";
    $dbname = "blog_page";

    $blog_name = $_POST['blog_name'];
    $author = $_POST['author'];
    $publish_date = $_POST['publish_date'];
    $short_post = $_POST['short_post'];
    $full_post = $_POST['full_post'];
    $blog_image = $_POST['blog_image'];

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection Failed:" . $conn->connect_error);
        exit();
    }





?>
