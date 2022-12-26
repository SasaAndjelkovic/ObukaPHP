<?php
include "controler/controler.php";
include "loaddata.php";


if(!isset($_SESSION["logovani_korisnik"])){
    header("Location: view/login.php");
}else{
    $korisnik = $_SESSION["logovani_korisnik"];
    include "view/header.php";
    if($korisnik->getTip()=="student"){
        include "view/student.php";
        exit();
    }else if($korisnik->getTip()=="profesor"){
        include "view/profesor.php";
        exit();
    }else if($korisnik->getTip()=="administrator"){
        include "view/administrator.php";
        exit();
    }else{
        echo "404";
        exit();
    }
}

// sve je prebaceno u loaddata.php

// $nizkorisnika = [];

// $so = new OStudent("tamara", "naumovic", "tamara@elab.rs", "tamara123", "1234567891234", "0662581477", "student", "2020/1005");
// $sm = new MStudent("petar", "lukovac", "petar@elab.rs", "petar123", "1231234891234", "0661281477", "student", "2020/2005");
// $sd = new DStudent("aleksa", "miletic", "aleksaa@elab.rs", "aleksa123", "1234561231234", "0662123477", "student", "2020/3005");

// $prof = new Profesor("zorica", "bogdanovic", "zorica@elab.rs", "zorica123", "7894561231234", "0662123789", "profesor");

// Kontroler::ulogujKorisnika($prof);
// // Kontroler::ulogujKorisnika($so);

// array_push($nizkorisnika, $so);
// array_push($nizkorisnika, $sm);
// array_push($nizkorisnika, $sd);
// array_push($nizkorisnika, $prof);

// // echo "<br>";
// // print_r($nizkorisnika);

// $nizstudenata = [$so, $sm, $sd];
// // Kontroler::prikaziStudente(...$nizstudenata);

// if(isset($_POST["login"])){
//     $email = $_POST['email'];
//     $sifra = $_POST['sifra'];
//     foreach($nizkorisnika as $kr){
//         if($kr->getEmail() == $email && $kr->getSifra()==$sifra){
//             Kontroler::ulogujKorisnika($kr);  
//         }
//     }
// }

// // sreda
// $nizpredmeta1 = [];
// $nizpredmeta2 = [];
// $nizocena = [];

// $p1 = new Predmet("PHP", "php2022", "osnovne");
// $p2 = new Predmet("JAVA", "java2022", "master");
// $p3 = new Predmet("Blockchain", "bc2022", "doktorske");

// array_push($nizpredmeta1, $p1);
// array_push($nizpredmeta2, $p2);
// array_push($nizpredmeta1, $p3);

// $prof->setNizPredmeta($nizpredmeta1);

// $p1->setSpisakProfesora([$prof]);
// $p3->setSpisakProfesora([$prof]);
// $p1->setSpisakStudenata([$so]);
// $p2->setSpisakStudenata([$sm]);
// $p3->setSpisakStudenata([$sd]);

// echo "<br> lista predmeta1: ";
// foreach($nizpredmeta1 as $pred):
//     echo "<br>Predmet: ".$pred->getNaziv();
//     echo "<br> Studenti <br>";
//     print_r($pred->getSpisakStudenata());
// endforeach;

// echo "<br> lista predmeta2: ";
// foreach($nizpredmeta2 as $pred):
//     echo "<br>Predmet: ".$pred->getNaziv();
//     echo "<br> Studenti <br>";
//     print_r($pred->getSpisakStudenata());
// endforeach;

// echo "<br>";

// echo Kontroler::prikaziTabelu($nizstudenata, ["status", "indeks", "ime", "prezime", "email", "sifra", "jmbg", "telefon", "tip"]);
?>