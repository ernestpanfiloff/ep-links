<?php

// Database details
$servername = "159.65.26.109";
$username = "tpckdrwwjd";
$password = "W8RPDVrnrm";
$dbname = "tpckdrwwjd";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

?>