<?php
// klasa proizvod -> id, cena, naziv
// klasa kategorija -> id naziv
// zajednicke metode -> apstraktna klasa

abstract class Webstore {
    abstract function viewAll();
    
    abstract function add();
    
    abstract function remove();

    abstract function getModelName();
    }
    
class Category extends Webstore {
    protected int $id;
    protected string $catName;
    
    public function __construct($id, $catName)
    {
    $this->id = $id;
    $this->catName = $catName;
    }
    
    public function getCatName()
    {
    return $this->catName;
    }
    
    public function setCatName($catName)
    {
    $this->catName = $catName;
    }

    public function getModelName() {
        return "Category";
    }
    
    
    public function viewAll(){
    
    }
    
    public function add(){
    
    }
    
    public function remove(){
    
    }
    }
    
class Item extends Webstore {
    protected int $id;
    protected string $itemName;
    protected float $price;
    protected Category $category;
    
    public function __construct($id, $itemName, $price, Category $category)
    {
    $this->id = $id;
    $this->itemName = $itemName;
    $this->price = $price;
    $this->category = $category;
    }
    
    public function getPrice()
    {
    return $this->price;
    }
    
    public function setPrice($price)
    {
    $this->price = $price;
    }
    
    public function getItemName()
    {
    return $this->itemName;
    }
    
    public function setItemName($itemName)
    {
    $this->itemName = $itemName;
    }
    
    public function getCategory()
    {
    return $this->category;
    }
    
    public function setCategory($category)
    {
    $this->category = $category;
    }

    public function getModelName() {
        return "Item";
    }
    
    public function viewAll(){
    
    }
    
    public function add(){
    
    }
    
    public function remove(){
    
    }
}

$kat = new Category(1, "Monitor");
$proizvod1 = new Item (1, "Philips", 350, $kat);
print_r($proizvod1->getCategory());