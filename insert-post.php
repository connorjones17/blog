<?php
  include 'connect.php';
?>

<html>
<head>
  <title>Form Page</title>
  <link rel ="stylesheet" type="text/css" href="css/forms.css" media="screen" />
</head>
<body>
  <div id="container">
    <div id="header">
      Sign Up
    </div>
    <div id="main-content">
      <form method="POST"  action="">
      <div>
      Title: <input type="text" name="title" placeholder="Enter Title..." class="box">
     <span>Author: <input type="text" name="author" placeholder="Enter Name..." class="box"></span>
      </div><div>
      Content
    </div><div>
      <textarea placeholder="Enter Content..." name="content" cols="70" rows="15"></textarea>
      </div><div>
        <div>
        Category: <input type="text" name="category" placeholder="Enter Category..." class="box">
       <span>Tags: <input type="text" name="tags" placeholder="Enter Tags..." class="box"></span>
      </div><div>
      Summary
    </div><div>
      <textarea name="summary" placeholder="Enter Content..." cols="70" rows="2"></textarea>
      </div><div>
      Permalink <input type="text" name="permalink" placeholder="Permalink..." class="box">
      <span> Comments: <input type="radio" name="show_comments" value="true"> Yes
      <input type="radio" name="show_comments" value="false"> No
    </span>
      </div>
      <div class="buttons-term">
      <input type="checkbox" name="terms"> I agree to the Terms of Use
    </div>
    </div>
      <div id="footer">
        <input type="submit" value="Submit" id="submit-button">
        <input type="submit" value="Cancel" id="cancel-button">
      </div>
    </form>
    </div>
  </body>
  </html>

<?php

$title = $_POST['title'];
$author = $_POST['author'];
$content = $_POST['content'];
$category = $_POST['category'];
$tags = $_POST['tags'];
$summary = $_POST['summary'];
$permalink = $_POST['permalink'];
$show_comments = $_POST['show_comments'];

$sql = "INSERT INTO posts (title, author, content, category, summary, permalink, show_comments)
        VALUES ('$title', '$author', '$content', '$category', '$summary', '$permalink', '$show_comments');";

    $result = $db->query($sql);
    if (!$result){
      die ('There was an error running a query [' . $db->error . ']');
    }

?>
