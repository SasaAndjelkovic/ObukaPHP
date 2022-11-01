<?php

echo "Ulazak u validaciju";
if (isset($_POST['submit'])) {
    $user = [
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'name' => $_POST['name']
    ];
}

if (isset($_POST['remember'])) {
    $userSerijalizovan = serialize($user);
    setcookie('user', $userSerijalizovan, time() + 3600);
    $userDeserijalizacija = unserialize($_COOKIE['user']);
}

if (!isset($_SESSION)) {
    session_start();
};
$_SESSION['email'] = $userDeserijalizacija['email'];
$_SESSION['name'] = $userDeserijalizacija['name'];

header("Location: home.php");
