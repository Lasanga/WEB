<div id="header" >
<img src="images/headerpic.jpg" alt="image"  id="pic">
<h2>Cyntec</h2>
<h1>Learning Management System</h1>
</div>

<div style="float:left">
  <p style="background-color:white"><a href ="out.php"><button>log out</button></a>
<?php
include 'core/functions/functions.php';
check();
 ?>
</p>
</div>
<div>
  <br>

<div class="log">
<form action="log.php" method="POST">

User-name:<input type="text" id="un" name="un" required>
Password:<input type="password" id="pw" name="pw" required>
<input type="submit" value="login" id="sub" name="sub">

</form>
</div>
</div>
<br>
<br>
<hr>


<ul id="list">
  <li class="li"><a href="home.php  " >Home</a></li>
  <li class="li"><a href="about.php  " target="main layout">About us</a></li>
  <li class="li"><a href="contactus.php" target="main layout">Contact</a></li>
  <li class="li"><a href="courses.php" target="main layout">Courses</a></li>
  <li class="li"><a href="student.php" target="main layout">Resources</a></li>
  <li class="li"><a href="allocation.php" target="main layout">Allocations</a></li>
  <li class="li"><a href="signform.php" target="main layout">Register</a></li>
  <li id="admin"><a href="adminpage.php" >settings<img src="images/setting.jpg" width="20px" height="14px"></a></li>

</ul>

<div id="mid">

<p><marquee direction="right"> LMS enables you to find information about all the academic and non academic facts related to the university.</marquee></p>

</div>
</div>
