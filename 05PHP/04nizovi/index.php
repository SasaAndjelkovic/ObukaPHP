<?php

//indeksirani nizovi
$niz_brojeva = [1, 2, 3, 4, 5, 6];
/**
 * niz_brojeva = array (
 *  0 => 1,
 *  1 => 2, 
 * 
 * 
 * )
 */

//asocijativni nizovi
$osoba = array(
    "ime" => "Tamara",
    "prezime" => "Naumovic",
    "zaposlenost" => true,
    "godina_rodjenja" => 1984
);

echo "<br>";
echo $niz_brojeva[4] . "<br>";
echo $osoba["ime"] . "<br>";

$niz_brojeva[] = 15;
echo $niz_brojeva[count($niz_brojeva) - 1] . "<br>";

$osoba["adresa"] = array(
    "ulica" => "Jove Ilica",
    "broj" => 154,
    "grad" => "Beograd"
);
echo $osoba["adresa"]["ulica"] . "<br>";

echo array_key_exists("adresa", $osoba) . "<br>";  //za proveru kljuceva, da li postoje u nizu
var_dump(array_key_exists(1, $niz_brojeva));
echo "<br>";
echo "Da li postoji: " . in_array("Tamara", $osoba) . "<br>";
echo "Da li postoji: " . in_array("tamara", $osoba) . "<br>";
echo "Da li postoji: " . in_array("tamara", $osoba, true) . "<br>"; // true je za scrict

//dodavanje na niz
$rez = array_push($niz_brojeva, "Tamara");
print_r($niz_brojeva);
echo "<br>";
echo $rez . "<br>";
$rez_a = array_push($osoba, "FON");
print_r($osoba);
echo "<br>";

//sklanjanje sa niza
$poslednji_broj = array_pop($niz_brojeva);
echo $poslednji_broj . "<br>";
print_r($niz_brojeva);
echo "<br>";

unset($niz_brojeva[2]);
print_r($niz_brojeva) . "<br>";
echo "<hr>";

//sortiranje
//indeksiarni nizovi
$niz_brojeva[] = 17;
$niz_brojeva[] = 115;
$niz_brojeva[] = 18;
$niz_brojeva[] = -15;
$niz_brojeva[] = -222;
print_r($niz_brojeva);
echo "<br>";
sort($niz_brojeva);
print_r($niz_brojeva);
echo "<br>";

//asocijativni nizovi
asort($osoba);  // prema vrednostima
print_r($osoba);
echo "<br>";
ksort($osoba);
echo "<br>";
print_r($osoba);
echo "<br>";

//multidimenzionalni nizovi
$osobe = array(
    "studenti" => array(
        "prva_godina" => array(
            array(
                "ime" => "Tamara",
                "prezime" => "Naumovic",
                "indeks" => 5005,
                "godina" => 2018
            ),
            array(
                "ime" => "Milica",
                "prezime" => "Simic",
                "indeks" => 5012,
                "godina" => 2018
            )
        ),
        "druga_godina" => array(
            array(
                "ime" => "Petar",
                "prezime" => "Lukovac",
                "indeks" => 5001,
                "godina" => 2019
            ),
            array(
                "ime" => "Aleksa",
                "prezime" => "Miletic",
                "indeks" => 5013,
                "godina" => 2019
            )
        )
    ),
    "nastavnici" => array(
        "profesori" => array(
            array(
                "ime" => "Zorica",
                "prezime" => "Bogdanovic"
            ),
            array(
                "ime" => "Aleksandra",
                "prezime" => "Labus"
            )
        ),
        "asistenti" => array(
            array(
                "ime" => "Milica",
                "prezime" => "Petrovic"
            ),
            array(
                "ime" => "Nemanja",
                "prezime" => "Kojic"
            )
        )
    )
);
echo "<hr>";
print_r($osobe["studenti"]["prva_godina"][1]);
echo "<br><br>";

foreach ($osobe["studenti"]["prva_godina"] as $student) {
    echo "ime" . $student["ime"] . "<br>";
    echo "prezime: " . $student["prezime"] . "<br>";
}
echo "<br>";

foreach ($osobe["studenti"]["prva_godina"] as $student) {
    foreach ($student as $key => $val) {
        echo $key . " : " . $val . "<br>";
    }
}

echo "<hr>";
$niz_indeksa = [];
foreach ($osobe["studenti"]["druga_godina"] as $student) {
    echo $student["indeks"] . "<br>";
    $niz_indeksa[] = $student["indeks"];
}

print_r($niz_indeksa);

echo "<hr>";
//ugradjena funckcija za vracanje pod_nizova iz nekog assoc niza
$niz_indeksa_u = array_column($osobe["studenti"]["druga_godina"], "indeks");
print_r(($niz_indeksa_u));
echo "<br>";
$niz_indeksa_u = array_column($osobe["studenti"]["druga_godina"], "prezime", "indeks");
print_r(($niz_indeksa_u));
echo "<br>";
$niz_kljuceva = ["ime", "prezime", "indeks", "godina"];
$novi_student = ["Petar", "Petrovic", 5022, 2018];
$student_assoc = array();
for ($i = 0; $i < count($niz_kljuceva); $i++) {
    $student_assoc[$niz_kljuceva[$i]] = $novi_student[$i];
}
echo "<hr>";
print_r($student_assoc);
echo "<br>";
$novi_student1 = ["Nikola", "Novakovic", 5025, 2018];
$student_assoc1 = array_combine($niz_kljuceva, $novi_student1);
print_r($student_assoc1);
$osobe["studenti"]["druga_godina"][] = $student_assoc;
echo "<pre>" . print_r($osobe["studenti"]["druga_godina"], true) . "</pre>";
echo "<hr>";
