<?php

trait Welcome {


    static function datum() {
        $datum = date ("l jS \of F Y h:i:s A");
        return $datum;
        }
        
    static function quantity() {
        $quantity = rand(1, 100);
        return $quantity;
        }
        
    static function poruka() {
        $msg = "Izvestaj o prodaji se sastoji od dva podataka: datum izvestaja i kolicina prodaje"; 
        return strtoupper($msg);
    }
}

echo "<h1>Izvestaj o prodaji</h1>";
echo Welcome::poruka();
echo "<hr>";
echo Welcome::datum();
echo "<hr>";
echo Welcome::quantity();
echo "<hr>";

?>

<form action="home.php" method="get">
<input type="submit" name="pocetna_strana" size="25" value="Pocetna strana">
<br>
<br>
</form>
