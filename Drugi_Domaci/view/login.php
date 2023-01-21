<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="login-form">
        <div class="main-div">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="container">
                    <input type="text" placeholder="Username" id="fname" name="fname">
                    <br>
                    <input type="password" placeholder="Password" id="pass" name="pass">
                    <br>
                    <input type="submit" value="Log In" id="login" name="login">
                </div>
            </form>
        </div>
</body>
</html>





