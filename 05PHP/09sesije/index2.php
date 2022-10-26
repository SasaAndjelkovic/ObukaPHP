<?php

require "dbBroker.php";

session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $uname = $_POST['username'];
    $upass = $_POST['password'];
    $user_id = 1;

    foreach ($baza as $ue) {
        if ($ue['username'] == $uname && $ue['password'] == $upass) {
            header('Location: prodavnica.php');
            exit();
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Login</title>

</head>

<body>
    <div>
        <div>
            <form method="POST" action="#">
                <div class="container">
                    <label class="username">Korisnicko ime</label>
                    <input type="text" name="username" required>
                    <br>
                    <label for="password">Lozinka</label>
                    <input type="password" name="password" required>
                    <button type="submit" name="submit">Prijavi se</button>
                </div>


            </form>
        </div>


    </div>
</body>