<?php

require_once "ICustomer.php";

class Customer implements ICustomer {
    protected int $id;
    protected string $firstname;
    protected string $lastname;

    protected int $age;

    protected float $money;

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
        if ($this->money < $p->getPrice() * $quantity) 
            echo "nemas dovoljno novca";
        else { 
            if ($p->reduceAmount($quantity)) 
                $this->money -= $p->getPrice() * $quantity;
            else 
            echo "There is no more" . $p->getProductName();
        } 
    }

    public function getMoney() {
		return $this->money;
	}

    public function __toString()
    //overwrite (hm, ili override) metoda, mora da ima return
    {
        return "Osoba " . $this->id . " sa imenom " . $this->firstname . " ". $this->lastname . " ima godina " . $this->age . 
        ". He went to the shop with {$this->money}din. <br>";
    }
	
	public function buy(Order $o) {
        if ($this->money < $o->getTotalPrice())
            echo "You dont have enough money!";
        else {
            $this->money -= $o->getTotalPrice();
            echo "$this->firstname has bought:<br> $o";
        }
	}
}