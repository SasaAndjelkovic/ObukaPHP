<?php
    session_start();
    require 'model/user.php';
    require 'model/tim.php';

    //ADD
    if(isset($_POST['dodajTim'])) {
        $noviTim = array(
                "timID" => findMaxId() + 1,
                "nazivTima" => $_POST['nazivTima'],
                "drzava" => $_POST['drzava'],
                "godinaOsnivanja" => $_POST['godinaOsnivanja'],
                "brojTitula" => $_POST['brojTitula'],
        );
        $_SESSION['timovi'][] = $noviTim;
        unset($_SESSION['timovi-search']); //ovo dodaj tek kad odradis SEARCH
        header("Location: .");
        exit();
    }
    //move to addTeam.php
    if(isset($_GET['addTeam'])) {
        include 'addTeam.php';
        exit();
    }

    //DELETE
    if(isset($_GET['timID-izbrisi']) && is_numeric($_GET['timID-izbrisi'])) {
        for($i = 0; $i < count($_SESSION['timovi']); $i++) {
            if($_GET['timID-izbrisi'] == $_SESSION['timovi'][$i]['timID']) {
                array_splice($_SESSION['timovi'], $i, 1);
                unset($_SESSION['timovi-search']); //ovo dodaj tek kad odradis SEARCH
                header("Location: .");
                exit();
            }
        }
    }

    //UPDATE
    if (isset($_POST['azurirajTim'])) {
        for ($i = 0; $i < count($_SESSION['timovi']); $i++) {
            if ($_SESSION['timovi'][$i]['timID'] == $_GET['timID-izmeni']) {
                $_SESSION['timovi'][$i]['nazivTima'] = $_POST['nazivTima'];
                $_SESSION['timovi'][$i]['drzava'] = $_POST['drzava'];
                $_SESSION['timovi'][$i]['godinaOsnivanja'] = $_POST['godinaOsnivanja'];
                $_SESSION['timovi'][$i]['brojTitula'] = $_POST['brojTitula'];
                break;
            }
        }
        header("Location: .");
        // include "home.php";
        exit();
    }
    //move to updateTeam.php
    if (isset($_GET['timID-izmeni']) && is_numeric($_GET['timID-izmeni'])) {
        include "updateTeam.php";
        exit();
    }

    //SORT
    if (isset($_GET['sortiraj'])) {
        // usort($_SESSION['timovi'], function ($a, $b) {
        //     return strcmp(strtolower($a['nazivTima']), strtolower($b['nazivTima']));
        // });
        usort($_SESSION['timovi'], 'sortiraj');
        // sort($_SESSION['timovi']);
        header("Location: .");
        exit();
    } 

    //SEARCH
    if (isset($_GET['unos'])) {
        if ($_GET['unos'] == "")
            unset($_SESSION['timovi-search']);
        else {
            $_SESSION['timovi-search'] = [];
            foreach ($_SESSION['timovi'] as $tim) {
                if (
                    str_contains(strtolower($tim['nazivTima']), strtolower($_GET['unos'])) ||
                    str_contains(strtolower($tim['drzava']), strtolower($_GET['unos'])) ||
                    str_contains(strtolower($tim['godinaOsnivanja']), strtolower($_GET['unos'])) ||
                    str_contains(strtolower($tim['brojTitula']), strtolower($_GET['unos']))
                    )   
                    {
                    $_SESSION['timovi-search'][] = $tim;
                    }
            }
        }
        header("Location: .");
        exit();
    }

    //LOGIN
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        foreach ($korisnici as $k) {
            if($k['username'] == $username && $k['password'] == $password) {
                $_SESSION['username'] = $username;
                // header("Location: home.php");
                include 'home.php';
                exit();
            }
        }

        // if(login($username, $password)) {
        //     $_SESSION['username'] = $username;
        //     header("Location: home.php");
        //     exit();
        // }
    }

    if(isset($_SESSION['username'])) {
        include 'home.php';
        exit();
    }

    include 'login.php';

    //FUNCTIONS
    //for login
    function login($username, $password) {
        global $korisnici;
        foreach($korisnici as $k) {
            if($k['username'] == $username && $k['password'] == $password) {
                return true;
            }
        }
        return false;
    }

    //for add 
    function findMaxId() {
        // $idjevi = [];
        // foreach($_SESSION['timovi'] as $tim) {
        //     $idjevi[] = $tim['timID'];
        // }
        // return max($idjevi);
        $max = 0;
        foreach($_SESSION['timovi'] as $tim) {
            if($tim['timID'] > $max) {
                $max = $tim['timID'];
            }
        }
        return $max;
    }

    //for sort
    function sortiraj($a, $b) {
        return strcmp(strtolower($a['nazivTima']), strtolower($b['nazivTima']));
    }
?>