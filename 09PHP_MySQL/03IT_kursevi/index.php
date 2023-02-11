<?php

require "dbBroker.php";
require "model/user.php";

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST["password"];

    $korisnik = new User(0, $username, $password, "Neko");

    $response = $korisnik->loginUser($conn);
    if ($response->num_rows == 1) {
        $_SESSION['user_id'] = $response->fetch_assoc()['id'];
        $korisnik->id = $response->fetch_assoc()['id'];
        $korisnik->name = $response->fetch_assoc()['name'];
        header("Location: home.php");
    } else
        exit();
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/monogram.png" />
    <title>CourceX</title>

</head>

<body>
    <div class="login-form">
        <div class="login-box">
            <div class="login-img">
                <img src="img/login-screen.png" alt="login image">
            </div>
            <div class="login-area">
                <form method="POST" action="#">
                    <div class="logo-login">
                        <img src="img/logo-black.png" alt="Logo" class="logo">
                    </div>
                    <div class="form-container">
                        <div class="input-with-icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input type="text" placeholder="Username" name="username" class="form-control" required>
                        </div>
                        <div class="input-with-icon">
                            <i class="fa fa-key" aria-hidden="true"></i>
                            <input type="password" placeholder="Password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>