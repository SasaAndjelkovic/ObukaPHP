<?php
require "dbBroker.php";
require "model/user.php";

session_start();

if(isset($_POST['username'])&& isset($_POST['password'])){
    $name = $_POST['username'];
    $password = $_POST['password'];

    $rs = User::logIn($name, $password, $conn);
    
    if($rs->num_rows==1){
        echo "Uspesno ste se prijavili";
        $_SESSION['loggeduser'] = "prijavljen";
        $_SESSION['id'] = $rs->fetch_assoc()['id'];
        header('Location: home.php');
        exit();
    } else{
        //promeni 
        echo '<script type="text/javascript">alert("Pogresni podaci za login");
                    window.location.href = "http://localhost/PhpAjaxMySQL/";</script>';
                exit();
                }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet--->
    <link rel="icon" href="image/logo.png"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Fudbalski timovi</title>
</head>

<body>
    <div class="login-form">
        <div class="main-div">
        <form method="POST" action="#">
            <h1>FUDBALSKI TIMOVI</h1>
            <div class="imgcontainer">
                <img src="image/logoo.png" >
            </div>
            <div class = "container">
                <input type="text" placeholder="Username" name="username" class="form-control" required>
                <br>
                <input type="password" placeholder="Password" name="password" class="form-control" required>
                <br>
                <button class="btn" type="sumbit" >Prijavi se</button>
            </div>
        </form>
    </div>
</body>

</html>