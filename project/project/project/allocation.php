<!doctype html>
<html>
<?php
include 'core/functions/functions.php';

access();

?>

<head>
<meta charset="UTF-8">
<meta name="description" content="learning management system">
<meta name="keywords" content="html,css,javascript,php">
<meta name="author" content="lasanga sandaruwan">

<link rel="icon" href="main.ico" type="image/x-icon">
<link href="css/allocate.css" rel="stylesheet" type="text/css">

<title>LMS-Cyntec</title>

</head>


 <body>
<h1 style="font-family:Rockwell"> Fill the below form and allocate your hall </h1>
 <div>
   <form action ="all.php" method = "post" id="form">
<table  id="table">

<tr>
<td>User-name:</td>
<td><input type ="text" name="name"></td>
</tr>
<tr>
  <td colspan="2">Time:-</td>
</tr>
<tr>
<td>9.00am - 12.00pm</td>
<td><input type="radio" value="9.00am - 12.00pm" name="check"></td>
</tr>
<tr>
<td>12.00am - 4.00pm</td>
<td><input type="radio" value="12.00am - 4.00pm" name="check"></td>
</tr>
<tr>
<td>9.00am - 4.00pm</td>
<td><input type="radio" value="9.00am - 4.00pm" name="check"></td>
</tr>
<tr>
  <td colspan="2">Hall-No:-</td>
</tr>
<tr>
<td>Hall 01:</td>
<td><input type="radio" value="Hall 01" name="hall"</td>
</tr>
<tr>
<td>hall 02:</td>
<td> <input type="radio" value="hall 02" name="hall"></td>
</tr>
<tr>
<td>hall 03:</td>
<td><input type="radio" value="hall 03" name="hall"></td>
</tr>
<tr>
<td>hall 04:</td>
<td><input type="radio" value="hall 04" name="hall"></td>
</tr>
<tr>
  <td colsapn="2"><input type="submit" name="all" value="allocate">
</td>
</tr>
</table>

</form>
<br>
<form action="show.php" method="post" id="show">

<input type="submit" name="show" value="show allocations">
</form>





 </body>
 </html>
