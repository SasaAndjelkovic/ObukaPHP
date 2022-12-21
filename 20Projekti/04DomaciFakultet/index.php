<?php
include "model/korisnik.php";
include "model/student.php";
include "model/ostudent.php";
include "model/mstudent.php";
include "model/dstudent.php";
include "model/profesor.php";
include "controler/controler.php";

include "view/login.php";

$nizkorisnika = [];

$so = new OStudent("tamara", "naumovic", "tamara@elab.rs", "tamara123", "1234567891234", "0662581477", "student", "2020/1005");
$sm = new MStudent("petar", "lukovac", "petar@elab.rs", "petar123", "1231234891234", "0661281477", "student", "2020/2005");
$sd = new DStudent("aleksa", "miletic", "aleksaa@elab.rs", "aleksa123", "1234561231234", "0662123477", "student", "2020/3005");

$prof = new Profesor("zorica", "bogdanovic", "zorica@elab.rs", "zorica123", "7894561231234", "0662123789", "profesor");

// Kontroler::ulogujKorisnika($prof);
// Kontroler::ulogujKorisnika($so);

array_push($nizkorisnika, $so);
array_push($nizkorisnika, $sm);
array_push($nizkorisnika, $sd);
array_push($nizkorisnika, $prof);

// echo "<br>";
// print_r($nizkorisnika);

$nizstudenata = [$so, $sm, $sd];
// Kontroler::prikaziStudente(...$nizstudenata);

if(isset($_POST["login"])){
    $email = $_POST['email'];
    $sifra = $_POST['sifra'];
    foreach($nizkorisnika as $kr){
        if($kr->getEmail() == $email && $kr->getSifra()==$sifra){
            Kontroler::ulogujKorisnika($kr);
            
        }
    }
}
?>