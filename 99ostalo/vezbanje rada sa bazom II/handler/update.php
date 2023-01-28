<?php

require "../dbBroker.php";
require "../model/course.php";

if(isset($_POST['idKursa']) && isset($_POST['nazivKursa']) && isset($_POST['provajderKursa']) && isset($_POST['cenaKursa']) && isset($_POST['opisKursa']) )  {
    $status = Tim::update
    ($_POST['idKursa'], $_POST['nazivKursa'], $_POST['provajderKursa'], $_POST['cenaKursa'], $_POST['opisKursa'], $conn);
    if($status) {
        echo "Uspesan";
        header("Location: ../home.php");
    } else {
        echo $status;
        echo "Nista";
    }
}