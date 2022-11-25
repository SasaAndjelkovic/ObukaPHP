<?php

class Osoba1 {
    function pokreniSe() {
        return "Pokreni se"; 
    }
}

class Student extends Osoba1{}

class Profesor extends Osoba1{
    function pokreniSe() {
        return "Pokreni se studentu";
    }

    function oceni() {
        return "Sve to oceni";
    }
}

class Dekan extends Osoba1{}

$osoba = new Osoba1();
echo "<br>" . $osoba->pokreniSe();
$osoba = new Profesor();
echo "<br>" . $osoba->pokreniSe();

$osobe = [new Osoba1(), new Profesor(), new Student(), new Dekan()];

foreach ($osobe as $osoba1) {
    echo "<br>" . $osoba1->pokreniSe();
    // $osoba2->oceni(); - bila bi greska
}

function prihvatiOsobu(Osoba1 $o){
    
}

