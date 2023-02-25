<?php 

require "../dbBroker.php";
//print_r($_SESSION['avatar']->fetch_array());

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predstave</title>
</head>
<body>
    <form action="..//controler/add.php" method="post">
    <!-- <form action="#" method="post"> -->
        <h3>Dodavanje predstave</h3>
        <div>
            <input type="text" name="showName" placeholder="Naziv predstave *" value="" />
        </div>
        <div>
            <input type="text" name="description" placeholder="Opis *" value="" />
        </div>
        <div>
            <input type="text" name="author" placeholder="Autor *" value="" />
        </div>
        <div>
            <label for="avatar">Izaberi avatara:</label>
            <?php // $red = $result->fetch_array(); ?> 
            <select id="avatar" name="avatar">
                <?php
                    //echo ($_POST['showName']); EDIP to je to
                    
                    //$resultAdd = Avatar::getAvatar($conn); 
                    //echo "ispred while petlje";
                    //echo $redAdd['avatarID'];
                    //$test = $result->fetch_array();
                    //print_r ($test); 
                    //echo $test['avatarName'];
                //while ($redAdd = $_SESSION['avatar']->fetch_array()) {
               // while ($_SESSION['avatar'][]) {
                for ($i = 0; $i < 4; $i++) { 
                    //echo "while petlja";
                    //echo $redAdd['avatarID'];
                    //                     $selectOption = $_POST['taskOption'];
                    // But it is always better to give values to your <option> tags.

                    // <select name="taskOption">
                    // <option value="1">First</option>
                    // <option value="2">Second</option>
                    // <option value="3">Third</option>
                    // </select>
                ?>
            <option value="<?php echo $_SESSION['avatar'][$i]['avatarID'] ?>"><?php echo $_SESSION['avatar'][$i]['avatarName'] ?></option>
            <!-- <option value="<?//php echo $redAdd['avatarID']?>"><?//php echo ($redAdd['avatarID'] . $redAdd['avatarName'])?></option> -->
                <?php
                    }
                    
                    //$_SESSION['avatar'] = $selectOption;
                ?>
            </select>
            <?php   
                                    //print_r($resultAdd->fetch_assoc());
                                    // while ($test = $resultAdd->fetch_array()) {
                                // echo $test[0]; 
                                // }
                                //echo $test[0];
                    //}
                    // $avatar = filter_input(INPUT_POST, 'avatar', FILTER_SANITIZE_STRING);
                    // echo $avatar;
                    // $_SESSION['avatar'] = $avatar;
                    //$selected = $_POST['avatar'];
                    //echo $selectOption;
                    //$_SESSION['avatar'] = $selected;
                                //echo $redAdd['avatarID']
                ?>
            </select>
        </div>

        <button id="btnDodaj" type="submit" name="dodajPredstavu">Dodaj predstavu</button>
    </form>

    <?php

    ?>

    <br>
    <form action="home.php" method="get">
    <input type="submit" name="pocetna_strana" size="25" value="Pocetna strana">
</body>
</html>