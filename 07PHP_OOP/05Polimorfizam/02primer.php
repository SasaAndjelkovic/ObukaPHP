<?php

//interfejs Oblik
//definise povrsinu
//Oblici Krug i Pravougaonik
//racunaju konkretnu povrsinu oblika
//ispisi povrsine liste oblika

interface Oblik {
    public function povrsina();
    //najbolje bez broja parametara da ne bi ogranicavala
}

class Krug implements Oblik {
    private $precnik;
    public function __construct($pr)
    {
        $this->precnik = $pr;
    }	
	public function povrsina() {
        return $this->precnik*$this->precnik*3.14;
	}
}

class Kvatrat implements Oblik {
    private $stranica;
    public function __construct($str)
    {
        $this->stranica = $str;
    }
	public function povrsina() {
        return $this->stranica*$this->stranica;
	}
}

class Pravougaonik implements Oblik{
    private $a;
    private $b;
    public function __construct($a, $b)
    {
        $this->a=$a;
        $this->b=$b;
    }
	public function povrsina() {
        return $this->a*$this->b;
	}
}

function racunajPovrsine(Oblik $oblik) {
    echo "<br>" . $oblik->povrsina();
}

racunajPovrsine(new Kvatrat(5));
racunajPovrsine(new Krug(7));
racunajPovrsine(new Pravougaonik(7, 5));

function povrsine_oblika(Oblik ...$lista_oblika) {
    foreach($lista_oblika as $oblik){
        echo "<br>" . $oblik->povrsina();
    }
}

echo "<br> Povrsina oblika";
povrsine_oblika(...[new Krug(3), new Kvatrat(4), new Pravougaonik(3, 4)]);
//u slucaju da smo napisali new Amerikanac, bila bi greska jer nije deo interfejsa Oblik
//pogresan tip objekta

