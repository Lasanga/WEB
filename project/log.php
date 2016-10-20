<?php
include 'core/functions/functions.php';
$link=mysqli_connect('localhost','root','','suser');


global $user;
$user = $_POST['un'];
$pass = $_POST['pw'];
$pass =md5($pass);


login($user,$pass);




?>
