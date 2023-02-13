<?php

class Instrument{

    public $instrumentID;
    public $nazivInstrumenta;


    public function __construct($instrumentID=null, $nazivInstrumenta=null)
    {
        $this->instrumentID = $instrumentID;
        $this->nazivInstrumenta = $nazivInstrumenta;
    }

    
}
?>