<?php

class Prijava {
    public $id;
    public $predmet;
    public $katedra;
    public $sala;
    public $datum;

    public function __construct($id=null, $predmet, $katedra, $sala, $datum)
    {
        $this->id= $id;
        $this->predmet= $predmet;
        $this->katedra = $katedra;
        $this->sala = $sala;
        $this->datum = $datum;
    }

    //prikazi sve
    public static function prikaziSve(mysqli $conn){
        $query = "SELECT *
                  FROM prijave";

        return $conn->query($query);
    }

    //kreiranje/dodavanje nove prijave
    public static function dodaj(Prijava $prijava, mysqli $conn) {
        $query = "INSERT INTO prijave(predmet, katedre, sala, datum) 
                  VALUES ('$prijava->predmet', '$prijava->katedra', '$prijava->sala', '$prijava->datum')";

        return $conn->query($query);
    }
}