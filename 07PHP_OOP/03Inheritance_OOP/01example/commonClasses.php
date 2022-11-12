<?php

class Calculator
{
    private string $name;
    private float $numberOne;
    private float $numberTwo;

    function getName()
    {
        return $this->name;
    }

    function setName($newName)
    {
        $this->name = $newName;
    }

    function __construct($name, $numberOne, $numberTwo)
    {
        $this->name = $name;
        $this->numberOne = $numberOne;
        $this->numberTwo = $numberTwo;
    }
}

class User
{
    private string $name;
    private Calculator $usersCalculator;

    public function getName()
    {
        return $this->name;
    }

    public function getCalculator()
    {
        return $this->usersCalculator;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setCalculator($usersCalculator)
    {
        $this->usersCalculator = $usersCalculator;
    }
}
