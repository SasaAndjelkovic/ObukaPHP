<?php
include_once "controler/controlerPredmet.php";
if (isset($_POST['naziv']) && isset($_POST['sifra']) && isset($_POST['nivoStudija']) && isset($_POST["submit"]) && $_POST['submit'] == "Sacuvaj")
    ControlerPredmet::sacuvaj($conn, $_POST["naziv"], $_POST['nivoStudija'], $_POST['sifra']);
if (isset($_POST['naziv']) && isset($_POST['sifra']) && isset($_POST['nivoStudija']) && isset($_POST['submit']) && $_POST['submit'] == 'Azuriraj') {
    ControlerPredmet::azuriraj($conn, $_POST['sifra'], $_POST['naziv'], $_POST['nivoStudija']);
}
if (isset($_POST['sifra']) && isset($_POST['submit']) && $_POST['submit'] == "Obrisi") {
    ControlerPredmet::obrisiPredmet($conn, $_POST['sifra']);
}
function vratiSvePredmete()
{
    global $conn;
    $predmeti = ControlerPredmet::vratiSvePredmete($conn);
    if ($predmeti != null) {
        $kljucevi = array_keys((array) $predmeti[0]);
        Kontroler::prikaziTabelu($predmeti, $kljucevi);
    }
}

echo "<br> administratorski sadrzaj"
?>

<div style="display: flex; justify-content: space-around;">
    <div>
        <h1>Dodaj predmet</h1>
        <form action="" method="post">
            <label for="sifra"> Šifra:</label><br>
            <input type="text" id="sifra" name="sifra"><br>
            <label for="naziv">Naziv:</label><br>
            <input type="text" id="naziv" name="naziv"><br>
            <label for="nivoStudija"> Nivo studija:</label><br>
            <input type="text" id="nivoStudija" name="nivoStudija"><br><br>
            <input type="submit" name="submit" value="Sacuvaj">
        </form>
    </div>
    <div>
        <h1>Azuriraj predmet</h1>
        <form action="" method="post">
            <label for="sifra"> Šifra:</label><br>
            <input type="text" id="sifra" name="sifra"><br>
            <label for="naziv">Naziv:</label><br>
            <input type="text" id="naziv" name="naziv"><br>
            <label for="nivoStudija"> Nivo studija:</label><br>
            <input type="text" id="nivoStudija" name="nivoStudija"><br><br>
            <input type="submit" name="submit" value="Azuriraj">
        </form>
    </div>
    <div>
        <a href="?prikazi"><button>Prikazi predmete</button></a>
        <?php
        if (isset($_GET['prikazi']))
            vratiSvePredmete();
        ?>
    </div>
    <div>
        <h1>Obrisi</h1>
        <form action="" method="post">
            <label for="sifra"> Šifra:</label><br>
            <input type="text" id="sifra" name="sifra"><br><br>
            <input type="submit" name="submit" value="Obrisi">
        </form>
    </div>
</div>
<hr>
<!-- controlerProfesor -->
<!-- controlerStudenat -->