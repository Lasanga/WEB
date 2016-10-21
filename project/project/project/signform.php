<?php
include 'core/functions/functions.php';
$link=mysqli_connect('localhost','root','','suser');
access();
?>

<!doctype html>
<html>
<?php
include 'php includes/shead.php';
?>
<body>
<h1>
Enter your details and get signed up.
</h1>

<div class="sign">
<div class="s1">
<?php
include 'php includes/sform.php';
 ?>
<br>
<button class="but" onclick=window.location.href="home.html">Back</button>
</div>
</div>




</body>
</html>
