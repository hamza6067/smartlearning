<?php
ini_set('display_errors', 1);
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'admin');
//$con = mysqli_connect('localhost', 'root', '', 'mydb') or die('Database connection could not be estabilished!');
?>