<?php

include("./commonClasses.php");

$sum = new Calculator("Pig", 23, 35);
$sum->addingTwoNumbers();
echo $sum->getResult() . "<br>";

$difference = new Calculator("Diet", 23, 35);
$difference->subtractingTwoNumbers();
echo $difference->getResult() . "<br>";

$product = new Calculator("Staphylococcus", 23, 35);
$product->multiplicationTwoNumbers();
echo $product->getResult() . "<br>";

$divide = new Calculator("Amoeba", 23, 35);
$divide->dividingTwoNumbers();
echo $divide->getResult() . "<br>";
