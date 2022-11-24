<?php

class MinorPerson extends Customer {
    public function buy(Order $o) {
        if ($this->forbiddenForMinorPersons($o))
            return "You are minor person and you cant buy wine!";
        else if ($this->money < $o->getTotalPrice()) 
            return "You dont have enough money!";
        else
            return "$this->firstname bought:<br> $o";
    }

    private function forbiddenForMinorPersons(Order $o) {
        foreach($o->getProducts() as $products) {
            if ($products->getProductType() == "wine") 
                return TRUE;
        }
        return FALSE;
    }
}