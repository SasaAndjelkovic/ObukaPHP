<?php

namespace ACustomer;

use Customer\ICustomer;

// require_once("customer.php");
// require_once("ICustomer.php");

//because this is abstract class, it don't need to implement any interface method
abstract class Customer implements ICustomer
{
    protected int $id;
    protected string $firstname;
    protected string $lastname;
    protected int $age;
    protected int $money;

    public function __construct($id, $firstname, $lastname, $age, $money)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->money = $money;
    }

    public function getMoney()
    {
        return $this->money;
    }


    public function __toString()
    {
        return "<br>Customer with id: $this->id is called $this->firstname $this->lastname and is $this->age years old <br>";
    }
}