<?php

$server = "remotemysql.com:3306";
$user = "Rlwl3Ztalw";
$pass = "FSCTZI2dWA";
$database = "Rlwl3Ztalw";

$connect = mysqli_connect($server, $user, $pass, $database) or die('Unable to connect');
$db = mysqli_connect($server, $user, $pass) or die('Unable to connect');
?>