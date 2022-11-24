<?php

require("Customer.php");
require("Product.php");
require "Order.php";
require "MinorPerson.php";
require "Pensioner.php";

$c = new Customer(1, "Aleksa", "Miletic", 24, 10000);

$p1 = new Product(1, "Smoki", "grickalica", 90, 3);
$p2 = new Product(2, "Mars", "slatkis", 55, 10);
$p3 = new Product(3, "Nostalgija", "wine", 450, 5);

echo $c;

echo $p1;
echo $p2;
echo $p3;

//first class

// echo "<br>Pocetak: " . $p1->getAmount() . "<br>";
// $c->buyProduct($p1, 2);
// echo "<br>" . $p1->getAmount() . "<br>";
// $c->buyProduct($p1);
// echo "<br>" . $p1->getAmount() . "<br>";
// $c->buyProduct($p1);
// echo "<br>" . $p1->getAmount() . "<br>";
// $c->buyProduct($p1);
// echo "<br>" . $p1->getAmount() . "<br>";
// $c->buyProduct($p2, 11);
// echo "<br>" . $p2->getAmount() . "<br>";

// echo $c->getMoney();



//second class

$o = new Order();
$o->addProduct($p1);
echo $o;
$o->addProduct($p1, 2);
echo $o;
$o->addProduct($p1);
echo $o;

$c->buy($o);

$o2 = new Order();
$o2->addProduct($p1, 4);
$o2->addProduct($p3, 2);

// $m = new MinorPerson(2, "Sasa", "Andjelkovic", 14, 2000);
// $m->buy($o2); 

// $p = new Pensioner(3, "Marko", "Markovic", 85, 3000);
// $o3 = new Order();
// $o3->addProduct($p2, 6);
// $p->buy($o3);

