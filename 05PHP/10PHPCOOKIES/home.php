<?php

//superglobalna promenljiva COOKIE

if (isset($_COOKIE['username'])) {
    echo "Logovan je korisnik sa username-om: " . $_COOKIE['username'] . "<br>";
} else {
    echo "Nema kolacica. <br>";
}
//Moguce samostalno postavljanje kolacica
setcookie('korisnik', 'Dragana', time() + 60 * 60 * 24);
//brisanje kolacica
// setcookie('korisnik', 'Dragana', time() - 60 * 60 * 24);

if (count($_COOKIE) > 0) {
    echo "Trenutno postoji: " . count($_COOKIE) . " sacuvanih kolacica. <br>";
} else {
    echo "Nema sacuvanih kolacica.";
}

$user = [
    "ime" => "Sreten",
    "email" => "sreten@gmail.com",
    "godine" => 23
];

//ne moze niz kao parametara
//setcookie('user', $user, time() + 3600);
//Serijalizacija
$userSerijalizovan = serialize($user);
setcookie("user", $userSerijalizovan, time() + 3600);

$userCookie = $_COOKIE['user'];
echo "<br>" . $userCookie;

//Deserijalizacija
$userDeserijalizacija = unserialize($_COOKIE['user']);
echo "<br>Deserijalizovani podaci: " . $userDeserijalizacija['ime'] . "<br>";

print_r($userDeserijalizacija);
