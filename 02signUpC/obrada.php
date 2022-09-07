<?php

require("dbconnect.php");

$query = "INSERT INTO korisnici(username,email,password,name,surname,phone,twitter,facebook,instagram) VALUES(";
$email=$_POST["email"];   
$username=$_POST["username"];  
$pass=$_POST["pass"];  
$cpass=$_POST["cpass"];   
$tw =$_POST["twitter"];  
$fb=$_POST["facebook"];  
$ig =$_POST["ig"]; 
$name=$_POST["fname"];
$surname=$_POST["lname"];  
$phone =$_POST["phone"];  

$values="'$username','$email','$pass','$name','$surname','$phone','$tw','$fb','$ig')";

$q = $query.$values;

print_r($_POST);

$conn->query($q);

?>