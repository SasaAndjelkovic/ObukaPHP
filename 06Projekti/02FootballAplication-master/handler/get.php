<?php

require "../dbBroker.php";
require "../model/tim.php";

if(isset($_POST['timID'])) {
    $myArray = Tim::getById($_POST['timID'], $conn);
    echo json_encode($myArray);
}
?>