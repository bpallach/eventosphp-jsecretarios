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

    public function suscribe($eventId, $personId)
    {
        $bbdd = new Conexion();
        $bbdd = $bbdd->connect();
        $date = date('Y-m-d') . " " . date('h:i:s');
        $sql = "INSERT INTO inscritos (Id_persona, id_acto, Fecha_inscripcion) VALUES ($personId, $eventId, '$date')";
        $query = $bbdd->prepare($sql);
        return $query -> execute();
    }

    public function unsuscribe($eventId, $personId)
    {
        $bbdd = new Conexion();
        $bbdd = $bbdd->connect();
        $sql = "DELETE FROM inscritos WHERE Id_persona = $personId AND id_acto = $eventId";
        $query = $bbdd->prepare($sql);
        return $query -> execute();
    }

    public function delete_type_event($eventId)
    {
        $bbdd = new Conexion();
        $bbdd = $bbdd->connect();
        $sql = "DELETE FROM tipo_acto WHERE Id_tipo_acto = $eventId";
        $query = $bbdd->prepare($sql);
        return $query -> execute();
    }

    public function delete_event($eventId)
    {
        $bbdd = new Conexion();
        $bbdd = $bbdd->connect();
        $sql = "DELETE FROM actos WHERE Id_acto = $eventId";
        $query = $bbdd->prepare($sql);
        return $query -> execute();
    }

    public function get_inscribeds()
    {
        $bbdd = new Conexion();
        $bbdd = $bbdd->connect();
        $sql = 'SELECT * FROM inscritos';
        $query = $bbdd->prepare($sql);
        $query -> execute();
        $results = $query -> fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public function get_event_name($eventId)
    {
        $bbdd = new Conexion();
        $bbdd = $bbdd->connect();
        $sql = "SELECT Titulo FROM actos WHERE Id_acto = $eventId";
        $query = $bbdd->prepare($sql);
        $query -> execute();
        $results = $query -> fetch(PDO::FETCH_ASSOC);
        return $results;
    }

    public function delete_inscribed_event($inscribedId)
    {
        $bbdd = new Conexion();
        $bbdd = $bbdd->connect();
        $sql = "DELETE FROM inscritos WHERE Id_inscripcion = $inscribedId";
        $query = $bbdd->prepare($sql);
        return $query -> execute();
    }
    public function get_inscribed($inscribedId)
    {
        $bbdd = new Conexion();
        $bbdd = $bbdd->connect();
        $sql = "SELECT * FROM inscritos WHERE Id_inscripcion = $inscribedId";
        $query = $bbdd->prepare($sql);
        $query -> execute();
        $results = $query -> fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public static function update_inscribed($Id_inscripcion, $id_acto, $Id_persona)
    {
        $bbdd = new Conexion();
        $bbdd = $bbdd->connect();
        $sql = "UPDATE inscritos SET Id_persona=$Id_persona, id_acto=$id_acto  WHERE Id_inscripcion=$Id_inscripcion";
        $query = $bbdd->prepare($sql);
        return $query -> execute();        
    }
    
}