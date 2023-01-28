<?php

include "model/basic_information.php";
include "model/person_information.php";
include "model/manager.php";
include "model/theater_information.php";
include "model/show.php";
include "model/avatar.php";

if (!isset($_SESSION))
    session_start();

$manager = new Manager(1, "Masha", "masha.neshkovic@gmail.com", "topsek123");

$show1 = new Show(1, "Kameno Jezero", "Lorem ipsum drama", "Zeljko Obrenovic");
$show2 = new Show(2, "Konji Svetog Marka", "Lorem ipsum istorijski", "Milorad Pavic");
$show3 = new Show(3, "Devojka koja je citala u metrou", "Lorem ipsum tragedija", "Kristin Fere-Fleri");
$show4 = new Show(4, "Uska staza ka dalekom severu", "Lorem ipsum avantura", "Ricard Flaragan");
$show5 = new Show(5, "Ljubav na zadnji pogled", "Lorem ipsum komedija", "Vedrana Rudan");
$show6 = new Show(6, "U zagrljaju purpurnih kisa", "Lorem ipsum triler", "Marjana Rajic");

$nizPredstava = [$show1, $show2, $show3, $show4, $show5, $show6];

$avatar1 = new Avatar(1, "Fjodor", "Lorem ipsum mistican");
$avatar2 = new Avatar(2, "David", "Lorem ipsum osoben");
$avatar3 = new Avatar(3, "Katrin", "Lorem ipsum senzualna");
$avatar4 = new Avatar(4, "Richard", "Lorem ipsum dinamican");

$show1->setSpisakAvatara([$avatar1]);
$show2->setSpisakAvatara([$avatar1]);
$show3->setSpisakAvatara([$avatar2]);
$show4->setSpisakAvatara([$avatar2]);
$show5->setSpisakAvatara([$avatar3]);
$show6->setSpisakAvatara([$avatar4]);

$_SESSION["user"] = $manager;
$_SESSION["predstave"] = $nizPredstava;

