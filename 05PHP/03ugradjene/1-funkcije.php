<?php
function nazivFunckije($prviParametar, $drugiParametar)
{
    // telo funkcije
};

$ime = "Aleksa";
$Ime = "Ruzica";

echo $ime . " " . $Ime;
echo "<br>";

//funkcije
function ispis()
{
    echo "Funkcija za ispis! <br>";
}  //iza bloka {} nema ; funktion, if, foreach

ispis();
Ispis();
ISPIS();

function sabiranje()
{
    return 2 + 3;
}

echo sabiranje();
echo "<br>";

function sabiranje2BrojaKrozParametre($a, $b)
{
    return $a + $b;
}

echo sabiranje2BrojaKrozParametre(3, 4);
echo "<br>";
echo sabiranje2BrojaKrozParametre(7, 8);
echo "<br>";
echo sabiranje2BrojaKrozParametre(8, 9);
echo "<br>";

function sabiranje2BrojaKrozParametreSaPredefinisanimVrednostima($a = 10, $b = 5)
{
    return $a + $b;
}

echo sabiranje2BrojaKrozParametreSaPredefinisanimVrednostima();
echo "<br>";
echo sabiranje2BrojaKrozParametreSaPredefinisanimVrednostima(1);
echo "<br>";
echo sabiranje2BrojaKrozParametreSaPredefinisanimVrednostima(1, 2);
echo "<br>";
echo sabiranje2BrojaKrozParametreSaPredefinisanimVrednostima(1, 2);
echo "<br>";

function sabiranje3BrojaKrozParametreSaIBezPredefinisanimVrednostima($a, $b = 5, $c = 3)
{
    return $a + $b + $c;
}

echo sabiranje3BrojaKrozParametreSaIBezPredefinisanimVrednostima(1);
echo "<br>";
echo sabiranje3BrojaKrozParametreSaIBezPredefinisanimVrednostima(1, 2);
echo "<br>";
echo sabiranje3BrojaKrozParametreSaIBezPredefinisanimVrednostima(1, 2, 3);
echo "<br>";
echo sabiranje3BrojaKrozParametreSaIBezPredefinisanimVrednostima(a: 1, c: 10);
echo "<br>";

function ispisiMnogoBrojeva(...$niz)
{
    foreach ($niz as $element) {
        echo $element . ", ";
    }
}

ispisiMnogoBrojeva(1, 4, 5, 6, 3, 4, 5);
echo "<br>";


function saberiMnogoBrojeva(...$niz)
{
    $ukupno = 0;
    foreach ($niz as $element) {
        $ukupno += $element; //$ukupno = $ukupno + $element
    }
    return $ukupno;
}

echo saberiMnogoBrojeva(1, 4, 5, 6, 3, 4, 5);
echo "<br>";
