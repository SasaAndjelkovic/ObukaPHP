<?php

class Predmet {

    use Obrada;

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
        $this->spisakStudenata = array();  //inicijalizacija u konstuktoru
        $this->spisakProfesora = array();
    }

	public function getNaziv()
    {
        return $this->naziv;
    }

    public function setNaziv($naziv)
    {
        $this->naziv = $naziv;
    }

    public function getSifra()
    {
        return $this->sifra;
    }

    public function setSifra($sifra)
    {
        $this->sifra = $sifra;
    }

    public function getNivoStudija()
    {
        return $this->nivoStudija;
    }

    public function setNivoStudija($nivoStudija)
    {
        $this->nivoStudija = $nivoStudija;
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