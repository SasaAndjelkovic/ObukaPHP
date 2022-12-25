<?php

class Profesor extends Korisnik {

	protected $listaPredmeta;

    public function __construct($ime,$prezime,$email,$sifra,$jmbg,$telefon,$tip)
    {
        parent::__construct($ime, $prezime, $email, $sifra, $jmbg, $telefon, $tip);//pristupamo funkcijama u roditelju
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

	public function getListaPredmeta() {
		return $this->listaPredmeta;
	}
	
	public function setListaPredmeta($listaPredmeta) {
		$this->listaPredmeta = $listaPredmeta;
	}
}

?>