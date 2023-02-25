<?php

require "../dbBroker.php";
require "../model/show.php";
include "../model/manager.php";
include "../model/avatar.php";


if (isset($_GET['addShow'])) {
    include_once 'addShow.php';
    exit();
}

if (isset($_GET['sort']))
    $result = Show::getAllSort($conn);
else
    $result = Show::getAll($conn);

//$result = Show::getAll($conn);
$resultAdd = Avatar::getAvatar($conn);

while ($redAdd = $resultAdd->fetch_array()) { 
    //print_r($redAdd);
    $_SESSION['avatar'][] = $redAdd;
};

echo ($_SESSION['avatar'][0]['avatarID']);
//print_r($resultAdd->fetch_array());
//echo "array <hr>";
//Array ( [0] => 1 [avatarID] => 1 [1] => Fjodor [avatarName] => Fjodor [2] => Lorem Ipsum mistican [description] => Lorem Ipsum mistican ) array
//print_r($resultAdd->fetch_assoc());
//echo "assoc <hr>";
//Array ( [avatarID] => 2 [avatarName] => David [description] => Lorem Ipsum osoben ) assoc

//$_SESSION['avatar'] = $resultAdd;
//print_r($_SESSION['avatar']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <div>
        <br>
        <form action="finance.php" method="get">
            <input type="submit" name="finansije" size="25" value="Finansijski izvestaj">
            <br>
        </form>

        <div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Naziv predstave</th>
                        <th>Opis</th>
                        <th>Autor</th>
                        <th>Avatar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        //$result = Show::getAll($conn); 
                        //$test = $result->fetch_array();
                        //print_r ($test); 
                        //echo $test['avatarName'];
                        while ($red = $result->fetch_array()) {
                            // print_r($red);
                            // echo "<br><br>";
                            // echo $red['showID'];
                            // echo "<hr>";
                            $_SESSION['predstave'][] = $red;
                            // print_r($_SESSION['predstave']);
                            // echo "<br><br>";
                            
                    ?>
                        <tr>
                            <td> <?php echo $red['showID'] ?></td>
                            <td> <?php echo $red['showName'] ?></td>
                            <td> <?php echo $red['description'] ?> </td>
                            <td> <?php echo $red['author'] ?></td>
                            <td> <?php echo $red['avatarName']; 
                                //$_SESSION['avatar'][] = $red['avatarName'];
                                //echo ($_SESSION['avatar'][$i])
                            ?></td> 
                        
                        </tr>
                    <?php
                        };
                    ?>
                </tbody>
            </table>
            <br>
        </div>

        <form action="updateShow.php" method="get">
            <input type="text" name="izmeni" size="25" placeholder="Upisi ID predstave za izmenu">
            <button>Izmeni</button>
            <br>
        </form>

        <form action="..//controler/delete.php" method="get">
            <input type="text" name="izbrisi" id="izbrisiV" size="25" placeholder="Upisi ID predstave za brisanje" value="">
            <button id="izbrisi">Obrisi</button>
            <br>
        </form>
    </div>

    <div>
        <a href="?addShow">
            <button>Dodaj novu predstavu</button>
        </a>
    </div>
    <br>

    <div>
        <a href="?sort">
            <button>Sortiraj po imenu</button>
        </a>
    </div>
    <br>

    <br>
    <a href="logout.php">
        <button>Logout</button>

</body>

</html>