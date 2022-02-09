<?php
  try {
    $host = "localhost";   
    $dbname = "tetprj"; 
    $username = "admin";    
    $password = "password";        
    $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
  } catch (PDOException $e) {
    die("Lỗi : " . $e->echo("Có lỗi") ) ;  
  }
?>