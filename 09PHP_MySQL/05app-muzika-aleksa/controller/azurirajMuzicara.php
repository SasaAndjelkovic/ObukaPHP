<?php

require "../dbBroker.php";
require "../model/muzicar.php";

if(isset($_POST['id']) && isset($_POST['ime']) &&
isset($_POST['prezime']) && isset($_POST['instrument'])){
    $status = Muzicar::update($_POST['id'], $_POST['ime'],
    $_POST['prezime'], $_POST['instrument'], $conn);
    if($status){
        echo 'Success';
    } else{
        echo $status;
        echo "Failed";
    }
}

?>