<?php

require "../dbBroker.php";
require "../model/course.php";

//iz index.php se uzima $_POST
if(isset($_POST['nazivKursa']) && isset($_POST['provajderKursa']) && isset($_POST['opisKursa']) && isset($_POST['cenaKursa']) )  {
    $status = Course::add($_POST['nazivKursa'], $_POST['provajderKursa'], $_POST['opisKursa'], $_POST['cenaKursa'], $conn);
    if($status) {
        echo "Uspesan";
        header("Location: ../home.php");
    } else {
        echo $status;
        echo "Nista";
    }
}