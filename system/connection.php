<?php
session_start();
$con=mysqli_connect('localhost','root','','agriculture');

if(!$con){
  die(mysqli_error($con));
}
?>
