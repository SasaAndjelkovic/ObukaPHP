<?php

class Muzicar{
    public $muzicarID;
    public $ime;
    public $prezime;
    public $instrumentID;

    public function __construct($muzicarID=null, $ime=null, $prezime=null, $instrumentID=null)
    {
        $this->muzicarID = $muzicarID;
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->instrumentID = $instrumentID;
    }

    public static function add($ime, $prezime, $instrument_id, mysqli $conn){
        $q = "INSERT INTO muzicar(ime, prezime, instrument_id) 
                VALUES ('$ime', '$prezime', $instrument_id)";
        return $conn->query($q);
    }

    public static function getAll(mysqli $conn){
        $q = "SELECT * FROM muzicar";
        return $conn->query($q);
    }

    public static function deleteById($id, mysqli $conn){
        $q = "DELETE FROM muzicar WHERE id=$id";
        return $conn->query($q);
    }

    public static function getById($id, mysqli $conn){
        $q = "SELECT id, ime, prezime, instrument_id
                FROM muzicar WHERE id=$id";
        
        $result = $conn->query($q);
        
        $row = $result->fetch_assoc();

        return $row;
    }

    public static function update($id, $ime, $prezime, $instrument_id, mysqli $conn){
        $q = "UPDATE muzicar SET ime='$ime', prezime='$prezime', instrument_id=$instrument_id
                WHERE  id=$id";
        return $conn->query($q);
    }

}

?>