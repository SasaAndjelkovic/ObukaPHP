<?php

echo "<br> studentski sadrzaj";

$predmeti = $_SESSION["predmeti"];
$mojipredmeti = [];

foreach($predmeti as $pr){
    if($pr->getNivoStudija()==$korisnik->getStatus()){
        array_push($mojipredmeti, $pr);
    }
}

// foreach($mojipredmeti as $pred){
//     print_r($pred->konvertujUNiz());

// };

Kontroler::prikaziTabelu($mojipredmeti,["naziv", "sifra","nivoStudija","spisakstud","spisakprof"])



?>