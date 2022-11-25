<?php

class Pensioner extends Customer {

    public static float $discount = 0.2;

    // T - property: static -> method: static
    // Pensioner::getDiscount(); ne moze $p = new Pensioner() // $p->getDiscount()
    // public static function getDiscount() }
    //    return self::$discount;
    // }
    // T - property: static -> method: non static (primer u nastavku)
    // F - property: non static -> method: static 
    // public static function getDiscount() }
    //    $this->money; -- ovo ne moze, this se koristi za objekat, instancu
    //    return self::$discount;
    // }
    // T - property: non static -> method: non static (uobicajeno)
   
    public function buy(Order $o){
        if($this->money < $o->getTotalPrice() * (1 - self::$discount))
            echo "You dont have enough money!";
            else {
                $this->money -= $o->getTotalPrice() * (1 - self::$discount);
                echo "$this->firstname has bought: <br>$o";
            }
            
    }
}