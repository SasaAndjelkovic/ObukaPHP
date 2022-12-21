<?php

abstract class Korisnik{
    protected $ime;
    protected $prezime;
    protected $email;
    protected $sifra;
    protected $jmbg;
    protected $telefon;
    protected $tip;

    public function __construct($ime,$prezime,$email,$sifra,$jmbg,$telefon,$tip )
    {
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->email = $email;
        $this->sifra = $sifra;
        $this->jmbg =$jmbg;
        $this->telefon = $telefon;
        $this->tip = $tip;
    }

    abstract public function getIme();
    abstract public function setIme($imekorisnika);
    abstract public function getPrezime();
    abstract public function setPrezime($prezimekorisnika);
    abstract public function getEmail();
    abstract public function setEmail($emailkorisnika);
    abstract public function getSifra();
    abstract public function setSifra($sifrakorisnika);
    abstract public function getTelefon();
    abstract public function setTelefon($telefonkorisnika);
    abstract public function getTip();
    abstract public function setTip($tipkorisnika);
}

?>