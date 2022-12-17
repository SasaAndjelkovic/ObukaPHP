<?php

$dbhost = "localhost:27017";
$dbname = "obuka";
$kolekcija_1 = "students";
$kolekcija_2 = "grades";
$kolekcija_3 = "courses";

$client = new MongoDB\Client("mongodb://$dbhost");  // ovo je obavezno
$db = $client->$dbname;
$coll_students = $db->$kolekcija_1; //
$coll_grades = $db->$kolekcija_2;
$coll_courses = $db->$kolekcija_3;