<?php

$data = [
    ['Simbol', 'Kompanija', 'Cena'],
    ['GOOG', 'Google', '800'],
    ['AAPL', 'Apple', '500'],
    ['YHOO', 'Yahoo!', '250'],
];

$fileName = 'files/stocks.csv';

$fileResource = fopen($fileName, 'w');

// proveravamo da li je doslo do greske prilikom otvaranja fajla
if($fileResource === false) {
    exit("Greska prilikom otvaranja" . $fileName);
}

// upisujemo red po red u .csv fajl
foreach($data as $row){
    fputcsv($fileResource, $row);  //format line as CSV and write to file pointer
}

//comma delimited
// zatvranje fajla
fclose($fileResource);