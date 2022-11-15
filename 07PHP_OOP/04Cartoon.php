<?php

// cartoon caracter can walk and jump
// based on their type they make different sounds
// The Simpsons have their catch phrase, as well as Loonie Tunes and Disney characters

// SchoolKids are type of Simpsons, Rabbits are part of Loonie Tunes 
//and princesses are part of the Disneys

// Learning is reading and memorizing
// Playing is running
// Going back to life is standingUp and shinning

// SchoolKids can play and learn, Rabits can play, princesses can do all

// make Bart, Bugs Bunny and Cinderella as instances

abstract class CartoonCaracter {
    public string $name;
    function setName($name) {
        $this->name = $name;
    }
    function walk(){}
    function jump(){}
    abstract function makeSound();
	abstract function catchPhrase();
}

class Simpsons extends CartoonCaracter {
    function catchPhrase(){
        echo $this->name . ": Auch!";
    }

	public function makeSound() {
	}
}

class LoonieTunes extends CartoonCaracter {
    function catchPhrase(){}
	
	public function makeSound() {
	}
}

class Disney extends CartoonCaracter {
    function catchPhrase(){}

	public function makeSound() {
        echo $this->name . " sings: 'A Dream Is A Wish Your Heart Makes'";
	}
}

interface Learn {
    function read();
    function memorize();
}

interface Play {
    function running();
}

interface BackToLife {
    function standUp();
    function shining();
}

class SchoolKids extends Simpsons implements Learn, Play {
	public function read() {
	}
	
	public function memorize() {
	}
	
	public function running() {
	}
}

class Rabbits extends LoonieTunes implements Play {

	public function running() {
        echo $this->name . " is running away from Milica"; 
	}
}

class Princesses extends Disney implements Learn, Play, BackToLife {
    
	public function read() {
	}
	
	public function memorize() {
	}
	
	public function running() {
	}

	public function standUp() {
	}
	
	public function shining() {
	}
}

$schoolKid = new SchoolKids();
$schoolKid->setName("Bart");
$schoolKid->catchPhrase();
echo "<br>";

$rubbit = new Rabbits();
$rubbit->setName("Bugs Bunny");
$rubbit->running();
echo "<br>";

$princesse = new Princesses();
$princesse->setName("Cinderella");
$princesse->makeSound();








