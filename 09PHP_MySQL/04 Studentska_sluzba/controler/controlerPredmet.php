<?php

class ControlerPredmet
{
    // dodavanje predmete
    //brisanje predmeta
    //azuriranje
    //vracanje svih predmeta
    public static function sacuvaj($conn, $naziv, $nivoStudija, $sifra)
    {
        $sql = "INSERT INTO predmet (naziv, sifra, nivoStudija) VALUES ('$naziv', '$sifra','$nivoStudija')";
        $result = $conn->query($sql);

        if ($result === TRUE) {
            echo "Predmet je dodat!";
        } else {
            echo "Greska! Predmet nije dodat!";
        }
    }
    public static function azuriraj($conn, $sifra, $naziv, $nivoStudija)
    {
        $sql = "UPDATE predmet
        SET naziv = '$naziv', nivoStudija = '$nivoStudija'
        WHERE sifra = '$sifra';";

        $result = $conn->query($sql);

        if ($result === TRUE) {
            echo "Predmet je azuriran.";
        } else {
            echo "Predmet nije azuriran.";
        }
    }

    public static function vratiSvePredmete($conn)
    {
        $sql = "SELECT * FROM predmet";
        $result = $conn->query($sql);
        $array = [];
        if ($result !== FALSE && $result->num_rows > 0) {
            while ($obj = $result->fetch_object()) {
                $predmet = new Predmet($obj->naziv, $obj->sifra, $obj->nivoStudija);
                array_push($array, $predmet);
            }
            return $array;
        }
        return null;
    }

    public static function obrisiPredmet($conn, $sifra)
    {
        $sql = "DELETE FROM predmet WHERE sifra='$sifra'";

        $result = $conn->query($sql);
        if ($result === TRUE) {
            echo "Predmet je obrisan!";
        } else {
            echo "Predmet nije obrisan!";
        }
    }
}
