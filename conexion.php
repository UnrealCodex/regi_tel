<?php
/////////////////////////
$database   =  "abecode_teldb";
$username   =  "abecode_fovi";
$password   =  "789poiQWE";
/////////////////////////

$link  = mysqli_connect('mysql3001.mochahost.com', $username, $password,$database);
//$db    = mysqli_select_db($link);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
