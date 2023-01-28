
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>
        Tasks
    </h1>

    <div>
        <form id="prikaziSve">
            <button type="Submit">Prikazi sve</button>
        </form>
    </div>

    <div class="search-wrapper">
        <!-- dodavanje novog taska -->
        <form id="dodaj">
            <input id="title" type="text" name="title" required class="search-box" placeholder="Enter title" />
            <input id="description" type="text" name="description" required class="search-box"
                placeholder="Enter description" />
            <input id="completed" type="text" name="completed" required class="search-box" placeholder="Enter Y/N" />
            <button class="close-icon" type="reset"></button>
            <button type="submit">Insert </button>
        </form>
    </div>

    <!-- tabela -->
    <div>
        <table id="myTable" class="table table-hover table-striped" style="color: black; background-color: grey;">
            <thead class="thead">
                <tr>
                    <th colspan="2" scope="col">Tasks</th>
                </tr>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <!-- ovde se ispisuje -->
            </tbody>

    </div>
    <div>
        <button id="obrisi">Obrisi</button>
    </div>
</body>

</html>
