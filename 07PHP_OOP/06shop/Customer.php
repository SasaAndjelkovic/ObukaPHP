<?php

class Customer {
    private int $id;
    private string $firstname;
    private string $lastname;

    private int $age;

    private float $money;

    public function __construct($id, $firstname, $lastname, $age, $money)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->money = $money;
    }

    public function buyProduct(Product $p, $quantity=1) 
    {
        if ($this->money < $p->getPrice() * $quantity) echo "nemas dovoljno novca";
       else { 
        if ($p->reduceAmount($quantity)) $this->money -= $p->getPrice() * $quantity;
        else 
        echo "There is no more" . $p->getProductName();
        } 
    }

    public function getMoney() {
		return $this->money;
	}

    public function __toString()
    //overwrite metoda, mora da ima return
    {
        return "Osoba " . $this->id . " sa imenom " . $this->firstname . " ". $this->lastname . " ima godina " . $this->age . 
        ". He went to the stop with {$this->money}din. <br>";
    }
}