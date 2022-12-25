<?php

class Predmet {

    protected $naziv;
    protected $sifra;
    protected $nivoStudija;
    protected $spiskaStudenata;
    protected $spisakProfesora;
    public function __construct($naziv, $sifra, $nivoStudija)  // sta zelim da inicijalizujem
    {
        $this->naziv = $naziv;
        $this->sifra = $sifra;
        $this->nivoStudija = $nivoStudija;
        $this->spiskaStudenata = array();
        $this->spisakProfesora = array();
    }

	public function getSpiskaStudenata() {
		return $this->spiskaStudenata;
	}
	
	public function setSpiskaStudenata($spiskaStudenata): self {
		$this->spiskaStudenata = $spiskaStudenata;
		return $this;
	}

	public function getSpisakProfesora() {
		return $this->spisakProfesora;
	}
	
	public function setSpisakProfesora($spisakProfesora): self {
		$this->spisakProfesora = $spisakProfesora;
		return $this;
	}
}