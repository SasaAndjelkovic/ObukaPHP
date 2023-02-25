<?php

$host = "localhost:3306";
$db = "dbmuzika";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $db);

if($conn->connect_errno){
    exit("Konekcija neuspesna: " . $conn->connect_errno);
}