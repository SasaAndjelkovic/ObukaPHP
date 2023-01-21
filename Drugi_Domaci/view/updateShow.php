<?php

// print_r($_SESSION['predstave']);
// echo $_GET['izmeni'];

// $id = $_GET['izmeni'];
// echo $_GET['izmeni'];
for ($i = 0; $i < count($_SESSION['predstave']); $i++) {
    // print_r($_SESSION['predstave'][$i]);
    // echo "<br>";
    // print_r($_SESSION['predstave'][$i]->getId());
    // echo $i . "<hr>";
       if ($_SESSION['predstave'][$i]->getId() == $_GET['izmeni']) {
        //echo $i = "hero";
            $index = $i;
            break;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestave</title>
</head>

<body>
    <form action="#" method="post">
        <h3>Ažuriranje predstave</h3>
        <div>
            <div>
                <div>
                    <input type="text" name="nazivPredstave" placeholder="Naziv predstave *" value="<?php echo $_SESSION['predstave'][$index]->getName() ?>" />
                </div>
                <div>
                    <input type="text" name="opis" placeholder="Opis *" value="<?php echo $_SESSION['predstave'][$index]->getDescription() ?>" />
                </div>
                <div>
                    <input type="text" name="autor" placeholder="Autor *" value="<?php echo $_SESSION['predstave'][$index]->getAuthor() ?>" />
                </div>
                <!-- <div>
                    <input type="text" name="avatar" placeholder="Avatar *" value="<//?php print_r($_SESSION['predstave'][$index]->getSpisakAvatara()[0]->getName()); ?>">
                </div> -->
                <div>
                    <form action="" method="post">
                    <?php $_SESSION['broj'] = $index;?>
                        <button type="submit" name="azurirajPredstavu"></i> Ažuriraj predstavu</button>
                    </form>
                </div>
            </div>
        </div>
    </form>

    <br>
    <a href="?logout">
        <button>Logout</button>
    </a>
</body>

</html>