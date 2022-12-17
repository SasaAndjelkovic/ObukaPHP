<?php

//insert
if (isset($_POST['dodaj'])) {
    $student = [
        "ime" => $_POST['ime'],
        "prezime" => $_POST['ime'],
        "id" => $_POST['indeks'],
        "grad" => "Beograd",
        "smer" => "prog",
    ];

    $insertRez = $coll_students->insertOne($student);
}

//delete
?>