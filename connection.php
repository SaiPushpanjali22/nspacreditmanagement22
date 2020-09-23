<?php
$server_name='localhost';
$user_name='root';
$pwd='';
$db='db1';
$conn=mysqli_connect($server_name,$user_name,$pwd,$db);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>