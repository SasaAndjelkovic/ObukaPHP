<?php

if (!isset($_SESSION)) {
    session_start();
}

require "model/user.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $uname = $_POST['username'];
    $upass = $_POST['password'];

    if (login($uname, $upass)) {
        $_SESSION['username'] = $uname;
        // header("Location: home.php");
        include "home.php";
        exit();
    }
}

// $dodaj = $_POST['dodajTim'];
// if (isset($dodaj)) {
//     $dodaj[] = array(
//         $dodaj["nazivTima"],
//         $dodaj["drzava"],
//         $dodaj["godinaOsnivanja"],
//         $dodaj["brojTitula"]
//     );
// }

// $dodaj = $_POST['dodajTim'];
// if (isset($dodaj)) {
//     $dodaj[] = array(
//         "nazivTima" =>
//         $dodaj["nazivTima"],
//         "drzava" =>
//         $dodaj["drzava"],
//         "godinaOsnivanja" =>
//         $dodaj["godinaOsnivanja"],
//         $dodaj["brojTitula"]
//     );
// }



if (isset($_GET['addTeam'])) {
    include "addTeam.php";
    exit();
}

if (isset($_SESSION['username'])) {
    include "home.php";
    exit();
}

include "login.php";

function login($username, $password)
{
    global $korisnici;
    foreach ($korisnici as $ue) {
        if ($ue['username'] == $username && $ue['password'] == $password) {
            return true;
        }
        return false;
    }
}

function findMaxId()
{
    $idjevi = [];
    foreach ($_SESSION['timovi'] as $tim) {
        $idjevi[] = $tim['timID'];
    }
    return max($idjevi);
}
