<?php
include "controler/controler.php";
include "loaddata.php";


if (!isset($_SESSION["logovani_korisnik"])) {
    header("Location: view/login.php");
} else {
    $korisnik = $_SESSION["logovani_korisnik"];
    $korisnik = Kontroler::getAdministrator($_SESSION["logovani_korisnik"]);

    include "view/header.php";
    if ($korisnik->getTip() == "student") {
        include "view/student.php";
        exit();
    } else if ($korisnik->getTip() == "profesor") {
        include "view/profesor.php";
        exit();
    } else if ($korisnik->getTip() == "administrator") {
        include "view/administrator.php";
        exit();
    } else {
        print_r($korisnik);
        exit();
    }
}
