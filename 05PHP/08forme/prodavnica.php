<?php

$niz_proizvoda = array(
    array(
        "id" => 1,
        "name" => "Laptop",
        "prica" => 1500
    ),
    array(
        "id" => 2,
        "name" => "Keyboard",
        "prica" => 150
    ),
    array(
        "id" => 3,
        "name" => "Keyboard2",
        "prica" => 300
    ),
    array(
        "id" => 4,
        "name" => "Laptop",
        "prica" => 1500,
    ),
    array(
        "id" => 5,
        "name" => "Laptop",
        "prica" => 1500,
    ),
    array(
        "id" => 6,
        "name" => "Laptop",
        "prica" => 1500
    )
);

$search_niz = array();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["name"])) {
        $search_proizvodi = array();
        $search_q = htmlspecialchars($_GET["name"]);
        $search_q = trim($search_q);
        $search_q = strtolower($search_q);
        foreach ($niz_proizvoda as $proizvod) {
            if (str_contains(strtolower($proizvod["name"]), $search_q)) {
                $search_proizvodi[] = $proizvod;
            }
        }
        echo "Ispisani laptopovi";
        exit();
    } else {
        require __DIR__ . "/search/katalog.php";
        exit();
    }
}

require __DIR__ . "/search/katalog.php";
