<?php

$name = "";
$email = "";
$comment = "";
$gender = "";
$nameErr = $emailErr = $genderErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        //vezano za span u get.php
    } else {
        $name = test_inputs($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_inputs($_POST["email"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_inputs($_POST["gender"]);
    }

    if (empty($_POST["comment"])) {
        $comment = "--No comment";
    } else {
        $comment = test_inputs($_POST["comment"]);
    }
}

function test_inputs($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
