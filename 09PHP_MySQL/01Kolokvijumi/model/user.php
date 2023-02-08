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

    // public static function loginUser($id, $user, $password) {
    public static function loginUser($korisnik, mysqli $conn) {
        //static, da sam nezavistan od instance
        $query = "SELECT * 
                  FROM user
                  WHERE username = '$korisnik->username' 
                        AND password = '$korisnik->password'
                  ";
        //echo $query;

        //vraca neki result set iz baze  
        //-- mysqli_result Object ( [current_field] => 0 [field_count] => 3 [lengths] => [num_rows] => 0 [type] => 0 )
        return $conn->query($query);
    }
}

?>