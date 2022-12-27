<?php

class OStudent extends Korisnik implements Student{

    private $status = "osnovne";
    private $indeks;

    public function __construct($ime,$prezime,$email,$sifra,$jmbg,$telefon,$tip, $indeks)
    {
        parent::__construct($ime, $prezime, $email, $sifra, $jmbg, $telefon, $tip);
        $this->indeks = $indeks;
    }
	public function getStatus() {
        return $this->status;
	}
	public function setIndeks($indeks) {
        $this->indeks = $indeks;
	}
	public function getIndeks() {
        return $this->indeks;
	}
	

	public function getIme() {
        return $this->ime;
	}
	

	public function setIme($imekorisnika) {
        $this->ime = $imekorisnika;
	}
	

	public function getPrezime() {
        return $this->prezime;

	}
	

	public function setPrezime($prezimekorisnika) {
        $this->prezime = $prezimekorisnika;

	}
	

	public function getEmail() {
        return $this->email;

	}
	

	public function setEmail($emailkorisnika) {
        $this->email = $emailkorisnika;

	}
	

	public function getSifra() {
        return $this->sifra;
	}
	

	public function setSifra($sifrakorisnika) {
        $this->sifra = $sifrakorisnika;

	}
	

	public function getTelefon() {
        return $this->telefon;
	}
	

	public function setTelefon($telefonkorisnika) {
        $this->telefon= $telefonkorisnika;
	}

	public function getTip() {
        return $this->tip;

	}
	

	public function setTip($tipkorisnika) {
        $this->tip = $tipkorisnika;
	}
}

?>