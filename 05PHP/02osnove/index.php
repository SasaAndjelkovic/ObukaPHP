<?php

$ime = "Tamara";
$prezime = "Naumovic";
$godine = "25";
$zaposlenost = true;
$adresa = ["Jove Ilica", 54, "Beograd", 11000, "Srbija"];  // indeksirani niz
echo $adresa[0] . "<br>";

for ($brojac = 0; $brojac < 5; $brojac++) {
    echo "Brojac je: $brojac" . "<br>";
};
echo "<br>";

for ($brojac = 0; $brojac < count($adresa); $brojac++) {
    echo "Adresa sadrzi: $adresa[$brojac] <br>";
};
echo "<br>";

foreach ($adresa as $element) {
    echo "Adresa sadrzi: $element <br>";
};
echo "<br>";

//asocijativni niz => kljuc-vrednost parovi (key-value pairs)
$osoba = array(
    "ime" => $ime,  // => operator dodele
    "prezime" => $prezime,
    "godine" => $godine,
    "zaposlenost" => $zaposlenost,
    "adresa" => array(
        "ulica" => $adresa[0],
        "broj" => $adresa[1],
        "grad" => $adresa[2],
        "ZIP" => $adresa[3],
    ),
    "poslednja_primanja" => [50000, 60000, 70000]
);

echo $osoba["prezime"] . "<br>";
print_r($osoba['adresa']['grad']);
echo "<br>";
print_r($osoba['poslednja_primanja'][2]);
echo "<br>";
echo "<br>";

foreach ($osoba as $element) {
    if (is_array($element)) {
        foreach ($element as $podelement) {
            echo $podelement . "<br>";
        }
    } else {
        print_r($element);
        echo "<br>";
    }
};

for ($i = 0; $i < 50; $i++) {
    if ($i % 2 == 0) {
        echo "Broj je paran: $i <br>";
    }
};

for ($i = 0; $i < 50; $i++) {
    if ($i % 2 != 0) {
        echo "Broj je neparan: $i <br>";
    }
};

$bro = 0;
for ($bro; $bro < 11; $bro++) {
    switch ($bro) {
        case $bro % 2 == 0:
            echo "Broj $bro je paran broj <br>";
            break;
        case $bro % 3 == 0:
            echo "Broj $bro je deljiv sa 3 <br>";
            break;
        case $bro % 5 == 0:
            echo "Broj $bro je deljiv sa 5 <br>";
            break;
        default:
            echo "Broj $bro je prost <br>";
    };
};
