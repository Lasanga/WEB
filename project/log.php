<?php

$link=mysqli_connect('localhost','root','','suser');

$user = $_POST['un'];
$pass = $_POST['pw'];






$sql=mysqli_query($link,"select * from sign where username='$user' and password='$pass");
echo "$sql";
die();
$row = mysqli_fetch_array($sql);

if($row['username'] == $user && ['password'] == $pass )
{
	echo "login successful";
}
else{
	echo "login failed";
}





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