<?php

class User {
    public $id;
    public $username;
    public $password;
    public $name;

    public function __construct($id=null, $username=null, $password=null, $name=null)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
    }

    public function loginUSer(mysqli $conn) {
        //kada se ne loguje preko klase nego preko instance
        $q = "SELECT * 
        FROM user
        WHERE username = '$this->username' 
              AND password = '$this->password';
        ";
        return $conn->query($q);
    }

}