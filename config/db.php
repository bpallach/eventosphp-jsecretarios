<?php

class Conexion{
    public static function connect()
    {
        define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('DB_NAME', 'events_jsecretarios');

        try
        {
            $bbdd = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
        }
        catch (PDOException $e)
        {
            exit ('Erorr: ' . $e->getMessage());
        }

        return $bbdd;
    }
}


