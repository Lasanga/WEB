<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="learning management system">
<meta name="keywords" content="html,css,javascript,php">
<meta name="author" content="lasanga sandaruwan">

<link rel="icon" href="main.ico" type="image/x-icon">
<link href = "css/admin.css" rel = "stylesheet" type = "text/css">

<title>LMS-Cyntec</title>
</head>
<?php
include 'core/functions/functions.php';
access();
basicadmin();

 ?>
 <body>
   <div class="navi">
     <?php
include 'php includes/navigation.php';
      ?>
    </div>
<br>
<br>
<h3>Change the user password:-</h3>
<form class="chp" action ="changepw.php" method = "post" >

  User-name:<br>
  <input type="text" name = "username" class ="pass" required><br>
  current password:<br>
  <input type="password" name = "pass" class ="pass" required><br>
  New password:<br>
  <input type="password" name = "npass" class = "npass" required><br>
  re-enter new password:<br>
  <input type="password" name = "rnpass" class = "rnpass" required><br><br>

  <input type = "submit" name -"submit">

</form>
<br>
<br>
<h2>Event organising:-</h2>
<form action = "showevents.php" method = "POST">

Event name:<br>
<input type ="text" name = "eventname" required><br><br>
Event date:<br>
<input type ="text" name = "eventdate"><br><br>
Event time:<br>
<input type ="text" name = "eventtime"><br><br>
Event venue:<br>
<input type ="text" name = "eventvenue"><br><br>
Form more info:<br>
<input type ="text" name = "info"><br><br>
<input type ="submit" name = "submit" value = "post"><br><br>

</form>

</body>

</html>
