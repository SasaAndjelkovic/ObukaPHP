<?php

class User {
    public $id;
    public $username;
    public $password;

    public function __construct($id=null, $username=null, $password=null)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    public static function loginUser($korisnik, mysqli $conn) {
        $query = "SELECT * 
                  FROM user
                  WHERE username = '$korisnik->username' 
                        AND password = '$korisnik->password'
                  ";
        echo $query;
        return $conn->query($query);
    }
}

?>