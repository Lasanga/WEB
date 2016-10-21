<?php

$link = mysqli_connect('localhost','root','','suggestions');

$name = $_POST['name'];
$suggest = $_POST['suggest'];

$sql = "insert into suggests (name,suggests) values('$name','$suggest')";

$rel =mysqli_query($link,$sql);

if($rel == 1)
{
  echo "done";
}
else {
  echo "not done";
}


 ?>
