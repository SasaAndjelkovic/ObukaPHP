<?php

class Prijava {
    public $id;
    public $predmet;
    public $katedra;
    public $sala;
    public $datum;

    public function __construct($id=null, $predmet=null, $katedra=null, $sala=null, $datum=null)
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
        $query = "INSERT INTO prijave(predmet, katedra, sala, datum) 
                  VALUES ('$prijava->predmet', '$prijava->katedra', '$prijava->sala', '$prijava->datum')";

        return $conn->query($query);
    }

    //brisanje
    public function obrisi(mysqli $conn) {
        $query = "DELETE FROM prijave WHERE id=$this->id";
        return $conn->query($query);
    }
}