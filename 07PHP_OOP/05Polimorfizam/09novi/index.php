<?php
// klasa proizvod -> id, cena, naziv
// klasa kategorija -> id naziv
// zajednicke metode -> apstraktna klasa

require "app/utility/Printing.php";

require "app/templates/ModelTemplate.php"; //bitno je prvo postaviti, od apstrakcije pa dalje

require "app/models/Category.php";
require "app/models/Item.php";

// use App\Models\Category;
// use App\Models\Item;
use App\Models\{Category, Item};

$kat = new Category (1, "Monitor");
$proizvod1 = new Item (1, "Philips", 350, $kat);
print_r($proizvod1->getCategory());

$proizvod1->print();