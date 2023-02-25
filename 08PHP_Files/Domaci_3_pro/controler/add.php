<?php

require "../model/show.php";
require "../dbBroker.php";

echo ($_POST['showName']);
echo ($_POST['avatar']);
if (isset($_POST['showName']) && isset($_POST['description']) && isset($_POST['author']))   // && isset($_POST['avatarID'])
    echo "Bravo";
    $status =Show::add($_POST['showName'], $_POST['description'], $_POST['author'], $_POST['avatar'], $conn);
    if ($status) {
        echo "Success";
        header("Location: ../view/home.php");
    } else {
        echo $status;
        echo "Failed";
    }