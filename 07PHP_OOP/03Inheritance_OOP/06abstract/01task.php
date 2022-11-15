<?php

//abstract class
//cannot be instanciated
//has abstract methods and nonabs methods (default ones)
//can have attributes
//class can extend only one class

abstract class Animal
{
    function walk()
    {
        echo 'Walk on 4 logs ';
    }//za sve klase ova metoda je ista;

    abstract function makeSound();
}

class Dog extends Animal
{
	public function makeSound() {
        echo "Wof WOf";
	}
}

class Cat extends Animal
{
	public function makeSound() {
        echo "Myaww";
	}
}

$dog = new Dog();
$dog->walk();
$dog->makeSound();
echo "<br>";
$cat = new Cat();
$cat->walk();
$cat->makeSound();

