<?php

$data = [];

$fileName = 'files/stocks.csv';

$fileResource = fopen($fileName, 'a');

// proveravamo da li je doslo do greske prilikom otvaranja fajla
if($fileResource === false) {
    exit("Greska prilikom otvaranja" . $fileName);
}

// upisujemo red u .csv fajl
fputcsv($fileResource, $row);

// zatvranje fajla
fclose($fileResource);