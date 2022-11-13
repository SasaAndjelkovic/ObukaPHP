<?php

class User
{
    private string $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Student extends User
{
    private $indexNumber;

    public function getIndexNumber()
    {
        return $this->indexNumber;
    }

    public function setIndexNumber($indexNumber)
    {
        $this->indexNumber = $indexNumber;
    }
    function __construct()
    {
    } // vise se ne pojavljuje greska da trazi 3 argumenta
}

$student = new Student();  //"Expected 3 arguments. Found 0.",
$student->setName("Sinji Andjelko");
$student->setIndexNumber("178/10/1");
echo $student->getIndexNumber() . ' ' . $student->getName();
