<?php

require "db.php";
require "../model/Response.php";

$conn = DB::connectDB();

// registracija korisnika
if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $response = new Response();
    $response->addMessage("Only POST method is allowed");
    $response->send();
    exit;
}

$rawPostData = file_get_contents('php://input');

$jsonData = json_decode($rawPostData);

//provera podataka
if(!isset($jsonData->fullname)|| !isset($jsonData->username) || !isset($jsonData->fullname)) {
    $response = new Response();
    $response->setHttpStatusCode(400);
    $response->setSuccess(false);
    $response->addMessage("Missing fullname, username or password");
    $response->send();
    exit;
}

if(strlen($jsonData->fullname) < 1 || strlen($jsonData->username) < 1 || !isset($jsonData->fullname) < 5) {
    $response = new Response();
    $response->setHttpStatusCode(400);
    $response->setSuccess(false);
    $response->addMessage("Fullname, username or password not long enough");
    $response->send();
    exit;
}

$fullname = trim($jsonData->$fullname);
$username = trim($jsonData->$username);
$password = $jsonData->$password;

try{
    $query = "SELECT id FROM tblusers WHERE username='$username'";
    $result = $conn->query($query);
    $rowCount = mysqli_num_rows($result);
    if($rowCount !== 0) {
        $response = new Response();
        $response->setHttpStatusCode(409);
        $response->setSuccess(false);
        $response->addMessage("Username already exists");
        $response->send();
        exit;
    }

    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

    //dodavanje korisnika
    $query = "INSERT INTO tblusers (fullname, username, password) VALUES ('$fullname', '$username', '$hashed_pass')";
    $inserted = $conn->query($query);

    if($inserted === false) {
        $response = new Response();
        $response->setHttpStatusCode(500);
        $response->setSuccess(false);
        $response->addMessage("Error creating user");
        $response->send();
        exit; 
    }

    $returnData = array();
    $returnData['fullname'] = $fullname;
    $returnData['username'] = $username;

    $response = new Response();
        $response->setHttpStatusCode(201);
        $response->setSuccess(true);
        $response->addMessage("User created");
        $response->setData($returnData);
        $response->send();
        exit; 

}
catch(Exception $ex){
    //implementirati ponasanje programa u slucaju greske
    $response->setHttpStatusCode(500);
    $response->setSuccess(false);
    $response->addMessage("There was an issue creating user");
    $response->send();
    exit; 
}