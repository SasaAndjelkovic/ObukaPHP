<?php
$niz_proizvoda = array(
    array(
        "id" => 1,
        "name" => "Laptop 1",
        "price" => 1500
    ),
    array(
        "id" => 2,
        "name" => "Laptop 2",
        "price" => 1250
    ),
    array(
        "id" => 3,
        "name" => "Laptop 3",
        "price" => 1000
    ),
    array(
        "id" => 4,
        "name" => "Keyboard 1",
        "price" => 150
    ),
    array(
        "id" => 5,
        "name" => "Keyboard 2",
        "price" => 100
    ),
    array(
        "id" => 6,
        "name" => "Keyboard 3",
        "price" => 50
    ),
    array(
        "id" => 7,
        "name" => "Monitor 1",
        "price" => 400
    ),
    array(
        "id" => 8,
        "name" => "Monitor 2",
        "price" => 250
    )
);

$search_niz = array();

session_start();

if (!isset($_SESSION['korpa'])) {
    $_SESSION['korpa'] = array();
}

if (isset($_POST['submit']) && $_POST['submit'] == "Add") {
    $_SESSION['korpa'][] = $_POST['id'];
    header('Location: prodavnica.php');
    exit();
}

if (isset($_GET['vidi_korpu'])) {
    $korpa = array();
    $suma = 0;
    foreach ($_SESSION["korpa"] as $id) {
        foreach ($niz_proizvoda as $pr) {
            if ($pr['id'] == $id) {
                $korpa[] = $pr;
                $suma += $pr['price'];
            }
        }
    }

    require __DIR__ . "/search/korpa.php";
    exit();
}

//kod od prethodnog casa

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["name"]) && !empty($_GET["name"])) {
        $search_niz = array();
        $search_q = htmlspecialchars($_GET["name"]);
        $search_q = trim($search_q);
        $search_q = strtolower($search_q);
        foreach ($niz_proizvoda as $proizvod) {
            if (str_contains(strtolower($proizvod["name"]), $search_q)) {
                $search_niz[] = $proizvod;
            }
        }
        require __DIR__ . "/search/katalog.php";
        exit();
    } elseif (isset($_GET["low-price"]) || isset($_GET["high-price"])) {
        $search_niz = array();
        $lowest = $higest = 0;
        if (!empty($_GET["low-price"])) {
            $lowest = intval($_GET["low-price"]);
        } else {
            $lowest = 0;
        }
        if (!empty($_GET["high-price"])) {
            $higest = intval($_GET["high-price"]);
        } else {
            $higest = 1000000;
        }
        foreach ($niz_proizvoda as $proizvod) {
            if ($proizvod["price"] > $lowest && $proizvod["price"] < $higest) {
                $search_niz[] = $proizvod;
            }
        }
        require __DIR__ . "/search/katalog.php";
        exit();
    } else {
        $search_niz = $niz_proizvoda;
        require __DIR__ . "/search/katalog.php";
        exit();
    }
}
