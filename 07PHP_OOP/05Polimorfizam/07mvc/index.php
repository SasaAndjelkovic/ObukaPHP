<?php

header("Content-type:text/plain");
// klasa proizvod -> id, cena, naziv
// klasa kategorija -> id naziv
// zajednicke metode -> apstraktna klasa

require "app/utility/Printing.php";
require "app/utility/Factory.php";

require "app/templates/ModelTemplate.php"; //bitno je prvo postaviti, od apstrakcije pa dalje

require "app/models/Category.php";
require "app/models/Item.php";

// use App\Models\Category;
// use App\Models\Item;
use App\Models\{Category, Item};

$kat = new Category (1, "Monitor");
$proizvod1 = new Item (1, "Philips", 350, $kat);
$proizvod2 = new Item (2, "Samsung", 1000, $kat);
$proizvod3 = new Item (3, "Siemens", 1000, $kat);
// print_r($proizvod1->getCategory());

echo $proizvod1->print();
Item::create($proizvod1);
Item::create($proizvod2);
Item::create($proizvod3);
echo "\r\n Itemi: \r\n"; //escape karakteri za novi red (text plain, ne html)
print_r(Item::$lista);