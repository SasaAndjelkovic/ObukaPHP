<?php

require "dbBroker.php"; 
include "model/manager.php";
include "model/show.php";
include "model/avatar.php";

if (!isset($_SESSION))
    session_start();

if (isset($_POST['fname']) && isset($_POST['pass'])) {
    $username = $_POST['fname'];
    $password = $_POST['pass'];

    $manager = new Manager(1, $username, "masha.neshkovic@gmail.com", $password);
    $odgovor = Manager::loginManager($manager, $conn);

    if($odgovor->num_rows == 1) {
        header("Location: view/home.php");
        exit();
    } else
        echo "User ne postoji!";
    
    //     if ($manager->getName() == $username && $manager->getPass() == $password) {
    //     $_SESSION['user'] = $username;
    //     include "view/home.php";
    //     exit();
    // }
}

?>

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




