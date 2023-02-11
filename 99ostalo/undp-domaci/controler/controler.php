<?php

class Kontroler{

    public static function login($email, $password, mysqli $conn) {
        $query = "SELECT * FROM administratori WHERE email='$email' AND sifra='$password';";
        //return $conn->query($query);
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            return $result->fetch_object();
        } else {
            echo "Korisnik ne postoji";
            return null;
        }
    }

    public static function ulogujKorisnika(Korisnik $korisnik){
        echo "<br>Ulogovan korisnik: " . $korisnik->getIme()." ".$korisnik->getPrezime();

    }

    public static function prikaziStudente(Studentt ...$listastudenata){
        foreach($listastudenata as $st):
            echo "Status studenta: ".$st->getStatus();
        endforeach;
    }

    public static function prikaziTabelu($objekti, $nazivi_atributa){
        $headertabele = "<thead><tr>";
        foreach($nazivi_atributa as $th){
            $headertabele .= "<th>$th</th>";
        }
        $headertabele .= " </tr></thead>";
        $reduTabeli = "<tbody>";
        foreach($objekti as $objekat){ //za svakog studenta u listi studenata
            $reduTabeli .= "<tr>";
            foreach($objekat->konvertujUNiz() as $naziv=>$vrednost){
                if(gettype($vrednost)!="array"){
                    // echo "<br>".$naziv.": ".$vrednost;
                    $reduTabeli .= "<td>" . $vrednost . "</td>";
                }
                
            }
            $reduTabeli .= "</tr>";
        }
        $reduTabeli.= "</tbody>";
        $tabela = "<table border='1'>" . $headertabele ." ". $reduTabeli . "</table>";

        echo $tabela;
    }
}

?>