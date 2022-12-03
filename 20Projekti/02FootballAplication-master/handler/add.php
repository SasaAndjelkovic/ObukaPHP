<?php
require "../dbBroker.php";
require "../model/tim.php";

if (isset($_POST['nazivTima']) && isset($_POST['drzava']) 
    && isset($_POST['godinaOsnivanja']) && isset($_POST['brojTitula'])) {
    $status = Tim::add($_POST['nazivTima'], $_POST['drzava'], $_POST['godinaOsnivanja'], $_POST['brojTitula'], $conn);
    if ($status) {
        echo 'Success';
    } else {
        echo $status;
        echo 'Failed';
    }
}