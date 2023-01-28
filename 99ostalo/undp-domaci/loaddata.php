<?php
include "utility/obrada.php";
include "model/korisnik.php";
include "model/student.php";
include "model/ostudent.php";
include "model/mstudent.php";
include "model/dstudent.php";
include "model/profesor.php";
include "model/administrator.php";
include "model/predmet.php";
include "model/ocena.php";

if(!isset($_SESSION))
session_start();

$so = new OStudent("tamara", "naumovic", "tamara@elab.rs", "tamara123", "1234567891234", "0662581477", "student", "2020/1005");
$sm = new MStudent("petar", "lukovac", "petar@elab.rs", "petar123", "1231234891234", "0661281477", "student", "2020/2005");
$sd = new DStudent("aleksa", "miletic", "aleksaa@elab.rs", "aleksa123", "1234561231234", "0662123477", "student", "2020/3005");

$prof1 = new Profesor("zorica", "bogdanovic", "zorica@elab.rs", "zorica123", "7894561231234", "0662123789", "profesor");
$prof2 = new Profesor("dusan", "barac", "dusan@elab.rs", "dusan123", "7894333231234", "0662133789", "profesor");
$prof3 = new Profesor("aleksandra", "labus", "aleksandra@elab.rs", "aleksandra123", "7894555231234", "0665523789", "profesor");
$nizkorisnika = [$so, $sm, $sd, $prof1, $prof2, $prof3];
$nizprof = [$prof1, $prof2, $prof3];

$p1 = new Predmet("PHP", "php2022", "osnovne");
$p2 = new Predmet("Baze", "baze2022", "osnovne");
$p3 = new Predmet("JAVA", "java2022", "osnovne");
$p4 = new Predmet("Blockchain", "bc2022", "doktorske");
$p5 = new Predmet("IoT", "iot2022", "doktorske");
$p6 = new Predmet("Internet tehnologije", "iteh2022", "doktorske");
$p7 = new Predmet("Internet marketing", "imar2022", "master");
$p8 = new Predmet("Mobilno poslovanje", "mpos2022", "master");

$p1->setSpisakProfesora([$prof1]);
$p2->setSpisakProfesora([$prof1]);
$p3->setSpisakProfesora([$prof1]);
$p4->setSpisakProfesora([$prof2]);
$p5->setSpisakProfesora([$prof2]);
$p6->setSpisakProfesora([$prof2]);
$p7->setSpisakProfesora([$prof3]);
$p8->setSpisakProfesora([$prof3]);

$nizpredmeta = [$p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8];

$_SESSION["predmeti"] = $nizpredmeta;
$_SESSION["users"] = $nizkorisnika;

?>