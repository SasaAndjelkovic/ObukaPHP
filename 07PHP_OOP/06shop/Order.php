<?php

class Order {
    private $products;
    private float $totalPrice = 0;

    public function __construct()
    {
        $this->products = array();
        // $this->totalPrice = 0;
    }

    public function getProducts() {
        return $this->products;
    }

    public function getTotalPrice(): float {
		return $this->totalPrice;
	}

    public function addProduct(Product $p, int $quantity = 1) {
        if ($p->reduceAmount($quantity)) {
            $i = 0;
            while ($i < $quantity) {
                $this->products[]= $p;
                //$this->totalPrice += $p->getPrice()
                $i++;
            }
                $this->totalPrice += $p->getPrice() * $quantity;
        } else 
         echo "There are no more {$p->getProductName()}s";    
    } 

    public function removeProduct(Product $p) {
        //homework, brise se iz products i vraca se u amount(increase), jedan po jedan ili quantity
        //unseat() - uklanjanje
    }

    public function __toString()
    {
        // return "Total price: $this->totalPrice <br>";
        $str = "";
        $counted = array(); //pomocni niz, id-ijeva proizvoda

        for ($i=0; $i < count($this->products); $i++) { 
            if($this->products[$i] !=NULL) {
                if(!$this->checkIfIsInCounted($counted, $this->products[$i])) {
                    $counted[] = $this->products[$i]->getId();
                    $j = 0;
                    foreach($this->products as $p) {
                        if($p->getId() == $this->products[$i]->getId())
                        $j++;
                    }
                    $str.="{$j}x {$this->products[$i]->getProductName()} <br>";
                }
            }
        }
        return $str;
    }

    private function checkIfIsInCounted($counted, Product $p) {
        if(count($counted) == 0) 
            return FALSE;
        foreach ($counted as $id) {
            if($id == $p->getID())
                return TRUE;
        }
        return FALSE;
    }

}
