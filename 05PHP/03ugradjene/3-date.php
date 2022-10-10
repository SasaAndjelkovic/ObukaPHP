<?php
echo "Dan: " . date("d") . "<br>";
echo "Mesec: " . date("m") . "<br>";
echo "Godina: " . date("Y") . "<br>";
echo "Dan u nedelji: " . date("l") . "<br>";
echo "Danasnji datum: " . date("l d.m.Y.") . "<br>";
echo "Sati: " . date("h") . "<br>";
echo "Minuti: " . date("i") . "<br>";
echo "Sekundi: " . date("s") . "<br>";
echo "Doba dana: " . date("a") . "<br>";
echo "Trenutno sati: " . date("h:i:s a") . "<br>";

//vremenska zona
date_default_timezone_set("Europe/Lisbon");
echo "Trenutno sati - Lisbon: " . date("h:i:s a") . "<br>";

//kreiranje vremena
$timestamp = mktime(12, 0, 0, 10, 21, 1998) . "<br>";
echo "Timestamp rodjenja: " . $timestamp . "<br>";
//1.1.1970.
echo "Trenutni timestamp: " . time() . "<br>";
// echo "Timestemp u citljiv datum: " . date("d/m/Y h:i:s a", $timestamp) . "<br>";
// echo "Trenutno godina: " . (time() - $timestamp) / (60 * 60 * 24 * 365) . "<br>";

//pretvaranje stringa u datum
$timestamp1 = strtotime("7:00pm March 22 2016");
echo "String to time: " . date("d/m/Y h:i:sa", $timestamp1) . "<br>";
$timestamp2 = strtotime("today");
echo "String to time: " . date("d/m/Y h:i:sa", $timestamp2) . "<br>";
$timestamp3 = strtotime("tomorow");
echo "String to time: " . date("d/m/Y h:i:sa", $timestamp3) . "<br>";
$timestamp4 = strtotime("next Sunday");
echo "String to time: " . date("d/m/Y h:i:sa", $timestamp4) . "<br>";
$timestamp5 = strtotime("+2 Months");
echo "String to time: " . date("d/m/Y h:i:sa", $timestamp5) . "<br>";

function sablonIspisivanjaDatuma($timestamp)
{
    echo "String to time: " . date("d/m/Y h:i:sa", $timestamp) . "<br>";
}

$timestamp6 = strtotime("+2 Days");
echo "String to time: " . date("d/m/Y h:i:sa", $timestamp6) . "<br>";
