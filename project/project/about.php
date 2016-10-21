<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="learning management system">
<meta name="keywords" content="html,css,javascript,php">
<meta name="author" content="osura mahanama">

<link rel="icon" href="images/main.ico" type="image/x-icon">
<link href="css/about.css" rel="stylesheet" type="text/css">
<link href = "css/home.css" rel = "stylesheet" type="text/css">


<title>LMS-Learning Management System</title>

</head>

<body>

<div id="head">

<h1 align="center"><u><b> ABOUT US</b> </u></h1>

</div>

<div class="mid">

<p id="desc"> In LMS we do our best to help our students to achieve their best.
 Here we have all the facilities needed by the students for their education and we assure you
 that this will be a success for the students.<br> The degree that we provide for out students is a world wide acknowledged
and we offer scholarships for our best student to continue their education with better facilities in England. </P>

 <p> Our Programmes : </p>
 <ul>
 <li>BSC hons in Softwere Engineering. </li>
 <li>BSC hons in Networking. </li>
 <li>BSC hons in Computer Security.</li>
 </ul>

 <p> Our Facilities : </p>
 <ul>
 <li>We have our own computer labs. </li>
 <li>We have the best lecturers from around the world. </li>
 <li>We provide an acommodation system for our students.</li>
 <li>We provide a shuttle service throughout the country. </li>
 </ul>


<hr>
</div>

<div class="slide">


<img id="img" src="images/6.jpg" alt="image1" >

<script>
var img=6;
function changeImg()
{
img++;
var a=img%10;
document.getElementById("img").src=img+".jpg";
}
setInterval(changeImg,1000);

</script>

</div>
<hr>

<div class="bottom">

<marquee direction="right" size="26px"> FOR A BETTER FUTURE</marquee>

</div>

</body>
</html>
