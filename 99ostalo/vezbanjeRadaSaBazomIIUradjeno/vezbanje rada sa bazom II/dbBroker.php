<?php

$host = 'localhost';
$username = "root";
$password = "";
$db = "coursex";

$conn = new mysqli($host, $username, $password, $db);

if ($conn->connect_errno) {
    echo "Connect failed: $conn->connect_errno";
    // exit();
    // exit("Connect failed: $conn->connect_errno");
}
