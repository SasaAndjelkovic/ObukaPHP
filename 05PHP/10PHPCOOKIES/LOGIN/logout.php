<?php

session_destroy();

//Brisanje kolacica
if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
     $emailCookie = $_COOKIE['email'];
     $passwordCookie = $_COOKIE['password'];

     setcookie('email', $emailCookie, time() - 1);
     setcookie('password', $passwordCookie, time() - 60);
}

echo "Uspesno ste se odjavili!
     Kliknite <a href='login.php'> ovde </a> da biste ponovo logovali";
