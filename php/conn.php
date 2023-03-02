<?php
$hostname = "localhost";
$userdb = "root";
$pwd = "root";
$database = "portfolio_victor";
$conn = mysqli_connect($hostname, $userdb, $pwd, $database);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}