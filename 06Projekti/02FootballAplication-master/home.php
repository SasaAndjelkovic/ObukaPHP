<?php 
    require 'model/tim.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" href="image/logo.png" />
    <link rel="stylesheet" href="css/home.css">
    <title>Fudbalski timovi</title>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <div class="jumbotron text-center" style=" background-color: rgba(255, 182, 193, 0);">
        <div class="container">
            <h1 style="color:darkred">Engleska premijer liga</h1>
        </div>
    </div>

    <div class="col-md-8" style="text-align:center; width:66.6%;float:left">
        <div id="pregled">
            <table id="tabela" class="table sortable table-bordered table-hover ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Naziv tima</th>
                        <th scope="col">Grad</th>
                        <th scope="col">Godina osnivanja</th>
                        <th scope="col">Broj titula</th>
                        <th scope="col">Izmeni tim</th>
                        <th scope="col">Izbriši tim</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if (!isset($_SESSION['timovi-search']))
                        foreach ($_SESSION['timovi'] as $tim) :
                    ?>
                    <tr>
                        <td> <?php echo $tim['timID']; ?></td>
                        <td> <?php echo $tim['nazivTima']; ?></td>
                        <td> <?php echo $tim['drzava']; ?> </td>
                        <td> <?php echo $tim['godinaOsnivanja']; ?></td>
                        <td> <?php echo $tim['brojTitula']; ?> </td>
                        <td>
                            <form action="" method="get">
                                <input type="hidden" name="timID-izmeni" value="<?php echo $tim['timID']; ?>">
                                <button id="btn-izmeni" class="btn" data-toggle="modal" data-target="#izmeniModal"><img src="image/edit.png" style="width: 25px;height: 25px;"></button>
                            </form>
                        </td>
                        <td>
                            <form action="" method="get">
                                <input type="hidden" name="timID-izbrisi" value="<?php echo $tim['timID']; ?>">
                                <button id="btn-izbrisi" type="submit" class="btn"><img src="image/delete.png" style="width: 25px;height: 25px;"></button>
                            </form>
                        </td>
                    </tr>
                <?php 
                endforeach; else 
                    foreach ($_SESSION['timovi-search'] as $tim) {
                        ?>
                         <tr>
                            <td>0<?php echo $tim["timID"] ?></td>
                            <td><?php echo $tim["nazivTima"] ?></td>
                            <td><?php echo $tim["drzava"] ?></td>
                            <td><?php echo $tim["godinaOsnivanja"] ?></td>
                            <td><?php echo $tim["brojTitula"] ?></td>
                            <td>
                                <form action="" method="get">
                                    <input type="hidden" name="timID-izmeni" value="<?php echo $tim["timID"] ?>">
                                    <button id="btn-izmeni" class="btn" data-toggle="modal" data-target="#izmeniModal"><img src="image/edit.png" style="width: 25px;height: 25px;"></button>
                                </form>
                            </td>
                            <td>
                                <form action="" method="get">
                                    <input type="hidden" name="timID-izbrisi" value="<?php echo $tim["timID"] ?>">
                                    <button id="btn-izbrisi" type="submit" class="btn"><img src="image/delete.png" style="width: 25px;height: 25px;"></button>
                                </form>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-4" style="display: block; background-color: rgba(255, 255, 255, 0.4);">
        <div style="text-align:center;">
            <h3>Pretraga timova</h3>
            <form action="" method="get">
                <input type="text" id="myInput" name="unos" class="btn" placeholder="Pretrazi timove">
                <button type="submit" class="btn" name="search"><img src="image/search.png" style="width: 25px;height: 25px;"></button>
            </form>
        </div>
        <div style="text-align:center; ">
            <h3>Dodaj novi tim</h3>
            <a href="?addTeam">
                <button id="btn-dodaj" type="submit" class="btn"><img src="image/add.png" style="width: 25px;height: 25px;"></button>
            </a>

        </div>
        <div style="text-align:center;">
            <h3>Sortiraj po imenu</h3>
            <a href="?sortiraj">
                <button id="btn-izmeni" class="btn"><img src="image/sort.png" style="width: 25px;height: 25px;"></button>
            </a>
        </div>
        <br>
    </div>

    <br>
    <a href="logout.php" class="label label-primary" style="font-size:16px; position: fixed; bottom:0; right:0; float:right">Logout</a>


    <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
    <script src="js/main.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>