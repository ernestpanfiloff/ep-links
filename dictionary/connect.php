<?php

$con = new mysqli("159.65.26.109", "tpckdrwwjd", "W8RPDVrnrm", "tpckdrwwjd");

if (!$con) {
    echo "Connected";
} else {
    die("Connection failed: " . mysqli_error($con));
}

?>