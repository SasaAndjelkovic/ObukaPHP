<?php
include "model/korisnik.php";
include "model/student.php";
include "model/ostudent.php";
include "model/mstudent.php";
include "model/dstudent.php";
include "model/profesor.php";
include "model/administrator.php";
include "model/predmet.php";
include "model/ocena.php";
include "controler/controler.php";


$so = new OStudent("tamara", "naumovic", "tamara@elab.rs", "tamara123", "1234567891234", "0662581477", "student", "2020/1005");
$sm = new MStudent("petar", "lukovac", "petar@elab.rs", "petar123", "1231234891234", "0661281477", "student", "2020/2005");
$sd = new DStudent("aleksa", "miletic", "aleksaa@elab.rs", "aleksa123", "1234561231234", "0662123477", "student", "2020/3005");


$nizstudenata = [$so, $sm, $sd];
// Kontroler::prikaziStudente(...$nizstudenata);


echo "<br>";

// echo Kontroler::prikaziTabelu($nizstudenata, ["status", "indeks", "ime", "prezime", "email", "sifra", "jmbg", "telefon", "tip"]);

foreach($so as $key=>$value){
    echo $key . ":", $value;
}

?>