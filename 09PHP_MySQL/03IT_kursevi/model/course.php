<!-- klasa kurs sa podacima kao u tabeli -->
<!-- static metodu getAll koja vraca sve kurseva iz baze -->
<!-- u home.php pozvati metodu getAll i dodeliti je u $result-->

<?php

class Course
{
    public $id;
    public $naziv;
    public $provajder;
    public $opis;
    public $cena;

    public function __construct($id = null, $naziv = null, $provajder = null, $opis = null, $cena = null)
    {
        $this->id = $id;
        $this->naziv = $naziv;
        $this->provajder = $provajder;
        $this->opis = $opis;
        $this->cena = $cena;
    }

    public static function getAll(mysqli $conn)
    {
        $q = "SELECT * FROM course";
        return $conn->query($q);
    }

    public static function add($naziv, $provajder, $opis, $cena, mysqli $conn)
    {
        $q = "INSERT INTO course (naziv, provajder,opis,cena)
VALUES ('$naziv','$provajder','$opis',$cena)";
        return $conn->query($q);
    }

    public static function update(Course $course, mysqli $conn)
    {
        $query = "UPDATE course
SET naziv = '$course->naziv', provajder = '$course->provajder', opis = '$course->opis', cena = '$course->cena'
WHERE id = $course->id;";

        return $conn->query($query);
    }

    public static function average($text, mysqli $conn)
    {
        $query = "SELECT ROUND(AVG(cena),2) FROM course WHERE provajder LIKE '%$text%';";
        return $conn->query($query)->fetch_array()[0];
    }

    public static function deleteById($id, mysqli $conn)
    {
        $q = "DELETE FROM course WHERE id=$id";
        return $conn->query($q);
    }

    public static function search($text, mysqli $conn)
    {
        $q = "SELECT * FROM course WHERE  provajder LIKE '%$text%';";
        return $conn->query($q);
    }

    public static function sort($sort, mysqli $conn)
    {
        $q = "SELECT * FROM course ORDER BY cena $sort;";
        return $conn->query($q);
    }
}
