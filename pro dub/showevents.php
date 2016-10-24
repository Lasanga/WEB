<?php

$link = mysqli_connect('localhost','root','','suser');

$eventname = $_POST['eventname'];
$eventdate = $_POST['eventdate'];
$eventtime = $_POST['eventtime'];
$eventvenue= $_POST['eventvenue'];
$eventinfo = $_POST['info'];

$sql = mysqli_query($link,"INSERT INTO events(event_name,event_date,event_time,event_venue,event_info) VALUES ('$eventname','$eventdate','$eventtime','$eventvenue','$eventinfo')");
if ($sql == 1) {
  echo "<h3>Successfully posted</h3>";
}
else {
  echo "<h3>Sorry!couldnt Post</h3>";
}

 ?>
<?php
$link = mysqli_connect('localhost','root','','suser');

$sql = mysqli_query($link,"SELECT * FROM events");

echo "<table border='1' style ='width:30%'>";
echo "<th>Event name</th>";
echo "<th>Event date</th>";
echo "<th>Event time</th>";
echo "<th>Event venue</th>";
echo "<th>Event information</th>";

while($res = mysqli_fetch_array($sql))
{
echo "<tr>";
echo "<td>{$res[0]}</td>";
echo "<td>{$res[1]}</td>";
echo "<td>{$res[2]}</td>";
echo "<td>{$res[3]}</td>";
echo "<td>{$res[4]}</td>";
echo "</tr>";

}
echo "</table>"



 ?>


<a href = "home2.php">go to home</a>
