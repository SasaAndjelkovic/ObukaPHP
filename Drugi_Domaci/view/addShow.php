<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predstave</title>
</head>
<body>
    <form action="#" method="post">
        <h3>Dodavanje predstave</h3>
        <div>
            <div>
                <div>
                    <input type="text" name="nazivPredstave" placeholder="Naziv predstave *" value="" />
                </div>
                <div>
                    <input type="text" name="opis" placeholder="Opis *" value="" />
                </div>
                <div>
                    <input type="text" name="autor" placeholder="Autor *" value="" />
                </div>
                <!-- <div>
                    <input type="text" name="avatar" placeholder="Avatar *" value="" />
                </div> -->
                <div>
                    <form action="" method="post">
                        <button id="btnDodaj" type="submit" name="dodajPredstavu">Dodaj predstavu</button>
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