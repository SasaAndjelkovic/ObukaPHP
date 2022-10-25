<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meeting page</title>
</head>

<body>
    <p>
        <!-- POST method -->
        Welcome <?php echo $_POST["name"]; ?> <br>
        Registred email address: <?php echo $_POST["email"]; ?> <br>
        <?php print_r($_POST); ?>

        <!-- GET method -->
        <!-- Welcome <?php echo $_GET["name"]; ?> <br>
        Registred email address: <?php echo $_GET["email"]; ?> -->
    </p>
</body>

</html>