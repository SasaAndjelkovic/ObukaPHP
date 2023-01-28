<?php

class DB
{
    private static $conn;

    public static function connectDB()
    {
        //singleton pattern
        if (self::$conn == null)
            self::$conn = new mysqli('localhost', 'root', '', 'baza111');
        return self::$conn;
    }
}
