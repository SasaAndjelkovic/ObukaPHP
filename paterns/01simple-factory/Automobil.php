<?php

class Automobil {
    private $marka;
    private $model;

    public function __construct($marka, $model){
        $this->marka = $marka;
        $this->model = $model;
    }

    public function ispisiMarkuModel() {
        return "Marka automobila: " . $this->marka . '; Model automobila: ' . $this->model . ' <br>';
    }
}