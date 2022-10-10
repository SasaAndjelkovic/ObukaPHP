<?php
$malaSlova = "Ova recenica je napisana malim slovima.";
echo $malaSlova . "<br>";
echo "$malaSlova <br>";
echo '$malaSlova <br>';
$velikaSlova = strtoupper($malaSlova);
echo "$velikaSlova <br>";
// strtolower

$bend = "the beatles";
echo ucfirst($bend) . "<br>";
echo ucwords($bend) . "<br>";

//strlen
$recenica = "Reprezentacija na Srbije ide na evropsko prvenstvu u fudbalu!";
$brojKaraktera = strlen($recenica);
echo "Recenica: '$recenica '  ima: $brojKaraktera karaktera<br>";  //broji prazan

//strpos
echo "Pozicija: " . strpos($recenica, "Srbije") . "<br>";
echo "Pozicija: " . strpos($recenica, "na", 18) . "<br>";

//str_replace
$pocetna = "on i samo on.";
$nakonIzmene = str_replace("on", "ona", $pocetna, $brojZamena);
echo "Nakon izmene: '$nakonIzmene' broj zamena: $brojZamena <br>";

//substr
$recenica4 = "Testiranje funkcije substr() u php-u.";
echo substr($recenica4, 4) . "<br>";
echo substr($recenica4, -4) . "<br>";
echo substr($recenica4, 4, 15) . "<br>";
echo substr($recenica4, 4, -5) . "<br>";

//str_starts_with
echo str_starts_with($recenica, "Repr") . "<br>";
echo str_ends_with($recenica, "!") . "<br>";
