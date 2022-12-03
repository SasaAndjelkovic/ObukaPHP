<?php

$fileName = "files/testWrite.txt";

$fileResource = fopen($fileName, 'w');
//ako fajl ne postoji, napravice novi fajl
//ako postoji, obrisace sve iz njega i upisati nove vrednosti

$fileSize = filesize($fileName);

fwrite($fileResource, "Neki tekst koji zelim da upisem");

fclose($fileResource);