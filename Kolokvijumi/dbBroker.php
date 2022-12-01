<?php
    // povezivanje sa bazom
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "kolokvijumi";

    $conn = new mysqli($host, $user, $pass, $database);
    print_r($conn);

    //provera da li je to uspesno
    if($conn->connect_errno) {
        echo ("Neuspesna konekcija: $conn->connect_errno, poruka: $conn->connect_error");
        exit();
    }