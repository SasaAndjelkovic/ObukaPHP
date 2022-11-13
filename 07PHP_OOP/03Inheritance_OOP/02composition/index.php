<?php

//Watch has it's brandname
//Person has a name
//Person can wear a watch
//Display person name and watch brandname

class Watch
{
    private string $brandName;

    function getBrand()
    {
        return $this->brandName;
    }

    function setBrand($brandName)
    {
        $this->brandName = $brandName;
    }
}

class Person
{
    private string $personName;
    private Watch $personWatch;

    function getName()
    {
        return $this->personName;
    }

    function getWatch()
    {
        return $this->personWatch;
    }

    function setName($personName)
    {
        $this->personName = $personName;
    }

    function setWatch($personWatch)
    {
        $this->personWatch = $personWatch;
    }
}

$watchOne = new Watch();
$watchOne->setBrand('Festina');
$userOne = new Person();
$userOne->setName("Sinji Andjelko");
$userOne->setWatch($watchOne);
echo $userOne->getName() . ' wear ' . $userOne->getWatch()->getBrand();
