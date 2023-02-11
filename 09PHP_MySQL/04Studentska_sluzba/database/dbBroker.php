<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "fakultet";

$conn = new mysqli($host, $username, $password, $db);
if ($conn->connect_errno)
    exit("Konekcija neuspešna: " . $conn->connect_errno);

    /*
        1.krećemo od login stranice
        2.proveravamo da li su input polja popunjena
        3.ako jesu pozivamo statičku metodu iz Kontrolera koja se zove login
        4.login metoda prima email i sifru
        5.napisati proveru za logovanje administratora (kasnije ćemo raditi za studenta i profesora)
        6.kada se vrate podaci sačuvati objekat preko fetch_object() u odgovarajući session (logovani_korisnik)
        7. prebaciti ga na index stranicu
        */