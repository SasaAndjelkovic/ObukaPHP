<?php

class MojaKlasa 
{  
    public static $staticnoSvojstvo = "Prvobitna vrednost svojstva";
    public static function statickaMetoda($poruka){
        echo "Staticki pozdtav: $poruka";
    }
            public function __construct()
    {
        //pristup statickim metodama unutar same klase
        //this se odnosi na objekat, self na klasu
        self::statickaMetoda("Kreiran novi objekat");
        // self::$staticnoSvojstvo = "Nova vrednost svojstva"; //nije praksa da menjamo staticko svojstvo
    }
}

// $moj_obj = new MojaKlasa();
// $moj_obj->statickaMetoda();

//definicija> nazivKlase::statickaMetoda($argumenti)
MojaKlasa::statickaMetoda("poruka"); //nacin pristupa samo statickim metodima

echo "<br>";
$obj = new MojaKlasa();
echo "<br>";
echo MojaKlasa::$staticnoSvojstvo;
