<?php
namespace App\Models;
use App\Templates\ModelTemplate;
use Utility\Factory;

class Category extends ModelTemplate {
    use Factory;
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
    
    public function getModelName()
    {
        return "Category";
    }
    
    public function viewAll(){
    }
    
    public function add(){
    }
    
    public function remove(){
    }

    //obezbedjuje da se prikaze 
    //App\Models\Category could not be converted to string 
    public function __toString()
    {
         return "".$this->id;
    }
}
?>