<?php

include("./commonClasses.php");

$draganasVehicle = new Vehicle();
$draganasVehicle->setManufacturer("Volvo");
echo $draganasVehicle->getManufacturer();
$draganasVehicle->setType("car");
echo "<br>";

$milicaVehicle = new Vehicle();
$milicaVehicle->setManufacturer("BMW");
echo $milicaVehicle->getManufacturer();
echo "<br>";


echo "<br> Hello World";
echo "<br>";

echo Student::sayHi();
echo "<br>";
$studentOne = new Student("Mario", "Super", 18);
// $studentOne->setName("Mario");
$studentOne->doExam();
// $studentOne->lastName = "NotSuper";
echo $studentOne->getStatus();
$studentOne->setName('Luigi');
$studentOne->doExam();
echo "<br>";
echo $studentOne->getStatus();
