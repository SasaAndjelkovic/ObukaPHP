<?php

class SingletonDB
{
    private static $instance = null;

    private $conn;

    private $host = "localhost";
    private $user = "root";   
    private $pass = "";
    private $database = "kolokvijumi";

    private function __construct(){
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->database);
    }

    public static function getInstance() {
        if(self::$instance == null){
            self::$instance = new SingletonDB();
        }
        return self::$instance;
    }

    public function getConnection () {
        return $this->conn;
    }
}


/* require "SingletonLogin.php";

$host = "localhost";
$user = "root";   
$pass = "";
$database = "kolokvijumi";

class SingletonLogin {
    //1. staticka promenljiva
    private static $instance = null;
    private $username;
    private $password;

    //2. private konstruktor
    private function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }

    //3. static metod getInstance()
    public static function getInstance($username, $password) {
        if(self::$instance == null){
            self::$instance = new SingletonLogin($username, $password);
        }
        return self::$instance;
    }

    public function korisnik () {
        return $this->username;
    }

}

$conn = new mysqli($host, $user, $pass, $database);

$instanca1 = SingletonLogin::getInstance($user, $pass);
$korisnik1 = $instanca1->korisnik();

print_r($korisnik1);

$instanca2 = SingletonLogin::getInstance($user, $pass);
$korisnik2 = $instanca2->korisnik();

print_r($korisnik2);

if ($instanca1 === $instanca2) {
    echo "U pitanju je ista instanca";
} else {
    echo "Kreirano je vise instanci";
}

if ($instanca1 === $instanca2) {
    echo "U pitanju je isti korisnik";
} else {
    echo "Kreirano je dva korisnika";
} */