<form action="" method="post">
    <input type="text" placeholder="email" id="email" name="email">
    <input type="text" placeholder="sifra" id="sifra" name="sifra">
    <input type="submit" value="Loguj se" id="login" name="login">
</form>

<?php

include "../loaddata.php";


if(isset($_SESSION["logovani_korisnik"])){
    header("Location:../");
} else {
    //2. proveravamo da li su input polja popunjena
    if (isset($_POST["login"])) {
        if ($_POST["email"] == "" || $_POST["sifra"] == "") {
            echo "Morate uneti email i sifru";
        } else {
           //3. pozivamo staticku metodu iz Kontroler koja se zove login
           $_SESSION['logovani_korisnik'] = Kontroler::login($_POST["email"], $_POST['sifra'], $conn);
            header("../"); //povratna vrednost, na index
            exit();
        }    
    }
}

?>