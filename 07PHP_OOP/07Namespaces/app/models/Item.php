<?php
namespace App\Models;
use App\Templates\ModelTemplate;
// use Utility\Factory;
use Utility\Printing;
class Item extends ModelTemplate {
    use Printing; 
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

    public function getModelName()
    {
        return "Item";
    }
    
    public function viewAll(){
    
    }
    
    public function add(){
    
    }
    
    public function remove(){
    
    }
}

?>