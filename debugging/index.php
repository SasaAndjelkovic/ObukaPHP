<?php

$tekst = "Debugging <br>";
echo $tekst;

for ($i = 0; $i < 5; $i++) {
    echo "Broj " . $i . " <br>";
}

class Macka {
    private $ime;
    public function set_ime($ime) {
        $this->ime = $ime;
    }

    public function get_ime() {
        return $this->ime;
    }
}

$macka1 = new Macka();
$macka1->set_ime("Cicka");
$macka2 = new Macka();
$macka2->set_ime("Ozi");

echo $macka1->get_ime();
echo $macka2->get_ime();
