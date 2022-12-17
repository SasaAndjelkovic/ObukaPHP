<?php

// testiranje MongoDB konekcije
require_once 'vendor/autoload.php';

$dbhost = "localhost:27017";
$dbname = "test";

$dbclient = new MongoDB\Client("mongodb://$dbhost");

// $db = $db_client->test;
$db = $db_client->$dbname;
$coll_users = $db->users;

// $instertOneRez = $coll_users->instertOne([
//     'username'=>'admin',
//     'email'=>'admin@email.com',
//     'name'=>'Admin name'
// ]);

// $insterManyRez = $coll_users->insterMany([ 
//     [
//         'username' => 'Tamara',
//         'email' => 'tamara@email.com',
//         'name' => 'Tamara Naumovic'
//     ],
//     [
//         'username' => 'admin',
//         'email' => 'petar@email.com',
//         'name' => 'Petar Nikolic'
//     ]
// ]
// );
// var_dump($insterManyRez->getInsertedIds());

//query-ing
//findone

$doc1 = $coll_users->findOne(['username' => 'tamara']);
var_dump($doc1);

//findMany

echo "Pretraga";

$docs = $coll_users->find(["type" => "general"]);
foreach($docs as $doc){
    echo $doc["username"] . "<br>";
}

//update

$updateRez = $coll_users->updateOne(
    ['username' => 'admin'],
    ['$set' => ['type' => 'admin']]
);

$korisnici = ["petar", "tamara"];
foreach ($korisnici as $korisnik):
    $coll_users->updateOne(
        ["username"=>$korisnik],
        ['$set'=>["type"=>"general"]]
    );
endforeach;

//printf("Ubaceno je %d dokumenata\n", $instertOneRez->getInsertedCount());

//delete

$deleteRez = $coll_users->deleteOne(["username" => "Petar"]);

echo "<br>Obrisan je jedan dokument<br>";

