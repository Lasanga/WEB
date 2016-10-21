<?php

$link = mysqli_connect('localhost','root','','suggestions');

$name = $_POST['name'];
$suggest = $_POST['suggest'];

$sql = "insert into suggests (name,suggests) values('$name','$suggest')";

$rel =mysqli_query($link,$sql);

if($rel == 1)
{
  echo "<h1>Your suggestion is added to our database thank you for suggesting. </h1>";
}
else {
  echo "<h1>Sorry! There was an error.</h1>";
}


 ?>
