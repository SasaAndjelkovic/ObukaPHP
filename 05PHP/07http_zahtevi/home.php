<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <?php
    if (isset($_POST["register"])) : ?>
        <p>
            Uspesna registracija <br>
            <b>Vase ime je: </b> <?php echo $_POST["ime"] ?> <br>
            <b>Vase prezime je: </b> <?php echo $_POST["prezime"] ?> <br>
            <b>Vas email je: </b> <?php echo $_POST["email"] ?> <br>
        </p>

    <?php elseif (isset($_GET["login"])) : ?>
        <p>Dobrodosli - <?php echo $_GET["username"]; ?> - na svoj email </p>
    <?php else : ?>
        <p>Nesto ne radi</p>
    <?php endif; ?>

    <a href="index.php">Home link</a>
</body>

</html>