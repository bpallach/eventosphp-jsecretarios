<?php
require_once dirname(__FILE__).'/../config/db.php';

class events_model {

    public function __construct()
    {
        $this->cursos = array();
    }

    public function get_events()
    {
        $bbdd = new Conexion();
        $bbdd = $bbdd->connect();
        $sql = 'SELECT * FROM actos';
        $query = $bbdd->prepare($sql);
        $query -> execute();
        $results = $query -> fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public function get_event($id)
    {
        $bbdd = new Conexion();
        $bbdd = $bbdd->connect();
        $sql = 'SELECT * FROM `actos` WHERE `Id_acto` = ' . $id;
        $query = $bbdd->prepare($sql);
        $query -> execute();
        $results = $query -> fetch(PDO::FETCH_ASSOC);
        return $results;
    }

    // public function add_evento($id)
    // {
    //     $bbdd = new Conexion();
    //     $bbdd = $bbdd->connect();
    //     $sql = 'INSERt * FROM `tipo_acto` WHERE `Id_tipo_acto` = ' . $id;
    //     $query = $bbdd->prepare($sql);
    //     $query -> execute();
    //     $results = $query -> fetch(PDO::FETCH_ASSOC);
    //     return $results;
    // }
}