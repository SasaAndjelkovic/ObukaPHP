<?php
namespace App\Templates;
abstract class ModelTemplate {
    abstract function viewAll();
    
    abstract function add();
    
    abstract function remove();

    abstract function getModelName();
}

?>