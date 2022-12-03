<?php
    $id = $_GET['timID-izmeni'];
    // $index = -1;
    for ($i = 0; $i < count($_SESSION['timovi']); $i++) {
        if ($_SESSION['timovi'][$i]['timID'] == $id) {
            $index = $i;
            break;
        }
    }
    //DA PROVERE DA LI VRACA DOBRO
    // echo $index;
    // print_r($_SESSION['timovi']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" href="image/logo.png" />
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/addTeam.css">
    <title>Fudbalski timovi</title>
</head>

<body>
    <form action="#" method="post" id="dodajForm">
        <h3 id="naslov" style="color: black" text-align="center">Ažuriranje tima</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" style="border: 1px solid black" name="nazivTima" class="form-control" placeholder="Naziv tima *" value="<?php echo $_SESSION['timovi'][$index]['nazivTima'] ?>" />
                </div>
                <div class="form-group">
                    <input type="text" style="border: 1px solid black" name="drzava" class="form-control" placeholder="Grad  *" value="<?php echo $_SESSION['timovi'][$index]['drzava'] ?>" />
                </div>
                <div class="form-group">
                    <input type="number" style="border: 1px solid black" name="godinaOsnivanja" class="form-control" placeholder="Godina osnivanja tima *" value="<?php echo $_SESSION['timovi'][$index]['godinaOsnivanja'] ?>" />
                </div>
                <div class="form-group">
                    <input type="number" style="border: 1px solid black" name="brojTitula" class="form-control" placeholder="Broj titula *" value="<?php echo $_SESSION['timovi'][$index]['brojTitula'] ?>" />
                </div>
                <div class="form-group">
                    <form action="" method="post">
                        <button id="btnAzuriraj" type="submit" name="azurirajTim" class="btn btn-success btn-block" style="background-color: orange; border: 1px solid black;"><i class="glyphicon glyphicon-plus"></i> Ažuriraj tim
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </form>

    <div style="text-align:center; ">
        <h3>Vrati se na tabelu</h3>
        <a href="?">
            <button id="btn-dodaj" class="btn"><img src="image/arrow-back.jpg" style="width: 25px;height: 25px;"></button>
        </a>
    </div>
</body>

</html>