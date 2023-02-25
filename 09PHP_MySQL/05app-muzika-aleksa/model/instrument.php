<?php

class Instrument{

    public $instrumentID;
    public $nazivInstrumenta;


    public function __construct($instrumentID=null, $nazivInstrumenta=null)
    {
        $this->instrumentID = $instrumentID;
        $this->nazivInstrumenta = $nazivInstrumenta;
    }

    public static function add($instrument, mysqli $conn){
        $q = "INSERT INTO instrument(naziv) VALUES ('$instrument')";
        return $conn->query($q);
    }

    public static function getByName($instrument, mysqli $conn){
        $q = "SELECT id FROM instrument WHERE naziv='$instrument' LIMIT 1";
        return $conn->query($q)->fetch_column();
    }

    public static function getById($instrument_id, mysqli $conn){
        $q = "SELECT naziv FROM instrument WHERE id=$instrument_id LIMIT 1";
        return $conn->query($q)->fetch_column();
    }
}
?>