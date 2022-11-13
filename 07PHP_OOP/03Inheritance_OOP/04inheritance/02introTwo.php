<?php

class Person
{
    private string $firstName;
    private string $lastName;

    function getPersonName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    function setPersonName($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}

class Calculator
{
    private string $calculatorType;
    //kompozicija sluzi kad Student ima kalkulator, preuzima, ne prosiruje (nije nadskup);
}

class Student extends Person
{
    public string $indexNumber;
}

class Employee extends Person
{
    public string $employeeNumber;
}

$student = new Student();
$student->setPersonName("Sinji", "Andjelko");
$employee = new Employee();
$employee->setPersonName("Igor", "Djuric");
echo $student->getPersonName() . "<br>";
echo $employee->getPersonName() . "<br>";
