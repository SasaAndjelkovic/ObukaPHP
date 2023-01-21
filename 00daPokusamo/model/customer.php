<?php

namespace Customer;

use Customer\ICustomer;
// require_once("product.php");
require_once("ICustomer.php");

class Customer implements ICustomer
{
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

    public function buyProduct(Product $p, $quantity = 1)
    {
        // $this->money = $this->money - $p->getPrice();
        if ($this->money < $p->getPrice() * $quantity)
            echo "You don't have enough money!";
        else {
            if ($p->reduceAmount($quantity))
                $this->money -= $p->getPrice() * $quantity;
            else
                echo "There are no more {$p->getProductName()}s";
        }
    }

    public function getMoney()
    {
        return $this->money;
    }

    public function __toString()
    {
        return "Customer with id: $this->id is called $this->firstname $this->lastname and is $this->age years old. He went to the shop with {$this->money}din. <br>";
    }
    
    public function buy(Order $o)
    {
        if ($this->money < $o->getTotalPrice())
            echo "You don't have enough money!";
        else {
            $this->money -= $o->getTotalPrice();
            echo "$this->firstname has bougth:<br> $o";
        }
    }
}