<?php

class DB {
    private static $conn;
    public static function connectDB() {
        //singleton pattern, jedna konekcija zajednicka za sve usere
        if (self::$conn == null)
            self::$conn = new mysqli('localhost', 'root', '', 'dbtasks');
        return self::$conn;
    }
}