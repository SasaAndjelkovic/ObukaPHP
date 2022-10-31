<?php

$adminEmail = "admin@admin.com";
$adminPass = "admin";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == $adminEmail && $password == $adminPass) {
        if (isset($_POST['remember'])) {
            setcookie('email', $email, time() + 60 * 60 * 10);
            setcookie('password', $password, time() + 60 * 60);
        }
        session_start();
        $_SESSION['email'] = $email;
        header("Location: home.php");
    }
} else {
    //Ako se nije logovao, nego direktno usao na ovu stranu, vracamo ga na login
    echo "Email ili sifra nisu dobro uneti <br>
    Kliknite <a href='login.php'> ovde </a>";

    //header("Location: login.php");
}
