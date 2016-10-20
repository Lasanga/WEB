<?php

include 'core/basic.php';

///////////////////////////////////////////////////////////////////////
function protected_page()

{
	$link=mysqli_connect('localhost','root','','suser');


$user = $_post['us'];

$sql=mysqli_query($link,"select * from sign where username='$user' and password='$pass'");
	$row = mysqli_fetch_array($sql);
if (isset($_SESSION['user_id']))
	{
	header ('location:signform.php');

	}
	else
	{
	header ('location:home.php');
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
	echo "login successful";
	$session_id = $row['s_id'];
	$_SESSION['user_id'] = $row['s_id'];
	echo ($_SESSION['user_id']);


}
else
{
	echo ("Incorrect password <a href=home.html".">Try again </a>");
}
}

function display()
{
	$link=mysqli_connect('localhost','root','','suser');


$user = $_POST['un'];
$pass = $_POST['pw'];
$pass =md5($pass);

    $sql=mysqli_query($link,"select * from sign where username='$user' and password='$pass'");
		$row = mysqli_fetch_array($sql);



if(empty($_SESSION['user_id']) === true)
{
	echo form;
}else
{
	echo username;
}
}


function admin()
{
$user = $_POST['un'];
$pass = $_POST['pw'];
$pass =md5($pass);

	$link=mysqli_connect('localhost','root','','suser');
	$admin = mysqli_query($link,"select admin from sign where username='$user' ");
	$ad = mysqli_fetch_array($admin);


	if($ad['admin'] == 1)
	{
		header('location: adminpage.php');

	}
	else {
		{
header('location: home.html');
		}
	}



}
