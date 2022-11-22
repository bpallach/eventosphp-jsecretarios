<?php
require_once dirname(__FILE__).'/../config/db.php';

class user_model {

    public function __construct()
    {
        $this->users = array();
    }

    public function get_users() : array
    {
        $bbdd = new Conexion();
        $bbdd = $bbdd->connect();
        $sql = 'SELECT * FROM usuarios';
        $query = $bbdd->prepare($sql);
        $query -> execute();
        $results = $query -> fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public function get_user($id)
    {
        $bbdd = new Conexion();
        $bbdd = $bbdd->connect();
        $sql = 'SELECT * FROM `usuarios` WHERE `Id_usuario` = ' . $id;
        $query = $bbdd->prepare($sql);
        $query -> execute();
        $results = $query -> fetch(PDO::FETCH_ASSOC);
        return $results;
    }

    public static function update_user(array $data) : bool
    {
        $id = $data["id"];
        $Username = $data["Username"];
        $Password = $data["Password"];
        $Id_Persona = $data["Id_Persona"];
        $Id_tipo_usuario = $data["Id_tipo_usuario"];

        $bbdd = new Conexion();
        $bbdd = $bbdd->connect();
        $sql = "UPDATE usuarios SET Username='$Username', Password='$Password', Id_Persona='$Id_Persona', Id_tipo_usuario='$Id_tipo_usuario' WHERE Id_usuario=$id";
        $query = $bbdd->prepare($sql);
        return $query -> execute();    
    }

    public function get_personas()
    {
        $bbdd = new Conexion();
        $bbdd = $bbdd->connect();
        $sql = 'SELECT * FROM Personas';
        $query = $bbdd->prepare($sql);
        $query -> execute();
        $results = $query -> fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    
}