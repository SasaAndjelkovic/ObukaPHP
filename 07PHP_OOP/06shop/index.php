<?php

require("Customer.php");
require("Product.php");

$c = new Customer(1, "Aleksa", "Miletic", 24, 1000);

$p1 = new Product(1, "Smoki", "grickalica", 90, 3);
$p2 = new Product(2, "Mars", "slatkis", 55, 10);
$p3 = new Product(3, "Nostalgija", "wine", 450, 5);

echo $c;

echo $p1;
echo $p2;
echo $p3;

echo "<br>Pocetak: " . $p1->getAmount() . "<br>";
$c->buyProduct($p1, 2);
// echo "<br>" . $p1->getAmount() . "<br>";
// $c->buyProduct($p1);
// echo "<br>" . $p1->getAmount() . "<br>";
// $c->buyProduct($p1);
// echo "<br>" . $p1->getAmount() . "<br>";
// $c->buyProduct($p1);
// echo "<br>" . $p1->getAmount() . "<br>";
// $c->buyProduct($p2);
// echo "<br>" . $p2->getAmount() . "<br>";

echo $c->getMoney();

