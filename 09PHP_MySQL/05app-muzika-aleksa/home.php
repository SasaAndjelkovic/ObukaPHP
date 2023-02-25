<?php

require "dbBroker.php";
require "model/muzicar.php";
require "model/instrument.php";

$result = Muzicar::getAll($conn);

if(!$result){
    echo "Greska kod upita";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/logoNovi.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ploča Bend</title>
</head>

<body>

    <h1>♫Ploča Bend♫</h1>

    <!-- Dugmici za operacije -->
    <div class="buttons">
        <div>
            <button class="dugme" id="btnDodaj" role="button" data-toggle="modal" data-target="#myModal">Dodaj muzicara</button>
        </div>
        <div>
            <button class="dugme" id="btnIzmeni" role="button" data-toggle="modal" data-target="#izmeniModal">Izmeni muzicara</button>
        </div>
        <div>
            <button class="dugme" id="btn-izbrisi" role="button" >Obrisi muzicara</button>
        </div>
        <div>
            <button class="dugme" id="btnDodajInstrument" role="button" data-toggle="modal" data-target="#modalInstrument">Dodaj instrument</button>
        </div>
    </div>

    <!-- Tabela sa muzicarima -->
    <div class="main">
        <table class="table" id="tabela">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Instrument</th>
                    <th>Izaberite muzicara</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($result->num_rows == 0){
                    ?>
                    <h3>Trenutno nema muzicara</h3>
                    <?php
                }else{
                    while($red = $result->fetch_array()){
       
                ?>
                    <tr>
                        <td><?php echo $red['id'] ?></td>
                        <td><?php echo $red['ime'] ?></td>
                        <td><?php echo $red['prezime'] ?></td>
                        <td>
                            <?php
                            $instrument = Instrument::getById($red['instrument_id'], $conn);
                            echo $instrument;
                            ?>
                        </td>
                        <td class="celija">
                            <label class="radio-btn">
                                <!-- dodati id muzicara -->
                                <input type="radio" class="radio" name="checked-donut" value=<?php echo $red['id'] ?> >
                                <span class="checkmark"></span>
                            </label>
                        </td>

                    </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="pretraga">
        <div class="unos">
            <input type="text" id="imePretraga" onkeyup="pretraziPoImenu()" style="border: 1px solid #653428" name="ime" class="form-control" placeholder="Pretrazi po imenu *" value="" />
        </div>
    </div>

    <!-- FORMA ZA UNOS MUZICARA -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border: 4px solid #653428;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container tim-form">
                        <form action="#" method="post" id="dodajForm">
                            <h3 id="naslov" style="color: black">Dodavanje muzicara</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" style="border: 1px solid #653428" name="ime" class="form-control" placeholder="Ime *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" style="border: 1px solid #653428" name="prezime" class="form-control" placeholder="Prezime *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" style="border: 1px solid #653428" name="instrument" class="form-control" placeholder="Instrument *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <button id="btnDodaj" type="submit" class="btn btn-success btn-block" style="background-color: #653428; border: 1px solid black"><i class="glyphicon glyphicon-plus"></i>Dodaj muzicara
                                        </button>
                                    </div>

                                </div>


                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" style="color: white; background-color: #653428; border: 1px solid black" data-dismiss="modal">Zatvori</button>
                </div>
            </div>
        </div>
    </div>

    <!-- FORMA ZA UNOS INSTRUMENTA -->
    <div class="modal fade" id="modalInstrument" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border: 4px solid #653428;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container tim-form">
                        <form action="#" method="post" id="dodajInstrument">
                            <h3 id="naslov" style="color: black">Dodavanje instrumenta</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" style="border: 1px solid #653428" name="instrument" class="form-control" placeholder="Instrument *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <button id="btnDodajInstrument" type="submit" class="btn btn-success btn-block" style="background-color: #653428; border: 1px solid black"><i class="glyphicon glyphicon-plus"></i>Dodaj instrument
                                        </button>
                                    </div>

                                </div>


                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" style="color: white; background-color: #653428; border: 1px solid black" data-dismiss="modal">Zatvori</button>
                </div>
            </div>
        </div>
    </div>

    <!-- FORMA ZA AZURIRANJE -->
    <div class="modal fade" id="izmeniModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border: 4px solid #653428;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container tim-form">
                        <form action="#" method="post" id="izmeniForm">
                            <h3 id="naslov" style="color: black">Izmeni muzicara</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="id" type="text" name="id" class="form-control" placeholder="ID muzicara *" value="" readonly />
                                    </div>
                                    <div class="form-group">
                                        <input id="ime" type="ime" style="border: 1px solid #653428" name="ime" class="form-control" placeholder="Ime *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input id="prezime" type="prezime" style="border: 1px solid #653428" name="prezime" class="form-control" placeholder="Prezime *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input id="instrument" type="instrument" style="border: 1px solid #653428" name="instrument" class="form-control" placeholder="Instrument *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <button id="btnIzmeni" type="submit" class="btn btn-success btn-block" style="background-color: #653428; border: 1px solid black"><i class="glyphicon glyphicon-plus"></i>Izmeni muzicara
                                        </button>
                                    </div>

                                </div>


                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" style="color: white; background-color: #653428; border: 1px solid black" data-dismiss="modal">Zatvori</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- <script src="js/drugi.js"></script> -->

        
    </script>
    </script>
</body>

</html>