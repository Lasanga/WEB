<?php

function protected_page()

{
	include 'log.php';
$link=mysqli_connect('localhost','root','','suser');

$user = $_post['us'];
$user - md5($_post['ps']);

$sql=mysqli_query($link,"select * from sign where username='$user' and password='$pass'");
$row = mysqli_fetch_array($sql);
if (isset($_SESSION['user_id']))
{
	header('location:allocation.php');

}else
	{
echo "you should be logged in";
	}
}


function protect()
{
include 'core/functions/functions.php';
	if(logg() === false)
	{
		header('locaion:protected.php');
	}
}
?>
