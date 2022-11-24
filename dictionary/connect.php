<?php

// Database details
$servername = "localhost";
$username = "tpckdrwwjd";
$password = "W8RPDVrnrm";

// Create connection
$con = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

?>