<?php

namespace Customer;

require_once "Product.php";


class Order
{
    private $products;
    private int $totalPrice = 0;

    public function __construct()
    {
        $this->products = array();
        // $this->totalPrice = 0;
    }

    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    public function addProduct(Product $p, int $quantity = 1)
    {
        if ($p->reduceAmount($quantity)) {
            $i = 0;
            while ($i < $quantity) {
                $this->products[] = $p;
                // $this->totalPrice += $p->getPrice();
                $i++;
            }
            $this->totalPrice += $p->getPrice() * $quantity;
        } else
            echo "There are no more {$p->getProductName()}s";
    }

    public function removeProduct(Product $p)
    {
        //homework
        //remove from products and increase amount
        //unset()
    }

    // 2x smoki
    // 3x wine
    // 1x chocolate

    //products
    //$p1, $p1, $p1, $p3, $p2, $p3
    //counted
    // 1, 3, 2

    //automobili
    //yugo, yugo, yugo, mercedes, mercedes, golf, golf, golf

    //3x yugo
    //2x mercedes
    //3x golf

    public function __toString()
    {
        $str = "";
        $counted = array(); //array of ids

        for ($i = 0; $i < count($this->products); $i++) {
            if ($this->products[$i] != NULL) {
                if (!$this->checkIfIsInCounted($counted, $this->products[$i])) {
                    $counted[] = $this->products[$i]->getId();
                    $j = 0;
                    foreach ($this->products as $p) {
                        if ($p->getId() == $this->products[$i]->getId())
                            $j++;
                    }
                    $str .= "{$j}x {$this->products[$i]->getProductName()}<br>";
                }
            }
        }
        return $str;
    }

    private function checkIfIsInCounted($counted, Product $p)
    {
        if (count($counted) == 0)
            return FALSE;
        foreach ($counted as $id) {
            if ($id == $p->getId())
                return TRUE;
        }
        return FALSE;
    }

    public function getProducts()
    {
        return $this->products;
    }
}