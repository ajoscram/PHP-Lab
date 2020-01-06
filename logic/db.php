<?php
    class Database{
        public const SERVER = "localhost";
        public const DB = "users";
        const USER = "root";
        const PASSWORD = "";

        public static function prepare($query){
            $connection = new PDO("mysql:host=".self::SERVER, self::USER, self::PASSWORD);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $preparedQuery = $connection->prepare($query);
            $connection = null;
            return $preparedQuery;
        }
    }
?>