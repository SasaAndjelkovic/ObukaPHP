<?php
require "../dbBroker.php";
require "../model/course.php";

if (isset($_POST['id'])) {

    $status = Course::deleteById($_POST['id'], $conn);
    if ($status) {
        echo 'Success';
        header("Location: ../home.php");
    } else {
        echo 'Failed';
    }
}
