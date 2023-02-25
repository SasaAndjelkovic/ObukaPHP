<?php

require "../dbBroker.php";
require "../model/muzicar.php";
require "../model/instrument.php";

if(isset($_POST['ime']) && isset($_POST['prezime']) 
    && isset($_POST['instrument'])){

    $instrument_id = Instrument::getByName($_POST['instrument'], $conn);
    // saljemo podatke modelu da izvrsi upit
    $status = Muzicar::add($_POST['ime'], $_POST['prezime'],
                            $instrument_id, $conn);
    if($status){
        echo 'Success';
    } else{
        echo $status;
        echo "Failed";
    }
}

?>