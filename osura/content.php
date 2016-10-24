<?php
include 'php includes/head.php';
 ?>
 <head>
<link href = "css/content.css" rel = "stylesheet" type="text/css">
 </head>
 <body background="images/img1.jpg">
<div id="top">
<video width="100%" height="460"  autoplay loop id="vid">
  <source src="video/cyntec.mp4" type="video/mp4">
  <source src="video/cyntec.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>

</div>
<div id="tex">
<p id="offer"><strong><u>WE OFFER:</u></strong></p>
<ul>
<li><u>Academics</u></li>
<li><u>Activities</u></li>
<li><u>Clubs</u></li>
<li><u>Events</u></li>
<li><u>Examinations</u></li>
<li><u>Researches</u></li>
<li><u>Sports</u></li>
<li><u>Student Hand Books</u></li>
<li><u>Scholarships</u></li>
</ul>
</div>

<div id="mid">

<img id="img" src="images/10.jpg" alt="image here"/>
<br>
<script>
function img1()
{
document.getElementById("img").src="images/10.jpg";
}
function img2()
{
document.getElementById("img").src="images/11.jpg";
}
function img3()
{
document.getElementById("img").src="images/12.jpg";
}
function img4()
{
document.getElementById("img").src="images/13.jpg";
}
function img5()
{
document.getElementById("img").src="images/14.jpg";
}
function img6()
{
document.getElementById("img").src="images/15.jpg";
}
</script>
<br>
<form>

<input type="button" value="1" onclick="img1()"/>
<input type="button" value="2" onclick="img2()"/>
<input type="button" value="3" onclick="img3()"/>
<input type="button" value="4" onclick="img4()"/>
<input type="button" value="5" onclick="img5()"/>
<input type="button" value="6" onclick="img6()"/>

</form>
</div>
 </body>
 </html>
