<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "edtech_db";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Database Connection Failed");
}

?>