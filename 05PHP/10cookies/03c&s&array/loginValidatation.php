<?php

// echo "Ulazak u validaciju <br>";
if (isset($_POST['submit'])) {
    $user = [
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'name' => $_POST['name']
    ];
    // echo  "Ispisi niz: ";
    // print_r($user);
    // echo "<br>";
    // echo "Ispisi nizov treci clan: " . $user['name'] . "<br>";
}

if (isset($_POST['remember'])) {
    $userS = serialize($user);
    setcookie('userkuki', $userS, time() + 3600);
}

if (!isset($_SESSION)) {
    session_start();
};
$_SESSION['name'] = $user['name'];

header("Location: welcome.php");

// RADI, ALI IZ NEKOG RAZLOGA SAMO POD ODREDJENIM USLOVIMA, HIHI
// if (isset($_POST['remember'])) {
//     global $user;
//     echo "Remember me <br>";
//     $userSerijalizovan = serialize($user);
//     echo "Serijalizovan niz: ";
//     print_r($userSerijalizovan);
//     echo "<br><br>";
//     setcookie('userkuki', $userSerijalizovan, time() + 3600);
//     echo "Nizov kuki: " . $_COOKIE['userkuki'] . "<br><br>";
//     $userDeserijalizacija = unserialize($_COOKIE['userkuki']);
//     echo "Deserijalizovan kuki: ";
//     print_r($userDeserijalizacija);
//     echo "<br>";
// }

// if (!isset($_SESSION)) {
//     session_start();
// };
// echo $userDeserijalizacija['email'] . "<br>";
// $_SESSION['email'] = $userDeserijalizacija['email'];
// echo $_SESSION['email'] . "<br>";
// $_SESSION['name'] = $userDeserijalizacija['name'];

//header("Location: home.php");
