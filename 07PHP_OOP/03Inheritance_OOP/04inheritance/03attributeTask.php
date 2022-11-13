<?php

//Person has a first name, last name and a Calculator
//Calculator has a model and type
//Student has index number and is a extension of Person

//use Calculator as GlobalCalculator;

class Calculator
{
    public string $model;
    public string $type;

    function __construct()
    {
    }
}

class Person
{
    public string $firstName;
    public string $lastName;
    public Calculator $calculator;
}

class Student extends Person
{
    public int $indexNumber;
}

$student = new Student();
$student->firstName = "Sinji";
$student->lastName = "Andjelko";
$student->indexNumber = 123;
$student->firstName = "Igor";

$calculator = new Calculator();
$calculator->model = "Casio";

$student->calculator = $calculator;
echo $student->calculator->model;
