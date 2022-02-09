<?php
$host ="localhost";
$uname = "admin";
$pwd = "password";
$db_name = "tetprj";
$conn = mysqli_connect($host, $uname, $pwd, $db_name);
mysqli_set_charset($conn, 'UTF8');
