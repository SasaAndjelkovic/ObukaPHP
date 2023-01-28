<?php

class Predmet
{
    use Obrada;
    protected $naziv;
    protected $sifra;
    protected $spisakStudenata;
    protected $spisakProfesora;
    protected $nivoStudija;

    public function __construct($naziv, $sifra, $nivoStudija)
    {
        $this->naziv = $naziv;
        $this->sifra = $sifra;
        $this->nivoStudija = $nivoStudija;
        $this->spisakStudenata = array();
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

    public function setSpisakStudenata($spisakstud){
        $this->spisakStudenata = $spisakstud;
    }

    public function getSpisakStudenata(){
        return $this->spisakStudenata;
    }

    public function setSpisakProfesora($spisakprof){
        $this->spisakProfesora = $spisakprof;
    }

    public function getSpisakProfesora(){
        return $this->spisakProfesora;
    }

}

?>