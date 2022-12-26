<form action="" method="post">
    <input type="text" placeholder="email" id="email" name="email">
    <input type="text" placeholder="sifra" id="sifra" name="sifra">
    <input type="submit" value="Loguj se" id="login" name="login">
</form>

<?php

include "../loaddata.php";

if(isset($_SESSION["logovani_korisnik"])){
    header("Location:../");  //ne mora index.php
} else {
    if (isset($_POST["login"])) {
        if ($_POST["email"] == "" || $_POST["sifra"] == "") {
            echo "Morate uneti email i sifru";
        } else {
            foreach ($_SESSION["users"] as $korisnik) {
                if ($korisnik->getEmail() == $_POST["email"] && $korisnik->getSifra() == $_POST["sifra"]) {
                    $_SESSION["logovani_korisnik"] = $korisnik;
                    echo "Ulogovani korisnik: " . $_SESSION["logovani_korisnik"]->getIme();
                    header("Location:../");
                    break;
                } else {
                    echo "Korisnik ne postoji";
                }
            }
        }

    }
}