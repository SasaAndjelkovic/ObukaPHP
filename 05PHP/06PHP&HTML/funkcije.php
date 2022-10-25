<?php

include "podaci.php";

function vratiPDV($cena)
{
    $pdv = $cena * 0.2;
    return $pdv;
}

function vratiRabat($kolicina)
{
    $rabat = 0;
    // if ($kolicina < 40) {
    //        $rabat = 2;
    // } else if ($kolicina < 50) {
    //      $rabat = 3;
    //     // } else {
    //     //     $rabat = 5;
    //     // }
    //     // return $rabat;

    //     // if ($kolicina < 40) {
    //     //     return 2;
    //     // } 
    //     // if ($kolicina < 50) {
    //     //     return 3;
    //     // } 
    //     //     return 5;

    if ($kolicina < 40) return 2;
    if ($kolicina < 50) return 3;
    return 5;
}

function vratiIznos($cena, $kolicina)
{
    $iznosPDV = vratiPDV($cena);
    $cenaSaPDV = $cena + $iznosPDV;
    $iznos = $cenaSaPDV * $kolicina;
    $iznosRabata = $iznos * vratiRabat($kolicina) / 100;
    return $iznos - $iznosRabata;
}

function vratiUkupno()
{
    global $proizvodi;
    $suma = 0; //neutralna vrednost
    foreach ($proizvodi as $pr) {
        $suma += vratiIznos($pr["cena"], $pr["kolicina"]);
    }
    return $suma;
}
