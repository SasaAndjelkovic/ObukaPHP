<form action="" method="post">
    <input type="text" placeholder="email" id="email" name="email">
    <input type="text" placeholder="sifra" id="sifra" name="sifra">
    <input type="submit" value="Loguj se" id="login" name="login">
</form>

<?php

include "../loaddata.php";



if (isset($_SESSION["logovani_korisnik"])) {
    header("Location:../");
} else {
    if (isset($_POST["login"])) {
        if ($_POST["email"] == "" || $_POST["sifra"] == "") {
            echo "Morate uneti email i sifru";
        } else {
            $_SESSION['logovani_korisnik'] = Kontroler::login($_POST["email"], $_POST["sifra"], $conn);
            header("Location: ../");
            exit();
        }
    }
}



?>