<?php

session_destroy();

setcookie('userkuki', $_COOKIE['userkuki'], time() - 3600);

echo "Uspesno ste se odjavili!
     Kliknite <a href='index.php'> ovde </a> da biste ponovo logovali";
