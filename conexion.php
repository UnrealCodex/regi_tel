<?php
/////////////////////////
$database   =  "fovileon_teldb";
$username   =  "fovileon_teladm";
$password   =  "789poiQWE,.-";
/////////////////////////

$link  = mysqli_connect('localhost', $username, $password,$database);
//$db    = mysqli_select_db($link);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
