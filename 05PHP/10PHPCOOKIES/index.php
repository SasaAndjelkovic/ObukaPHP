<?php

//$_SESSION -> session_start();
//$_COOKIE -> setcookie();
if (isset($_POST['submit'])) {
    $username = $_POST['username'];

    //kreiranje kolacica na serverskoj strani
    setcookie('username', $username, time() + 60 * 60); //traje 1h

    header("Location: home.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookies</title>
</head>

<body>
    <h1>PHP Cookies</h1>
    <form method="POST">
        <input type="text" name="username" id="" placeholder="Username..."><br>
        <input type="submit" value="Login" name="submit">
    </form>

</body>

</html>