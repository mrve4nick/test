<?php

namespace Framework\core;

class Database
{
    public static function connect($host = "localhost", $uName = "root", $pass = "root", $dbName = "mydb")
    {
        try {
            return mysqli_connect($host, $uName, $pass, $dbName);
        } catch (Exception $e) {
            echo "DB connection failed";
        }
    }

    public static function disconnect($db)
    {
        mysqli_close($db);
    }
}
