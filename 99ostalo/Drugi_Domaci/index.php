<?php

include "loaddata.php";
// include "view/updateShow.php";

//print_r($show1);

// print_r($manager);
// print_r($manager->getName());

// echo ($_POST['fname']);

//ADD
if (isset($_POST['dodajPredstavu'])) {
    $noviTim = new Show (
        findMaxId() + 1,
        $_POST['nazivPredstave'],
        $_POST['opis'],
        $_POST['autor'],
        //$_POST['avatar']
    );
    $_SESSION['predstave'][] = $noviTim;
    include "view/home.php";
    exit();
}

//for add 
function findMaxId()
{
    $max = 0;
    foreach ($_SESSION['predstave'] as $show) {
        if ($show->getId() > $max) {
            $max = $show->getId();
        }
    }
    return $max;
}

if (isset($_GET['addShow'])) {
    include_once 'view/addShow.php';
    exit();
}
////if (isset($_GET['broj'])) {}
//DELETE
if (isset($_GET['izbrisi'])) {

    for ($i = 0; $i < count($_SESSION['predstave']); $i++) {
        // echo $_GET['izbrisi'] . "<br>";
        // echo $i+1 . "<br>";
        // print_r ($_SESSION['predstave'][$i]->getId());
        // echo "<hr>";
    //     print_r($_SESSION['predstave'][$i]->getSpisakAvatara());
    //     echo "<hr>";
    //    // print_r($_SESSION['predstave'][$i]->getSpisakAvatara()[$i]);
    //    print_r($_SESSION['predstave'][$i]);
    //     echo "<hr>";
    //    // print_r($_SESSION['predstave'][$i]->getSpisakAvatara()[$i]->getName());
    //     echo "<hr>";
    //     echo "<hr>";
        if ($_GET['izbrisi'] == $_SESSION['predstave'][$i]->getId()){
            array_splice($_SESSION['predstave'], $i, 1);
            include "view/home.php";
            exit();
        }
    }
}

//UPDATE
if (isset($_POST['azurirajPredstavu'])) {
    $nb = $_SESSION['broj'];
    //echo $_GET['izmeni'];
    if ($_SESSION['predstave'][$nb]->getId() == $_GET['izmeni']) {
         //echo $_GET['izmeni'] . $nb;
        $_SESSION['predstave'][$nb]->setName($_POST['nazivPredstave']);
        // $_SESSION['predstave'][$nb]->setName($_POST('nazivPredstave'));
        //echo $_POST['nazivPredstave'];
        //$_SESSION['predstave'][$nb]->setName($nb);
        //echo $_SESSION['predstave'][$nb]->getName();
        $_SESSION['predstave'][$nb]->setDescription($_POST['opis']);
        $_SESSION['predstave'][$nb]->setAuthor($_POST['autor']);
        //$_SESSION['predstave'][$nb]->setSpisakAvatara($_SESSION['predstave'][)[0]->setName($_POST['avatar']);

    }
    include "view/home.php";
    exit();
}
//move to updateTeam.php
if (isset($_GET['izmeni'])) {
    //echo $_GET['izmeni'];
    //print_r($_SESSION['predstave']);
    include_once "view/updateShow.php";
    exit();
}

if (isset($_POST['fname']) && isset($_POST['pass'])) {
    // echo "hero";
    //print_r($show1);
    //echo "<br>";
    $username = $_POST['fname'];
    $password = $_POST['pass'];

    
    if ($manager->getName() == $username && $manager->getPass() == $password) {
        // echo "tacno";
        $_SESSION['user'] = $username;
        include "view/home.php";
        exit();
    }
}


if (isset($_SESSION['fname'])) {
    include 'view/home.php';
    exit();
}

include 'view/login.php';
