<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "pozoriste";

$conn = new mysqli($host, $username, $password, $db);
if ($conn->connect_errno)
    exit("Konekcija neuspešna: " . $conn->connect_errno);