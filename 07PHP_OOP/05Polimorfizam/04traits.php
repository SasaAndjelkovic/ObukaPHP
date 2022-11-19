<?php

//reusability koda 
//traits - jednu osobinu (ne celu klasu) implementiramo na vise mesta
//to je horizontalni reusability (nasledjivanje nam daje vertikalni reusability)

trait Logger {
    public function log($msg){
        echo date('Y-m-d h:i:s') . " | " . $msg . "<br>";
    }
}

trait Remover {
    public function obrisi(){
        echo "This object is removed";
    }
}

class BankAccount {
    use Logger;
    private $accnum;
    public function __construct($accnum)
    {
        $this->accnum = $accnum;
        $this->log("Created new account with number: $accnum");
    }
}

class User {
    use Logger, Remover;
    public function __construct()
    {
        $this->log("A new user is created");
    }

    public function remove()
    {
        $this->obrisi();
    }
}

$ba = new BankAccount ("123456789");
$user = new User();
$user->remove();

