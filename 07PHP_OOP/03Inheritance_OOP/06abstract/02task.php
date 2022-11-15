<?php

// every toy can sing and speak
// toy has a specific sound
// dog barks, cat say myaww, monster sayy rrrr
// instanciate objects and make sounds


abstract class DefaultToy
{
    function sing(){
        echo "I am singing";
    }

    function speak()
    {
        echo 'I am speaking';
    }

    abstract function toySound();
}

class Dog extends DefaultToy {	
	public function toySound() {
        echo "I am barking";
	}
}

class Cat extends DefaultToy {
	public function toySound() {
        echo "I am myawing";
	}
}

class Monster extends DefaultToy {	
	public function toySound() {
        echo "I am doing rrrr";
	}
}

$dog = new Dog();
$dog->toySound();
echo "<br>";

$cat = new Cat();
$cat->toySound();
echo "<br>";

$monster = new Monster();
$monster->toySound();
echo "<br>";
