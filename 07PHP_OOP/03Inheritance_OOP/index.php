<?php

include("./commonClasses.php");

$calculatorOne = new Calculator("Digitron", 1, 1);
$userOne = new User();
$userOne->setName("Sinji Andjelko");
$userOne->setCalculator($calculatorOne);

// prva verzija
// echo $userOne->getName() . " user calculator " . $userOne->getCalculator()->getName();
// Sinji Andjelko user calculator Digitron

// druga verzija
$calculatorOne->setName("Casio");
// echo $userOne->getName() . " user calculator " . $userOne->getCalculator()->getName();
// Sinji Andjelko user calculator Casio

// treca verzija
$userOne->getCalculator()->setName("Philips");
echo $userOne->getName() . " user calculator " . $userOne->getCalculator()->getName();
// Sinji Andjelko user calculator Philips
echo '<br>' . $calculatorOne->getName();
// Philips