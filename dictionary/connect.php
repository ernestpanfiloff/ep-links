<?php

$con = new mysqli("localhost", "tpckdrwwjd", "W8RPDVrnrm", "tpckdrwwjd");

if (!$con) {
    echo "Connected";
} else {
    die("Connection failed: " . mysqli_error($con));
}

?>