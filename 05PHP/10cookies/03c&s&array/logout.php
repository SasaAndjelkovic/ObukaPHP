<?php

session_destroy();

setcookie('user', $_COOKIE['user'], time() - 1);

echo "Uspesno ste se odjavili!
     Kliknite <a href='index.php'> ovde </a> da biste ponovo logovali";
