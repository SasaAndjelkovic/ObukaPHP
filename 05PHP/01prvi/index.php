<?php

/*
phpinfo();
*/

echo "Ovo je neki tekst.";
echo "<h1>Ovo bi trebalo da bude naslov</h1>";

$ime = "Jovan";  // js: let ime = "Jovan"
echo $ime;

echo "<br>";
$godina = 2022;
echo $godina;

echo "<br>";
$prosek = 9.1;
echo $prosek;

echo "<br>";
$predavac = true;
echo $predavac;  // cita kao 1, tacno; ako nije tacno ne ispisuje

echo "<br>";
var_dump($prosek);
//die(var_dump($prosek)); die(), prekid izvrsenja programa

echo "<br>";
define("NOVA_KONSTANTA", "Ovo je nova konstanta"); // naziv, vrednost
echo NOVA_KONSTANTA;

echo "<br>";
echo "Ime: " . $ime;

echo "<br>";
echo is_int($ime);   // netacna se ne ispisuje
echo is_int($godina);  // ispisuje se 1

echo "<br>";
echo defined($ime);

// globalne i lokalne promenljive
// globalne su dostupne u celom fajlu
// lokalne su dostupne samo u okviru jednog bloka

$broj1 = 12;

function test()
{
    global $broj1;  // da nismo stavili ovo, blok pokazuje da $broj1 nije definisan
    $broj2 = 23;
    $broj1 = $broj1 + $broj2;

    $broj2 = $broj2 + 5;
    echo "<br> Broj2 je: " . $broj2 . "<br>";  //vrednost lokalne promenljive se ne pamti nakon zavrsetka funkcije (resetuje se)
    echo "<br> Broj1 je: " . $broj1 . "<br>";
}

test();  // broj1 12 + 23 = 35
test();  //ako pozovemo dva puta, dobicemo 35 + 23 = 58
echo $broj1;
echo "<br>";
echo $broj2; //ovo je lokalna promenljiva, nije definisana van funkcije
// Warning: Undefined variable $broj2 in C:\xampp\htdocs\ObukaPHP\05PHP\index.php on line 59

// aritmeticki operatori
$prviBroj = 12;
$drugiBroj = 6;
$suma = $prviBroj + $drugiBroj;
echo $suma . "<br>";
/*
...  % **
*/

//inkrementovanje, dekrementovanje, operatori dodeljivanja
$promenljiva = 7;
// $promenljiva = $promenljiva + 1;
echo ++$promenljiva . "<br>";  // inkrementuj pre izvrsenja, dodaj pre izvrsenja;
echo $promenljiva++ . "<br>";  //                          , dodaj posle izvrsenja (prvo se ispisuje)
echo $promenljiva . "<br>";


$promenljiva2 = 5;
echo --$promenljiva2 . "<br>";
echo $promenljiva2-- . "<br>";


$prom = 13;
$prom = $prom + 3;
$prom += 3;  //po slicnom principu -=
echo $prom . "<br>";

echo ($prom += 1) . "<br>"; //istp kao ++$prom 

$nekiString = "Ana";
$nekiString = $nekiString . " Aniceva";
$nekiString .= " Anic";
echo $nekiString . "<br>";

//operatori poredjenja
echo (7 == 7) . "<br>"; // jednakost
echo (7 == "7") . "<br>"; // tacno je
echo (7 === "7") . "<br>"; // i vrednost i tip; striktna jednakost

if (!(7 > 7)) {
};

echo !(7 > 7) . "<br>";  // >=, <=


//nizovi
$niz = ["Jelena", "Dusan", "Ivana", 7];
echo $niz[1] . "<br>";

$niz2 = ["ime" => "Jelena", "prezime" => "Saric"];  //nema potrebe da imamo dva kljuca ime, ime
echo $niz2["ime"] . "<br>";
