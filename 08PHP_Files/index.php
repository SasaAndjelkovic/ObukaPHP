<?php

include '05readCsv.php';
include '06appendCsv.php';

if(isset($_POST['simbol']) && isset($_POST['kompanija']) && isset($_POST['cena'])){
    if ($_POST['simbol'] != "") {
        //pozivamo fju za upis u .csv fajl
        addRowCsv($_POST['simbol'], $_POST['kompanija'], $_POST['cena']);
        $_POST = array(); // posle preuzimanja podataka iz superglobalne promenljive brisemo podatke
    }
}

$data = getAllCsv();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trenutne cene akcija</h1>
    <br>

    <table border="1">
        <?php
        foreach ($data as $row):
        ?>
        <tr>
            <td><?php echo $row[0]?> </td>
            <td><?php echo $row[1]?> </td>
            <td><?php echo $row[2]?> </td>
        </tr>
        <?php
        endforeach;
        ?>
    </table>
    <br>
    <form method="POST" action="#">
        <label for="simbol">Unesi simbol:</label><br>
        <input type="text" id="simbol" name="simbol" required><br>
        <label for="kompanija">Unesi kompaniju:</label><br>
        <input type="text" id="kompanija" name="kompanija"><br>
        <label for="cena">Unesi cenu:</label><br>
        <input type="text" id="cena" name="cena"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>