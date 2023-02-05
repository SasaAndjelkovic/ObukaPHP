<?php

require "../dbBroker.php";
require "../model/prijava.php";

if(isset($_POST['checked-donut'])) {
    $prijava = new Prijava($_POST['checked-donut']);
    $status = $prijava->obrisi($conn);

    if($status) {
        header("Location: ../home.php");
        exit();
    }
}

?>