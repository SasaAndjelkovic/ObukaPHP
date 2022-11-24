<?php

class Pensioner extends Customer {

    public static float $discount = 0.2;
   
    public function buy(Order $o){
        if($this->money < $o->getTotalPrice() * (1 - self::$discount))
            echo "You dont have enough money!";
            else {
                $this->money -= $o->getTotalPrice() * (1 - self::$discount);
                echo "$this->firstname has bought: <br>$o";
            }
            
    }
}