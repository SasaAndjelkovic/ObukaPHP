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
        <h3 id="naslov" style="color: black" text-align="center">Dodavanje tima</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" style="border: 1px solid black" name="nazivTima" class="form-control" placeholder="Naziv tima *" value="" />
                </div>
                <div class="form-group">
                    <input type="text" style="border: 1px solid black" name="drzava" class="form-control" placeholder="Grad  *" value="" />
                </div>
                <div class="form-group">
                    <input type="number" style="border: 1px solid black" name="godinaOsnivanja" class="form-control" placeholder="Godina osnivanja tima *" value="" />
                </div>
                <div class="form-group">
                    <input type="number" style="border: 1px solid black" name="brojTitula" class="form-control" placeholder="Broj titula *" value="" />
                </div>
                <div class="form-group">
                    <form action="" method="post">
                        <button id="btnDodaj" type="submit" name="dodajTim" class="btn btn-success btn-block" style="background-color: orange; border: 1px solid black;"><i class="glyphicon glyphicon-plus"></i> Dodaj tim
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