<?php
//stepenovanje
echo "Stepenovanje: ";
echo pow(2, 7);
echo "<br>";

function stepen($broj, $stepen)
{
    $ukupno = 1;
    for ($i = 0; $i < $stepen; $i++) {
        $ukupno *= $broj;
    }
    return $ukupno;
}

echo stepen(2, 7) . "<br>";

//random broj
echo "Random broj: " . rand() . "<br>";
echo "Random broj od 1 do 100: " . rand(1, 100) . "<br>";

//korenovanje
echo "Koren broja 100: " . sqrt(100) . "<br>";
echo "Koren random broja: " . sqrt(rand(1, 100)) . "<br>";

//zaokruzivanje
echo "Zaokruzi na veci broj: " . ceil(4.1) . "<br>"; // =>5
echo "Zaokruzi na manji broj: " . floor(4.9) . "<br>"; // =>4
echo "Zaokruzi pravilno broj: " . round(4.9) . "<br>"; // =>5
echo "Zaokruzi pravilno broj: " . round(4.5) . "<br>"; // =>5
echo "Zaokruzi broj na decimale: " . round(4.5, 2) . "<br>"; //=>4.5
echo "Zaokruzi broj na decimale: " . round(10 / 3, 2) . "<br>"; //=>3.33
