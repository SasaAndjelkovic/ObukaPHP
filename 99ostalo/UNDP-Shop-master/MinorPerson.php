<?php

namespace Customer;

use ACustomer\Customer;

require_once('AbstructCustomer.php');

class MinorPerson extends Customer
{
    public function buy(Order $o)
    {
        if ($this->forbiddenForMinorPersons($o))
            return "You are minor person and you can't buy wine!";
        else if ($this->money < $o->getTotalPrice())
            return "You don't have enough money!";
        else
            return "$this->firstname bougth:<br> $o";
    }

    private function forbiddenForMinorPersons(Order $o)
    {
        foreach ($o->getProducts() as $product) {
            if ($product->getProductType() == "wine")
                return TRUE;
        }
        return FALSE;
    }
}
