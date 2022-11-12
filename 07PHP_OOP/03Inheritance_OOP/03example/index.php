<?php

// User has a name
// Laptop has a model (string)
// Laptop has a processor
// Processor has a name
// Display user, laptop and processor he owns

class Processor
{
    private string $nameProcessor;

    function getNameProcessor()
    {
        return $this->nameProcessor;
    }

    function setNameProcessor($nameProcessor)
    {
        $this->nameProcessor = $nameProcessor;
    }
}

class Laptop
{
    private string $model;
    private Processor $laptopNameProcessor;

    function getModel()
    {
        return $this->model;
    }

    function getLaptopNameProcessor()
    {
        return $this->laptopNameProcessor;
    }

    function setModel($model)
    {
        $this->model = $model;
    }

    function setLaptopNameProcessor($laptopNameProcessor)
    {
        $this->laptopNameProcessor = $laptopNameProcessor;
    }
}

class User
{
    public string $name;

    function getName()
    {
        return $this->name;
    }

    function setName($name)
    {
        $this->name = $name;
    }
}

$processorOne = new Processor;
$processorOne->setNameProcessor("Intel");
$laptopOne = new Laptop;
$laptopOne->setModel("HP");
$laptopOne->setLaptopNameProcessor($processorOne);
$userOne = new User;
$userOne->setName("Sinji Andjelko");
echo $userOne->getName() . " ima laptop modela " . $laptopOne->getModel() . " sa procesorom " . $processorOne->getNameProcessor();
