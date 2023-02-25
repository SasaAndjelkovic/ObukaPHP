<?php

require "../model/show.php";
require "../dbBroker.php";

if (isset($_POST['showName']) && isset($_POST['description']) && isset($_POST['author'])) {
        $status = Show::update($_POST['showID'], $_POST['showName'], $_POST['description'], $_POST['author'], $_POST['avatar'], $conn);
    if ($status) {
        echo "Success";
        header("Location: ../view/home.php");
    } else {
        echo $status;
        echo "Failed";
    }
}