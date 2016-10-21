<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="learning management system">
<meta name="keywords" content="html,css,javascript,php">
<meta name="author" content="lasanga sandaruwan">

<link rel="icon" href="main.ico" type="image/x-icon">


<title>LMS-Cyntec</title>
</head>
<?php
include 'core/functions/functions.php';
access();
 ?>
 <body>
   <div class="navi">
     <?php
include 'php includes/nav.php';
      ?>
    </div>
<br>
<br>
<form class="chp" action ="changepw.php" method = "post" >

  current password:<br>
  <input type="password" name = "pass" class ="pass"><br>
  New password:<br>
  <input type="password" name = "npass" class = "npass"><br>
  re-enter new password:<br>
  <input type="password" name = "rnpass" class = "rnpass"><br><br>

  <input type = "submit" name -"submit">

</form>



 </body>

 </htm>
