<?php

$fileName = "files/testFile.txt";

$fileResource = fopen($fileName, 'r');
//print($fileResource);

$fileSize = filesize($fileName);

//cita fajl kao string
//$fileText = fread($fileResource, $fileSize);
// print($fileText);

//cita fajl liniju po liniju i smesta u niz
$fileText2 = file($fileName);
// print_r($fileText2);

//citanje pomocu petlje
while(!feof($fileResource)){  //fileEndOfFile   
   //echo fgetc($fileResource); //gets character from file pointer
   echo str_replace("\n", "<br>", fgetc($fileResource));   //"\r\b\n" kod mene ne radi
}

fclose($fileResource);

// print($fileText);
// print_r($fileText2);

?>