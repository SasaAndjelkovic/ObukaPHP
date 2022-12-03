<?php

function getAllCsv() {

$data = [];
$fileName = 'files/stocks.csv';
$fileResource = fopen($fileName, 'r');

// proveravamo da li je doslo do greske prilikom otvaranja fajla
if($fileResource === false) {
    exit("Greska prilikom otvaranja" . $fileName);
}

// citamo red po red iz .csv fajla
while(($row = fgetcsv($fileResource)) !== false) {   //dok god mogu da procitam red
    $data[] = $row;  
}

// zatvranje fajla
fclose($fileResource);

// print_r($data);
return $data;
};