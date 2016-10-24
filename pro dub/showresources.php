<?php

include 'core/functions/functions.php';

$link = mysqli_connect('localhost','root','','suser');

$sql =mysqli_query($link,"SELECT name,type,size FROM files");

echo "<table border='1' style ='width:30%'>";
echo "<th>Name</th>";
echo "<th>type</th>";
echo "<th>size</th>";

while($rel = mysqli_fetch_array($sql))
{
echo "<tr>";
echo "<td>{$rel[0]}</td>";
echo "<td>{$rel[1]}</td>";
echo "<td>{$rel[2]}</td>";
echo "</tr>";

}
echo "</table>"


 ?>
 <from action ="openresources.php" method = "POST">

   open the needed file:<br><br>
<input type = ""
