<?php

//Vehicle can drive and shiftGears
//FlyingThing can fly and land
//SailingThing can float

//Implement car, helicopter, flyingCar and HoverBoatCar
//Instance one of each and call methods

interface VehicleInt
{
    function drive();
    function shiftGears($gear);
}

interface FlyingThing
{
    function fly();
    function land();
}

interface SailingThing
{
    function float();
}

class Car implements VehicleInt
{

    public function drive()
    {
        echo "Join the Joyride!";
    }
    public function shiftGears($gear)
    {
        echo "Now driving in " . $gear . " gear!";
    }
}

class Helicopter implements FlyingThing
{
    public function fly()
    {
        echo "I am flaying!";
    }
    public function land()
    {
        echo "Not flying anymore :(";
    }
}

class FlyingCar implements VehicleInt, FlyingThing
{
    public function drive()
    {
        echo "Join the Joyride!";
    }
    public function shiftGears($gear)
    {
        echo "I am flying";
    }
    public function fly()
    {
        echo "I am flying and driving!";
    }
    public function land()
    {
        echo "Not flying anymore but maybe driving hmm";
    }
}

class HoverBoatCar implements FlyingThing, SailingThing, VehicleInt
{
    public function fly()
    {
        echo "I am flying";
    }
    public function land()
    {
        echo "Not flying anymore :(";
    }
    public function float()
    {
        echo "We all float down here!";
    }
    public function drive()
    {
        echo "Join the Joyride!";
    }
    public function shiftGears($gear)
    {
        echo "Now driving in " .$gear . " in gear";
    }
}

$yugo = new Car();
$yugo->shiftGears(3);
echo "<br>";
$flyer = new FlyingCar();
$flyer->drive();
echo "<br>";
$hover = new HoverBoatCar();
$hover->float();

?>