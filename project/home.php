<!DOCTYPE html>
<html>

<?php
include 'core/basic.php';
include 'php includes/head.php';
?>

<body>
<div id="header" >
<h2>Cyntec</h2>
<h1>Learning Management System</h1>

</div>
<br>

<div class="log">
<p id="sign">Don't have an account?<a id="a" href ="signform.php">sign in</a></p>
<form action="log.php" method="POST">

User-name:<input type="text" id="un" name="un" required>
Password:<input type="password" id="pw" name="pw" required>
<input type="submit" value="login" id="sub" name="sub">
</form>
<a href="out.php">loout</a>
</div>

<br>
<hr>

<div id="nav">
<nav>
<button class="button" onclick=window.location.href="home.html">Home</button>
<button class="button" onclick=window.location.href="about.html">About us</button>
<button class="button" onclick=window.location.href="contact.html">Contact</button>
<button class="button" onclick=window.location.href="courses.html">Courses</button>
<button class="button" onclick=window.location.href="student.html">Resources</button>
<button class="button" onclick=window.location.href="allocation.html">Allocations</button>

</nav>
<div id="mid">

<p><marquee direction="right"> LMS enables you to find information about all the academic and non academic facts related to the university.</marquee></p>

</div>
</div>


<div class="frame1">
</div>
<div class="frame2">
</div>

<footer>
   lms of cyntec university
</footer>


</body>
</html>
