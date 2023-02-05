<?php

class User{
    public $id;
    public $username;
    public $password;


public function __construct($id = null, $username=null, $password = null){
    $this->id = $id;
    $this->username = $username;
    $this->password = $password;
}
public static function logIn($name, $password, mysqli $conn){
    $q = "select * from user where name= '".$name."' and password ='".$password."' limit 1;";
    
    return $conn->query($q);
}

}
?>