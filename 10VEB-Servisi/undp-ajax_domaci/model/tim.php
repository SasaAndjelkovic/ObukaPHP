<?php

class Tim{
    public $timID;
    public $nazivTima;
    public $drzava;
    public $godinaOsnivanja;
    public $brojTitula;

    public function __construct($timID = null, $nazivTima = null, $drzava = null, $godinaOsnivanja = null, $brojTitula = null){
        $this->timID = $timID;
        $this->nazivTima = $nazivTima;
        $this->drzava = $drzava;
        $this->godinaOsnivanja = $godinaOsnivanja;
        $this->brojTitula = $brojTitula;
    }

    public static function getAll(mysqli $conn){
        $q = "SELECT * FROM tim";
        return $conn->query($q);
    }
    public static function deleteById($timID, mysqli $conn)
    {
        $q = "DELETE FROM tim WHERE timID=$timID";
        return $conn->query($q);
    }

    public static function add($nazivTima, $drzava, $godinaOsnivanja, $brojTitula, mysqli $conn){
       
        $q = "INSERT INTO tim(nazivTima, drzava, godinaOsnivanja, brojTitula) values('$nazivTima', '$drzava', '$godinaOsnivanja',  '$brojTitula')";
        return $conn->query($q);
    
        
}
    

public static function update($timID, $nazivTima, $drzava, $godinaOsnivanja, $brojTitula, mysqli $conn)
{
    $q = "UPDATE tim set nazivTima='$nazivTima', drzava='$drzava', godinaOsnivanja='$godinaOsnivanja', brojTitula='$brojTitula' where timID=$timID";
    return $conn->query($q);
}

public static function getById($timID, mysqli $conn)
    {
        $q = "SELECT * FROM tim WHERE timID=$timID";
        $myArray = array();
        if ($result = $conn->query($q)) {

            while ($row = $result->fetch_array(1)) {
                $myArray[] = $row;
            }
        }
        return $myArray;
    }

public static function getLast(mysqli $conn)
    {
        $q = "SELECT * FROM tim ORDER BY id DESC LIMIT 1";
        return $conn->query($q);
    }

  
}





?>