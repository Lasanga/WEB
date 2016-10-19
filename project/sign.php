<?php

$link=mysqli_connect('localhost','root','','suser');


$user = $_POST['us'];
$yer   = $_POST['yr'];
$email= $_POST['em'];
$pass = md5($_POST['rps']);

$sql="insert into sign(username,year,email,password)values('$user','$yer','$email','$pass')";

$rel=mysqli_query($link,$sql);

?>
<!doctype html>
<html>
<head>
<title>LMS-Learning Management System</title> 
<meta charset="UTF-8">
<link rel="icon" href="main.ico" type="type/x-icon">
</head>
<body>

<h1>You are signed in</h1>

</body>
</html>
