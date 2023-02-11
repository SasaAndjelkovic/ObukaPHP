<?php

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