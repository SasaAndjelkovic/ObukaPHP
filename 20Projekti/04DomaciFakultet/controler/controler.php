<?php

class Kontroler{

    public static function ulogujKorisnika(Korisnik $korisnik){
        echo "<br>Ulogovan korisnik: " . $korisnik->getIme()." ".$korisnik->getPrezime();

    }

    public static function prikaziStudente(StudentDom ...$listastudenata){
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
            foreach($objekat as $naziv=>$vrednost){
                echo $vrednost."<br>";
                $reduTabeli .= "<td>" . $vrednost . "</td>";
            }
            $reduTabeli .= "</tr>";
        }
        $reduTabeli = "</tbody>";
        $tabela = "<table>" . $headertabele ." ". $reduTabeli . "</table>";

        return $tabela;
    }
}

?>