<?php

include "Automobil.php";

class AutomobilFactory {
    public function kreiraj ($marka, $model){
        return new Automobil($marka, $model);
    }
}