<?php

class Predmet {

    protected $naziv;
    protected $sifra;
    protected $nivoStudija;
    protected $spisakStudenata;
    protected $spisakProfesora;
    public function __construct($naziv, $sifra, $nivoStudija)  // sta zelim da inicijalizujem
    {
        $this->naziv = $naziv;
        $this->sifra = $sifra;
        $this->nivoStudija = $nivoStudija;
        $this->spisakStudenata = array();
        $this->spisakProfesora = array();
    }

	public function getSpisakStudenata() {
		return $this->spisakStudenata;
	}
	
	public function setSpisakStudenata($spisakStudenata): self {
		$this->spisakStudenata = $spisakStudenata;
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