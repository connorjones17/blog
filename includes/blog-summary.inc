<?php
$dir = "blog-posts/";
$blog_post_array = array ();
$count_posts = 0;

// Open a directory, and read its contents
 if (is_dir($dir)){
   if ($dh = opendir($dir)){
     while (($file = readdir($dh)) !== false){
         if (is_file($dir . $file) && $file != "." && $file != ".." && $file != ".DS_Store" ) {
          $blog_post_array[$count_posts] = "{$file}";
          $count_posts ++;
        }
     }
     closedir($dh);
   }
 }
 for ($i = count($blog_post_array) - 1; $i >= 0; $i --){
   include "$dir$blog_post_array[$i]";

?>
<div class="blog-post">
  <div class="blog-preview">
    <h2><?php echo "$title"; ?></h2>
    <h4><?php echo "$author"; ?>&nbsp; &nbsp; &nbsp;<?php echo "$date"; ?></h4>
    <p>
      <?php echo $content_preview; ?>
    </p>
      <a href="index.php?page=blog-post&post=<?php echo $blog_post_array[$i];?>"><input class="read-more-button" type="submit" value="Read More.."></a></div>
  <img class="blog-image" src="img/<?php echo $image; ?>">
</div>
<?php
 }
?>
