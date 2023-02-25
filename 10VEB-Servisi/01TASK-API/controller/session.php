<?php

require "db.php";
require "../model/Response.php";

$conn = DB::connectDB();

// ruta 1: /sessions/3 DELETE  kada istakne
// ruta 2: /sessions/4 PATCH   tada i promeniti
// ruta 3: /sessions   POST    prvo pravimo sesiju

if(isset($_GET['sessionid'])){
    //implementiramo DELETE i PATCH
}else{
    //implementiramo POST
    if($_SERVER['REQUEST_METHOD'] !== 'POST') {
        $response = new Response();
        $response->addMessage("Only POST method is allowed");
        $response->send();
        exit;
    }

    $rowPostData = file_get_contents('php://input');
    $jsonData = json_decode($rowPostData);

    //provera podataka
    if(!isset($jsonData->username) || !isset($jsonData->fullname)) {
        $response = new Response();
        $response->setHttpStatusCode(400);
        $response->setSuccess(false);
        $response->addMessage("Missing username or password");
        $response->send();
        exit;
    }
    
    if(strlen($jsonData->username) < 1 || !isset($jsonData->fullname) < 5) {
        $response = new Response();
        $response->setHttpStatusCode(400);
        $response->setSuccess(false);
        $response->addMessage("Username or password not long enough");
        $response->send();
        exit;
    }
    
    $username = trim($jsonData->$username);
    $password = $jsonData->$password;

    try {
        $query = "SELECT id, fullname, username, password, useractive, loginattempts FROM tblusers WHERE username='$username'";
        $result = $conn->query($query);
        $rowCount = mysqli_num_rows($result);
        if($rowCount === 0) {   //ovde nam odgovora da imamo usera
            $response = new Response();
            $response->setHttpStatusCode(409);
            $response->setSuccess(false);
            $response->addMessage("Username or password is incorrect");  //dobra praksa
            $response->send();
            exit;
        }

        $row = $result->fetch_assoc();
        $db_id = $row['id'];
        $db_fullname = $row['fullname'];
        $db_username = $row['username'];
        $db_password = $row['password'];
        $db_useractive = $row['useractive'];
        $db_loginattempts = $row['loginattempts'];

        if(!password_verify($password, $db_password)) {
            //implementacija login attemps
            $query = "UPDATE tblusers SET loginattempts = $db_loginattempts + 1 WHERE id = $db_id";
            $result = $conn->query($query);

            $response = new Response();
            $response->setHttpStatusCode(409);
            $response->setSuccess(false);
            $response->addMessage("Username or password is incorrect");  //dobra praksa
            $response->send();
            exit;
        } 

        //uspesan login
        //treba da pokrenemo sesiju

        //generisanje access token
        $accesstoken = base64_encode(bin2hex(openssl_random_pseudo_bytes(24)));
        $refreshtoken = base64_encode(bin2hex(openssl_random_pseudo_bytes(24)));

        $access_expiry = 1800; // 30 minuta
        $refresh_expiry = 1800000; // oko 3 nedelje

    } catch (Exception $ex) {

    }

    $conn->begin_transaction();  //oba query-ija zajedno

    try {
        //resetovanje loginattemps na vrednost 0
        $query = "UPDATE tblusers SET loginattempts = 0 WHERE id = $db_id";
        $conn->query($query);

        //kreiranje sesije
        $query = "INSERT INTO tblsessions (userid, accesstoken, accessexpiry, refreshtoken, refreshexpiry) 
        VALUES ($db_id, '$accesstoken', DATE_ADD(now(), INTERVAL $access_expiry SECOND), 
        '$refreshtoken', '$refreshtoken', DATE_ADD(now(), INTERVAL $access_expiry SECOND))";

        $conn->query($query);

        //brz nacin da pronadjemo id sesije koja je poslednja dodata
        $last_id = $conn->insert_id;

        $conn->commit();

        $returnData = array();
        $returnData['session_id'] = intval($last_id);
        $returnData['accesstoken'] = $accesstoken;
        $returnData['refreshtoken'] = $refreshtoken;

        $response = new Response(); 
        $response->setHttpStatusCode(201);
        $response->setSuccess(true);
        $response->addMessage("User logged in, access token created");
        $response->setData($returnData); 
        $response->send();
        exit;
    }

    catch(Exception $ex) {
        //ponistavanje promene nad bazom
        $conn->rollback();
        //response
        $response = new Response(); 
        $response->setHttpStatusCode(500);
        $response->setSuccess(false);
        $response->addMessage("Error logging useer");
        $response->send();
    }

}