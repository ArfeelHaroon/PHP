<?php 
   $con = mysqli_connect('localhost','root','','curd');
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>