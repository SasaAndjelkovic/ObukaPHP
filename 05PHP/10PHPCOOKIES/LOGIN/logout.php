<?php

session_destroy();

//Brisanje kolacica
if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
     $emailCookie = $_COOKIE['email'];
     $passwordCookie = $_COOKIE['password'];
     $nameCookie = $_COOKIE['ime'];

     setcookie('email', $emailCookie, time() - 1);
     setcookie('password', $passwordCookie, time() - 60);
     setcookie('ime', $nameCookie, time() - 120);
}

echo "Uspesno ste se odjavili!
     Kliknite <a href='login.php'> ovde </a> da biste ponovo logovali";
