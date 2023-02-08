<?php

require "dbBroker.php";  //najpre bazu
require "model/user.php";

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $korisnik = new User(1, $username, $password);
    $odgovor = User::loginUser($korisnik, $conn);
    print_r($odgovor);
    //vraca neki result set iz baze 
    //-- mysqli_result Object ( [current_field] => 0 [field_count] => 3 [lengths] => [num_rows] => 0 [type] => 0 )

    if($odgovor->num_rows == 1) {
        $_SESSION['user_id'] = $korisnik->id;
        header("Location: home.php");
        exit();
    } else
        echo "User ne postoji!";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>FON: Zakazivanje kolokvijuma</title>

</head>
<body>
    <div class="login-form">
        <div class="main-div">
            <form method="POST" action="#">
                <div class="container">
                    <label class="username">Korisnicko ime</label>
                    <input type="text" name="username" class="form-control"  required>
                    <br>
                    <label for="password">Lozinka</label>
                    <input type="password" name="password" class="form-control" required>
                    <button type="submit" class="btn btn-primary" name="submit">Prijavi se</button>
                </div>

            </form>
        </div>

        
    </div>
</body>
</html>