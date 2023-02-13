<?php

class Muzicar{
    public $muzicarID;
    public $ime;
    public $prezime;
    public $instrumentID;

    public function __construct($muzicarID=null, $ime=null, $prezime=null, $instrumentID=null)
    {
        $this->muzicarID = $muzicarID;
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->instrumentID = $instrumentID;
    }

}

?>