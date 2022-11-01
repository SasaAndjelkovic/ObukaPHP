<?php

//ne treba mi ponovo session_start(), niti if (!isset($_SESSION)) {
//  session_start();
// };

echo "Dobrodosao, " . $_SESSION['ime'] . " sa mail-om: " . $_SESSION['email'] . "<br>";

echo "<a href='logout.php'> Log out </a>";

if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
    $emailCookie = $_COOKIE['email'];
    $passwordCookie = $_COOKIE['password'];
    $nameCookie = $_COOKIE['ime'];

    echo "<script>
        alert('$emailCookie');
        alert('$nameCookie');
        </script>
    ";
}
