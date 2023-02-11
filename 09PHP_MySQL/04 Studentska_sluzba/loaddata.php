<?php
include_once "database/dbBroker.php";
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
include_once "controler/controler.php";

if(!isset($_SESSION))
session_start();


