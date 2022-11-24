<?php

class Product {
    private int $id;

    private string $productName;

    private string $productType;

    private float $price;

    private int $amount;

    public function __construct($id, $productName, $productType, $price, $amount)
    {
        $this->id = $id;
        $this->productName = $productName;
        $this->productType = $productType;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function getPrice() {
		return $this->price;  //iz ovog objekta vrati njegovu cenu
	}

    public function getProductName(){
        return $this->productName;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getId(): int {
		return $this->id;
	}

    public function reduceAmount($quantity = 1) {
        if ($this->amount >= $quantity) {
            $this->amount -= $quantity;
            return true;
        } else 
            return false;
    }
    
    public function __toString()
    {
        return "Product: $this->productName with id: $this->id is type of $this->productType. Price of this 
        {$this->price}din and its amount is $this->amount <br>";
    }
	
}