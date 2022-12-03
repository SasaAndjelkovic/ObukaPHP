<?php

function addRowCsv($simbol, $kompanija, $cena) {

    $data = [$simbol, $kompanija, $cena];

$fileName = 'files/stocks.csv';

$fileResource = fopen($fileName, 'a');

// proveravamo da li je doslo do greske prilikom otvaranja fajla
if($fileResource === false) {
    exit("Greska prilikom otvaranja" . $fileName);
}

// upisujemo red u .csv fajl
fputcsv($fileResource, $data);  //ne $row
 
// zatvranje fajla
fclose($fileResource);

}