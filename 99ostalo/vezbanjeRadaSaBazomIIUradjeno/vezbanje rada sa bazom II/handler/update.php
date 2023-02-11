<?php
require "../dbBroker.php";
include "../model/course.php";

if (isset($_POST['idKursa']) && isset($_POST['nazivKursa']) && isset($_POST['provajderKursa']) && isset($_POST['opisKursa']) && isset($_POST['cenaKursa'])) {

    $kurs = new Course($_POST['idKursa'], $_POST['nazivKursa'], $_POST['provajderKursa'], $_POST['opisKursa'], $_POST['cenaKursa']);

    $status =  Course::update($kurs, $conn);

    if ($status) {
        echo "Success";
        header("Location: ../home.php");
    } else {
        print_r($status);
        echo "Failed";
    }
}
