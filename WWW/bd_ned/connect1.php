<?php
$host = 'localhost';
$database = 'a0611470_auto';
$user = 'a0611470_root';
$password = 'root';
//require_once 'connect.php';
$link = mysqli_connect($host, $user, $password, $database)
or die("ошибка" . mysqli_error($link));
?>
