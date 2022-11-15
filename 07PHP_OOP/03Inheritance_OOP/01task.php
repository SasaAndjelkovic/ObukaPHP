<?php

// Dogs can walk, bark and sit
// Cat can mjau, scretch and jump
// Chicken can wakeUp

//Toy store sells SnoopieType who's a dog
//GarfieldType who's a cat
//MonsterType Dog-Cat-Chicken who does all the sounds

//make interfaces and classes which implements this


// interface ToysBehavior
// {
//     function walk($eWalk);
//     function bark($ebark);
//     function sit($esit);
//     function mjau($emjau);
//     function scretch($escretch);
//     function jump($ejump);
// }

// class Toys implements StudentBehavior
// {
//     public function learn($examName)
//     {
//         echo "Learning " . $examName;
//     }
// }


//interface cannot be implemented
//class can implement 0..n interfaces
//class must implement all the methods of interface
//interface can extend an interface (manje se upotrebljava)

interface DogsBehavior
{
    function walk();
    function bark();
    function sit();
}

interface CatsBehavior
{
    function mjau();
    function scratch();
    function jump();
}

interface ChickenBehavior
{
    function wakeUp();
}

class Snoopie implements DogsBehavior
{
    public function walk()
    {
    }
    public function bark()
    {
    }
    public function sit()
    {
    }
}

class Garfield implements CatsBehavior
{
    public function mjau()
    {
    }
    public function scratch()
    {
    }
    public function jump()
    {
    }
}

class Monster implements DogsBehavior, CatsBehavior, ChickenBehavior
{
    public function walk()
    {
    }
    public function bark()
    {
    }
    public function sit()
    {
    }
    public function mjau()
    {
    }
    public function scratch()
    {
    }
    public function jump()
    {
    }
    public function wakeUp()
    {
    }
}
