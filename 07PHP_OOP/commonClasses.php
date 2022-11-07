<?php


class Vehicle
{
    private $manufacturer;
    private $type;

    public function setManufacturer($newManufactuter)
    {
        $this->manufacturer = $newManufactuter;
    }

    function getManufacturer()
    {
        return $this->manufacturer;
    }

    function setType($newType)
    {
        $this->type = $newType;
    }

    function getType()
    {
        return $this->type;
    }

    private function setDefaultType()
    {
        $this->type = "undefined";
    }
}

//create class student (give attributes)
//create method doExam which returns random 1-5 grade
//create method getStatus which returns name and grade
class Student
{
    private string $name;
    private string $lastName;
    private int $age;
    private int $grade;

    public function __construct($firstName, $lastName, $age)
    {
        $this->name = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    // public function __destruct()
    // {
    //     echo "<br> Removed from memory";
    // }

    static function sayHi()
    {
        return "Hi there";
    }

    function setName($newName)
    {
        $this->name = $newName;
    }

    public function doExam()
    {
        $this->grade = rand(1, 5);
    }

    function getStatus()
    {
        return $this->name . ' ' . ' ' . $this->lastName . ' ' . $this->grade;
    }
}
