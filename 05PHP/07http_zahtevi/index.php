<?php
if (isset($_GET["login"])) {
    if (strlen($_GET["username"]) > 1 && strlen($_GET["password"]) > 1) {
        header("Location:home.php");
        exit();
    } else {
        echo "Prosledili ste praznu formu!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forme</title>
</head>

<body>
    <form action="">
        <h3>Login forma</h3>
        <input type="text" name="username" id="username" placeholder="Username:"><br>
        <input type="password" name="password" id="password" placeholder="Password: "><br>
        <input type="submit" name="login" value="Login">
    </form>
    <form action="home.php" method="post">
        <h2>Forma za registraciju</h2>
        <label for="ime">Ime: </label>
        <input type="text" name="ime" id="ime"><br>
        <label for="prezime">Prezime: </label>
        <input type="text" name="prezime" id="prezime"><br>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email"><br>
        <label for="pass">Password: </label>
        <input type="password" name="pass" id="pass">
        <input type="password" name="re-pass" id="re-pass"><br>
        <input type="submit" name="register" value="Register">
    </form>

</body>

</html>