<?php

include 'core/basic.php';

///////////////////////////////////////////////////////////////////////

function logg()
{
	return(isset($_SESSION['user_id'])) ? true: false;
}



function check()
{
if (isset($_SESSION['user_id']))
	{
	echo "You are logged in";
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
	$_SESSION['user_id'] = $row['s_id'];
	echo ($_SESSION['user_id']);

	header ('location:home2.php');
}
else
{
	echo ("Incorrect password <a href=home.php".">Try again </a>");
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
header('location: home.php');
		}
	}

}


function changepw()

{
	$pass = $_POST['pass'];
	$npass = $_POST['rnpass'];


		$link=mysqli_connect('localhost','root','','suser');
		$pw = mysqli_query($link,"update sign set password = '$npass' where password ='$pass' ");


}






?>
