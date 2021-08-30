<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "mybaza";
  
  $mysql = new mysqli($servername, $username, $password, $dbname);
  if (!$mysql) {
      die("Connection failed: " . $mysql->connect_error);
  }
?>