<?php

require "../dbBroker.php";
require "../model/show.php";

if (isset($_GET["izbrisi"])) {
    $status = Show::deleteById($_GET["izbrisi"], $conn);
    if ($status) {
        header("Location: ../view/home.php");
    } else
        echo "Filed";
}