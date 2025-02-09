<?php

$servername = "mysql-8.0";
$username = "root";
$password = "";
$dbname = "users";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}
