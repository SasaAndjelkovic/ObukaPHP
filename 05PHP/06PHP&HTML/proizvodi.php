<?php

include "podaci.php";
include "funkcije.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP&HTML</title>
</head>

<body>
    <h1>Prodavnica elektronike</h1>
    <h3>Narudzbenica</h3>
    <table>
        <thead>
            <th>Naziv</th>
            <th>Jedinicna cena</th>
            <th>Kolicina</th>
            <th>PDV</th>
            <th>Rabat</th>
            <th>Ukupan iznos</th>
        </thead>
        <tbody>
            <?php
            foreach ($proizvodi as $pr) :
            ?>
                <tr>
                    <td><?php echo $pr["naziv"] ?></td>
                    <td><?php echo $pr["cena"] ?></td>
                    <td><?php echo $pr["kolicina"] ?></td>
                    <td><?php echo vratiPDV($pr["cena"]) ?></td>
                    <td><?php echo vratiRabat($pr["kolicina"]) ?></td>
                    <td><?php echo vratiIznos($pr["cena"], $pr["kolicina"]) ?></td>
                </tr>
            <?php
            endforeach;
            ?>
            <!-- <tr>
                <td>Laptop</td>
                <td>900</td>
                <td>65</td>
            </tr> -->
            <!-- <tr>
                <td>Monitor</td>
                <td>350</td>
                <td>35</td>
            </tr>
            <tr>
                <td>Tastatura</td>
                <td>200</td>
                <td>47</td>
            </tr> -->
        </tbody>
        <tfoot>
            <td colspan="5">Ukupno:</td>
            <td><?php
                echo vratiUkupno()
                ?></td>
        </tfoot>
    </table>
</body>

</html>