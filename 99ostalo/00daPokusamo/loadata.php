<?php

require "model/abstructCustomer.php";
require "model/customer.php";
require_once "model/product.php";
require "model/orderNIsamSiguran.php";
require_once "model/minorPerson.php";
require_once "model/pensioner.php";
require_once 'model/adult.php';

//session start

$c = new Customer(1, "Aleksa", "Miletic", 24, 10000);
$mp = new MinorPerson(2, "Pera", "Peric", 15, 2000);

$p1 = new Product(1, "Smoki", 'sweet', 90, 30);
$p2 = new Product(2, "Smederevka", 'wine', 600, 50);
$p3 = new Product(3, "Chocolate", 'sweet', 110, 10);

echo $c;

echo $p1;
echo $p2;
echo $p3;

//first class

// echo "<br>Procetak:" . $p1->getAmount() . "<br>";
// $c->buyProduct($p1, 4);
// echo "<br>" . $p1->getAmount() . "<br>";
// $c->buyProduct($p1);
// echo "<br>" . $p1->getAmount() . "<br>";
// $c->buyProduct($p1);
// echo "<br>" . $p1->getAmount() . "<br>";
// $c->buyProduct($p1);
// echo "<br>" . $p1->getAmount() . "<br>";
// $c->buyProduct($p2);
// echo "<br>" . $p2->getAmount() . "<br>";
// $c->buyProduct($p2);
// $c->buyProduct($p2);
// echo $c->getMoney();


//second class
$o = new Order();
$o2 = new Order();

$o->addProduct($p1);
// echo $o;
$o->addProduct($p1, 2);
// echo $o;
$o->addProduct($p2, 3);
$c->buy($o);

$o2->addProduct($p1, 4);
$o2->addProduct($p3, 2);

echo $mp->buy($o2);

$p = new Pensioner(3, "Marko", "Markovic", 75, 3000);
$o3 = new Order();
$o3->addProduct($p2, 6);
$p->buy($o3);
echo $p->getMoney();
// echo $o;

echo $p;


//third class
$a = new Adult(3, "Mirko", 'Mirkovic', 35, 10000);
echo "<br><br>";
echo $a->buy($o);

// $mp->payWithCard();
$a->payWithCard();
$p->payWithCard();