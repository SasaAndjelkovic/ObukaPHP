<?php

class Kontroler{

    public static function ulogujKorisnika(Korisnik $korisnik){
        echo "<br>Ulogovan korisnik: " . $korisnik->getIme()." ".$korisnik->getPrezime();

    }

    public static function prikaziStudente(Student ...$listastudenata){
        foreach($listastudenata as $st):
            echo "Status studenta: ".$st->getStatus();
        endforeach;
    }
}

?>