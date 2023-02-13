<?php

class Instrument{

    public $instrumentID;
    public $nazivInstrumenta;


    public function __construct($instrumentID=null, $nazivInstrumenta=null)
    {
        $this->instrumentID = $instrumentID;
        $this->nazivInstrumenta = $nazivInstrumenta;
    }

    public static function add($instrument, mysqli $conn) {
        $q = "INSERT INTO instrument(naziv) VALUES ('$instrument')";
        return $conn->query($q);
    }
}
?>