<?php


require "SingletonDB.php";

// $username = 'stasa';
// $password = 'stasa123';

$instanca1 = SingletonDB::getInstance();
// $korisnik1 = $instanca1->korisnik();

// print_r($korisnik1);

// $isntanca2 = SingletonLogin::getInstance($username, $password);
// $korisnik2 = $instanca2->korisnik();

// print_r($korisnik2);

// if ($instanca1 === $isntanca2) {
//     echo "U pitanju je ista instanca";
// } else {
//     echo "Kreirano je vise instanci";
// }

// if ($instanca1 === $isntanca2) {
//     echo "U pitanju je isti korisnik";
// } else {
//     echo "Kreirano je dva korisnika";
// }