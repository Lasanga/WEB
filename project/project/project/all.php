<?php

$link=mysqli_connect('localhost','root','','hall');


$username = $_POST['name'];
$time     = $_POST['check'];
$hall     = $_POST['hall'];

$sql = "insert into allocation(user,time,hall)values('$username','$time','$hall')";
$rel = mysqli_query($link,$sql);
if($rel == 1)
{
	echo "<h1>Your Hall is allocated for the time given. Thank you!</h1><a href = home2.php>go back to home</a>";
}
else {
	echo "couldnt allocate the hall needed";
}



 ?>
