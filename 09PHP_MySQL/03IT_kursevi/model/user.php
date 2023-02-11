<?php

class User
{
    public $id;
    public $username;
    public $password;
    public $name;

    public function __construct($id = null, $username = null, $passsword = null, $name = null)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $passsword;
        $this->name = $name;
    }

    public function loginUser(mysqli $conn)
    {
        $q = "SELECT * FROM user WHERE username='$this->username' AND password='$this->password';";
        //$upit = $conn->query($q);
        //$upit->fetch_assoc();
        //onda trazi id/name
        return $conn->query($q);
    }
}
