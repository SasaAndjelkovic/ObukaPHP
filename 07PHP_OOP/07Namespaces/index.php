<?php

//klasa proizvod -> id, cena, naziv, kat
//klasa kategorija - > id naziv
//zajednicke metode -> apstraktna klasa

require "app/templetes/ModelTemplete.php"; //ucitavamo pre Category and Item 
require "app/models/Category.php";
require "app/models/Item.php";

$kat = new Category(1,"Monitor");
$proizvod1 = new Item(1, "Philips", 350, $kat);
print_r($proizvod1->getCategory());