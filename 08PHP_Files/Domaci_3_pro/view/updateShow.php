<?php

//print_r ($_SESSION['predstave'][$_GET['izmeni']-1]['showName']);

//print_r ($_SESSION['predstave'][$_GET['izmeni']-1]);
//echo "<hr>";
//echo ($_SESSION['predstave'][$_GET['izmeni']-1]['showName']);
// echo $_SESSION['predstave']['showName'];
// echo $_SESSION['predstave']['description'];
// echo $_SESSION['predstave']['author'];
// for ($i = 0; $i < count($_SESSION['predstave']); $i++) {
//        if ($_SESSION['predstave'][$i]->getId() == $_GET['izmeni']) {
//             $index = $i;
//             break;
//         }
//     }
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestave</title>
</head>

<body>
    <form action="..//controler/update.php" method="post">
        <h3>Ažuriranje predstave</h3>
        <div>
            <div>
                <div>
                    <input type="hidden" name="showID" value="<?php echo $_GET['izmeni'] ?>" />
                </div>
                <div>
                    <input type="text" name="showName" placeholder="Naziv predstave *" value=
                    "<?php echo ($_SESSION['predstave'][$_GET['izmeni']-1]['showName']) ?>" />
                </div>
                <div>
                    <input type="text" name="description" placeholder="Opis *" value=
                    "<?php echo ($_SESSION['predstave'][$_GET['izmeni']-1]['description']) ?>" />
                </div>
                <div>
                    <input type="text" name="author" placeholder="Autor *" value=
                    "<?php echo ($_SESSION['predstave'][$_GET['izmeni']-1]['author']) ?>" />
                </div>
                <div>
                    <label for="avatar">Izaberi avatara:</label>
   
                    <select id="avatar" name="avatar">
                        <?php
                            //$resultAdd = Avatar::getAvatar($conn); 
                            //while ($redAdd = $resultAdd->fetch_array()) {
                            for ($i = 0; $i < 4; $i++) {    
                        ?>
                        <option value="<?php echo $_SESSION['avatar'][$i]['avatarID'] ?>"><?php echo $_SESSION['avatar'][$i]['avatarName'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
               </div>
               <button type="submit" name="azurirajPredstavu"></i> Ažuriraj predstavu</button>
            </div>
        </div>
    </form>

    <br>
    <form action="home.php" method="get">
    <input type="submit" name="pocetna_strana" size="25" value="Pocetna strana">
</body>

</html>