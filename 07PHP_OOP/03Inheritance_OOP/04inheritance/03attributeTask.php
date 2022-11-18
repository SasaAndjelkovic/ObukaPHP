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
    public string $firstNameInh;
    public string $lastName;
    public Calculator $calculator;
}

class Student extends Person
{
    public int $indexNumber;
}

$student = new Student();
$student->firstNameInh = "Sinji";
$student->lastName = "Andjelko";
$student->indexNumber = 123;
$student->firstNameInh = "Igor";
echo "<br>" . $student->firstNameInh;

$calculator = new Calculator();
$calculator->model = "Casio";

$student->calculatorInh = $calculator;
echo $student->calculatorInh->model;

