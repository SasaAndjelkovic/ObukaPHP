<?php

function prebroj($niz)
{
    $brojac = 0;
    foreach ($niz as $element) {
        $brojac++;
    }
    return $brojac;
};

$niz_brojeva = [1, 2, 3, 4, 5];
echo "<br>"; // ako ne stavim ovu liniju, tada je sve ovo: <pre>5</pre>
echo prebroj($niz_brojeva) . "<br>";

function is_empty($niz)
{
    if (prebroj($niz) == 0) {
        echo "Niz je prazan <br>";
    } else {
        echo "Niz nije prazan <br>";
    }
};

is_empty($niz_brojeva);


function pozdrav($poz = "Zdravo")
{
    echo "poz <br>";
}

pozdrav();
pozdrav("Hello");

//primer default (optional) i obavezni (mandatory)
function pozdrav1($ime, $poz = "Zdravo")
{
    echo "$poz $ime <br>";
};

pozdrav1("Tamara", "Hello");
pozdrav1("Tamara");

//primer imenovanih parametara
function pozdrav2($ime, $poz = "Zdravo", $por = "Danas je lep dan")
{

    echo "$poz $ime <br>";
    echo $por;
};

pozdrav2(ime: "Tamara", por: "Danas je suncan dan! <br>", poz: "Hello");

// nepoznat broj parametara
// otpakivanje nizova

function suma(...$brojevi)
{
    $ukupno = 0;
    foreach ($brojevi as $br) {
        $ukupno += $br;
    }
    return $ukupno;
}

echo suma(1, 2, 3, 4, 5, 6) . "<br>";

function ispis_osobe($ime, $prezime, $adresa)
{
    echo "$ime $prezime zivi na adresi $adresa <br>";
}

ispis_osobe("Tamara", "Naumovic", "Jove Ilica 154");

$osoba = ["Tamara", "Naumovic", "Jove Ilica 154"];

ispis_osobe(...$osoba);
