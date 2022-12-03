<?php

$fileName = "files/testAppend.txt";

$fileResource = fopen($fileName, 'a');
//ako fajl ne postoji, napravice novi fajl
//ako fajl postoji, upisace nove vrednosti na kraju fajla

$fileSize = filesize($fileName);

fwrite($fileResource, "Neki tekst koji zelim da upisem\n");

fclose($fileResource);