<?php

include 'core/functions/functions.php';

$link=mysqli_connect('localhost','root','','suser');
function show()
{

  $link=mysqli_connect('localhost','root','','hall');


  $username = $_POST['name'];
  $time     = $_POST['check'];
  $hall     = $_POST['hall'];

  $rel=mysqli_query($link,"select (user,time,hall) from allocations");
  $row = mysqli_fetch_array($row);



  while($row=mysqli_fetch_array($row))
  {
    echo '<tr>';
    echo '<td>'.$row[0].'</td>';
    echo '<td>'.$row[1].'</td>';
    echo '<td>'.$row[2].'</td>';
    echo '</tr>';
  }
  echo '</table>';



  }


?>
