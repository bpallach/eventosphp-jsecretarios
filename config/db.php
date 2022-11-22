<?php

class Conexion{
    public static function connect()
    {
        require_once('conf.php');

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


