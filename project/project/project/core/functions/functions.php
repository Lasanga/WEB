<?php

include 'core/basic.php';

///////////////////////////////////////////////////////////////////////



function access()
{
	if (isset($_SESSION['user_id']) == false)

		{
	  header('Location:error.php');
		exit();
		}
}



function check()
{

if (isset($_SESSION['user_id']))
	{
	echo $_SESSION['user_id']." is active now ";
	}
	else
	{
echo "you are not logged in";
	}
}




function login($user,$pass)
{
	$link=mysqli_connect('localhost','root','','suser');


$user = $_POST['un'];
$pass = $_POST['pw'];
$pass =md5($pass);

    $sql=mysqli_query($link,"select * from sign where username='$user' and password='$pass'");
	  $row = mysqli_fetch_array($sql);

if($row['username'] == $user && $row['password'] == $pass )

{
	$session_id = $row['s_id'];
	$_SESSION['user_id'] = $row['username'];
	echo ($_SESSION['user_id']);

	header ('location:home2.php');
}
else
{
	echo ("Incorrect password <a href=home.php".">Try again </a>");
}
}

function basicadmin()
{
	$link=mysqli_connect('localhost','root','','suser');

$sql=mysqli_query($link,"select admin from sign where username ='{$_SESSION['user_id']}'");
$row =mysqli_fetch_array($sql);

if( $row['admin'] == 0|| $row['admin'] == 2)
{
	header('Location:adminerror.php');
}


}

function teacher()
{
	$link=mysqli_connect('localhost','root','','suser');

$sql=mysqli_query($link,"select admin from sign where username ='{$_SESSION['user_id']}'");
$row =mysqli_fetch_array($sql);

if($row['admin'] == 2 )
{

}
else
{
	if($row['admin'] == 1)
	{

	}
	else
	 {
		header('Location:adminerror.php');
	}
}


}
function changepw()
{
$link = mysqli_connect('localhost','root','','suser');

$username    =$_POST['username'];
$password    = md5($_POST['pass']);
$newpassword = md5($_POST['rnpass']);

$sql = mysqli_query($link,"UPDATE sign SET password ='$newpassword' WHERE password = '$password' AND username = '$username'");

if($sql === 1)
{
  echo "<h1>The password has been changed</h1>";
	echo "<a href = adminpage.php>Go back</a>";
}
else {
  echo "<h1>Sorry! Couldn not change the password.</h1>";
	echo "<a href = adminpage.php>Go back</a>";
}
}

function allocation()
{
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

}

function upload()
{
	$path = 'uploaded/';

	$uploadfile = $path.basename($_FILES['upload']['name']);
	$type       = $path.basename($_FILES['upload']['type']);
	$size       = $path.basename($_FILES['upload']['type']);

	if($size > 500000)
	{
	  echo "file is too large";
	}

	else {
	  move_uploaded_file($_FILES['upload']['tmp_name'],$uploadfile);
	  echo "<h1> Files are uploaded without any issues</h1>";
		exit();
	}
}

?>
