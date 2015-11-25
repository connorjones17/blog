<?php
$title="Patience... Patience... Patience";
$author="Connor Jones";
$date ="October 6th, 2015";
$image="patience.jpg";

$content_preview ="Patience is very necessary when dealing with HTML and CSS...";

$content="Patience is very necessary when dealing with HTML and CSS. It can be an absolute pain
in the backside, however I have learnt that you should not settle for anything less than exactly what you
set out to do.
<p>
Being good at searching on google is definitely a skill worth having. I was having issues listing the photos
in the format I wanted (tiles with different heights) for my new blog. At first I floated them all left but as
soon as you get about 6 photos in large white gaps start to appear... Problem. So I decide to make 3 columns so
that the photos can sit on top of each other without any issues. Problem sorted right? Don't be stupid.
</p><p>
Next problem, HTML gets very confusing very quickly as you have to make sure each each photo/blog post is in the
correct column. And when I want to add another post or image I have to move them across to the next column so
that they are in date order... I'm not going to keep track of all this... Problem!
</p><p>
Ohhhhh, wait I have an idea, lets order the columns into months... genius! That way you can keep the columns
ordered, the pictures will sit on top of each other perfectly and all the photos will be tiled properly.
Brilliant, now I've covered September, October and November for my 3 columns... what happens if I want to
add December? Hopefully September will just wrap around and sit directly underneath December right?? Come on,
we all know CSS isn't going to like this. They are all floated left and suddenly we have the same problem we had
with the photos in the first instance... lots and lots of large white spaces... bugger
</p><p>
Time to hit Google and go back to the start. This by the way is when you need a great deal of patience as you
are now back in the same position as where you started. So if I have an idea of how I want my website to look
I will make it look like that and not take an alternative route because a) you can end up in the same place as
where you started and b) it will always be a failed attempt at what you set out to do... so don’t settle.
</p><p>
Anyway, here is the little beauty that sorted my life out:
</p><p>
photos {
</p><p>
-webkit-column-count: 5; -webkit-column-gap: 5px; -moz-column-count: 5; -moz-column-gap: 5px; column-count: 5;
column-gap: 5px; }
</p><p>
photos img {
</p><p>
width: 100% !important; height: auto !important; margin-top: 5px; }
</p><p>
A simple bit of genius from my friend the internet, hardly any code needed to sort out my issue.
Someone else has probably encountered similar problems to you so answers can always be found. Anyway,
I think it's time to lie down! </p>";

?>
