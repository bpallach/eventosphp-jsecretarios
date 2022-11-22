<?php
require_once dirname(__FILE__).'/../config/db.php';

class events_model {

    public function __construct()
    {
        $this->events = array();
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

    public static function update_event(array $data)
    {
        $id = $data["id"];
        $titulo = $data["titulo"];
        $fecha = $data["fecha"];
        $hora = $data["hora"];
        $descripcion_corta = $data["descripcion_corta"];
        $descripcion_larga = $data["descripcion_larga"];
        $asistentes = $data["asistentes"];

        $bbdd = new Conexion();
        $bbdd = $bbdd->connect();
        $sql = "UPDATE actos SET Titulo='$titulo', Fecha='$fecha', Hora='$hora', Descripcion_corta='$descripcion_corta', Descripcion_larga='$descripcion_larga', Num_asistentes=$asistentes  WHERE Id_acto=$id";
        $query = $bbdd->prepare($sql);
        return $query -> execute();        
    }

    public function get_type_events()
    {
        $bbdd = new Conexion();
        $bbdd = $bbdd->connect();
        $sql = 'SELECT * FROM tipo_acto';
        $query = $bbdd->prepare($sql);
        $query -> execute();
        $results = $query -> fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public static function add_event(array $data)
    {
        $titulo = $data["titulo"];
        $fecha = $data["fecha"];
        $hora = $data["hora"];
        $descripcion_corta = $data["descripcion_corta"];
        $descripcion_larga = $data["descripcion_larga"];
        $asistentes = $data["asistentes"];
        $tipoActo = $data["tipo_acto"];

        $bbdd = new Conexion();
        $bbdd = $bbdd->connect();
        $sql = "INSERT INTO actos (Titulo, Fecha, Hora, Descripcion_corta, Descripcion_larga, Num_asistentes, Id_tipo_acto) VALUES ('$titulo', '$fecha', '$hora', '$descripcion_corta', '$descripcion_larga', $asistentes, $tipoActo)";
        $query = $bbdd->prepare($sql);
        return $query -> execute();        
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