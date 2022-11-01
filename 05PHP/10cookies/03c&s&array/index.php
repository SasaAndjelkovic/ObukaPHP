<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            text-align: center;
            background-color: beige;
        }
    </style>
</head>
<h3>FIRST REAL LOGIN</h3>
<form action="loginValidatation.php" method="POST">
    <div>
        <input type="email" name="email" placeholder="Unesi mail..."><br><br>
    </div>
    <div>
        <input type="password" name="password" placeholder="Unesi sifru..."><br><br>
    </div>
    <div>
        <input type="text" name="name" placeholder="Unesi ime..."><br><br>
    </div>
    <input type="checkbox" name="remember">Zapamti me<br><br>
    <input type="submit" value="Login" name="submit">
</form>


<body>

</body>

</html>