<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/monogram.png" />
    <title>CourceX</title>

</head>

<body>

    <div class="heading-section">
        <img src="img/logo-white.png" alt="Logo" class="logo">
        <h3 class="heading-text">welcome to your course library</h3>
    </div>
    <h2 class="heading-text align-left" style="margin-bottom: 30px">Dashboard</h2>

    <div class="menu-section row">
        <div class="col-md-4 menu-section-item">
            <h2 style="font-weight: 600; color: white">Courses order</h2>
            <p style="color: rgba(255,255,255,.5)">Sort courses:</p>
            <form action="?sort" method="get">
                <input type="hidden" name='sort' class="forma1" value=asc>
                <button id="btn" class="btn btn-info btn-block"><i class="glyphicon glyphicon-th-list"></i> Order by price
                </button>
            </form>
        </div>
        <div class="col-md-4 menu-section-item">
            <h2 style="font-weight: 600; color: white">Add new</h2>
            <p style="color: rgba(255,255,255,.5)">Add new course:</p>
            <button id="btn-dodaj" type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-plus"></i> Add
            </button>

        </div>
        <div class="col-md-4 menu-section-item">
            <h2 style="font-weight: 600; color: white">Search</h2>
            <p style="color: rgba(255,255,255,.5)">Search by a keyword: </p>
            <form action="?search" method="get">
                <input type="text" name='search' class="forma1" placeholder="Search courses">

                <button id="btn-pretraga" class="btn btn-warning btn-block">
                    <i class="glyphicon glyphicon-search"></i> Search
                </button>
            </form>
        </div>
    </div>

    <div id="pregled" class="panel panel-success">
        <div class="panel-heading">All courses</div>
        <div class="panel-body">
            <table id="myTable" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Course title</th>
                        <th scope="col">Provider</th>
                        <th scope="col">Price in usd</th>
                        <th scope="col">Categories</th>
                        <th scope="col">Choose this cource</th>
                        <th scope="col">Delete cource</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($red = $result->fetch_array()) {
                    ?>
                        <tr>
                            <!--<th scope="row">{{ counter }}</th>-->
                            <td><?php echo $red["id"] ?></td>
                            <td><?php echo $red["naziv"] ?></td>
                            <td><?php echo $red["provajder"] ?></td>
                            <td><?php echo $red["cena"] ?></td>
                            <td><?php echo $red["opis"] ?></td>
                            <td>
                                <label class="custom-radio-btn">
                                    <input type="radio" name="checked-donut" value=<?php echo $red["id"] ?>>
                                    <span class="checkmark"></span>
                                </label>
                            </td>
                            <td>
                                <label class="custom-radio-btn">
                                    <form action="#" method="post">
                                        <input type="hidden" name="id" value=<?php echo $red["id"] ?>>
                                        <button id="btn-obrisi" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Obriši
                                        </button>
                                    </form>
                                </label>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <div class="row" style="padding: 1%">
                <div>
                    Prosek svih kurseva: 111
                </div>
                <div class="col-md-12" style="text-align: right">
                    <button id="btn-izmeni" class="btn btn-warning" data-toggle="modal" data-target="#izmeniModal"><i class="glyphicon glyphicon-pencil"></i> Izmeni
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!--Sadrzaj modala-->
            <div class="modal-content" style="border: 3px solid #cd2633;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container course-form" style="width:100%">
                        <form action="#" method="post" id="dodajForm">
                            <h3 style="color: black">Add course</h3>
                            <div class="update-form-row">
                                <div class="col-md-6" style="width:100%">
                                    <div class="form-group">
                                        <input type="text" style="border: 1px solid black" name="nazivKursa" class="form-control" placeholder="Course name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" style="border: 1px solid black" name="provajderKursa" class="form-control" placeholder="Provajder kursa *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="number" style="border: 1px solid black" name="cenaKursa" class="form-control" placeholder="Course price *" value="" />
                                    </div>
                                </div>
                                <div class="col-md-6" style="width:100%">
                                    <div class="form-group">
                                        <textarea name="opisKursa" class="form-control" placeholder="Short cource description *" style="width: 100%; height: 150px; border: 1px solid #cd2633; resize:none"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button id="btnDodaj" type="submit" class="btn btn-success btn-block" style="background-color: #cd2633; border: 1px solid #cd2633; resize:none"><i class="glyphicon glyphicon-plus"></i> Add cource</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" style="color: white; background-color: #cd2633; border: 1px solid white" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="izmeniModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal sadrzaj-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container course-form">
                        <form action="#" method="post" id="izmeniForm">
                            <h3 style="color: black">Change course</h3>
                            <div class="change-course-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="id" type="text" name="idKursa" class="form-control" placeholder="Cource id *" value="" readonly />
                                    </div>
                                    <div class="form-group">
                                        <input id="nazivv" type="text" name="nazivKursa" class="form-control" placeholder="Course name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input id="provajdera" type="text" name="provajderKursa" class="form-control" placeholder="Course provider *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input id="cenaa" type="number" name="cenaKursa" class="form-control" placeholder="Cource price *" value="" />
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea id="opiss" name="opisKursa" class="form-control" placeholder="Course desc *" style="width: 100%; height: 150px;"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button id="btnIzmeni" type="submit" class="btn btn-success btn-block" style="color: white; background-color: #8b1c25; border: 1px solid #8b1c25"><i class="glyphicon glyphicon-pencil"></i> Change course
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <a href="home.php?logout=true">
        <button id="logout" type="button" class="btn btn-danger">Logout</button>
    </a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        function funkcijaZaPretragu() {

            // Declare variables
            var input, filter, table, tr, i, td1, td2, td3, td4, txtValue1, txtValue2, txtValue3, txtValue4;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td1 = tr[i].getElementsByTagName("td")[1];
                td2 = tr[i].getElementsByTagName("td")[2];
                td3 = tr[i].getElementsByTagName("td")[3];
                td4 = tr[i].getElementsByTagName("td")[4];

                if (td1 || td2 || td3 || td4) {
                    txtValue1 = td1.textContent || td1.innerText;
                    txtValue2 = td2.textContent || td2.innerText;
                    txtValue3 = td3.textContent || td3.innerText;
                    txtValue4 = td4.textContent || td4.innerText;

                    if (txtValue1.toUpperCase().indexOf(filter) > -1 || txtValue2.toUpperCase().indexOf(filter) > -1 ||
                        txtValue3.toUpperCase().indexOf(filter) > -1 || txtValue4.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>


</body>

</html>