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

    public function userAuthentication($data) {
 
        $user = $data["username"];
        $password = $data["password"];
        $user = $this->validate($user, $password);

        if ($user) {
            session_start();
            $_SESSION['Id_usuario'] = $user['Id_usuario'];
            $_SESSION['status'] = true;
            $_SESSION['Username'] = $user['Username'];
            $_SESSION['Id_Persona'] = $user['Id_Persona'];
            $_SESSION['Id_tipo_usuario'] = $user['Id_tipo_usuario'];
            
           if($_SESSION['Id_tipo_usuario'] == 1){
                header('Location:/panel-de-administrador.php');
            }else{
                header('Location:/index.php');
            }

        }else{
            header('Location: /login.php?e=Error de inicio de sesión');
        }
    }
    
    public function validate($user, $password) {
     
        try {
            $bbdd = new Conexion();
            $bbdd = $bbdd->connect();
            $sql = "SELECT * FROM usuarios WHERE Username = '$user' AND Password = '$password'" ;
            $query = $bbdd->prepare($sql);
            $query -> execute();
            $results = $query -> fetch(PDO::FETCH_ASSOC);
            return $results;
     
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }

    public function get_suscribed_events($userId) {
     
        try {
            $bbdd = new Conexion();
            $bbdd = $bbdd->connect();
            $sql = "SELECT DISTINCT id_acto FROM inscritos WHERE Id_persona = $userId" ;
            $query = $bbdd->prepare($sql);
            $query -> execute();
            $results = $query -> fetchAll(PDO::FETCH_ASSOC);
            return $results;
     
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }

    public function get_suscribed_event($Id_persona, $id_acto) {
     
        try {
            $bbdd = new Conexion();
            $bbdd = $bbdd->connect();
            $sql = "SELECT COUNT(id_acto) FROM inscritos WHERE Id_persona = $Id_persona AND id_acto = $id_acto";
            $query = $bbdd->prepare($sql);
            $query -> execute();
            $results = $query -> fetch(PDO::FETCH_ASSOC);
            return $results;
     
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }

    public function get_persona($Id_persona) {
     
        try {
            $bbdd = new Conexion();
            $bbdd = $bbdd->connect();
            $sql = "SELECT Nombre, Apellido1 FROM personas WHERE Id_persona = $Id_persona";
            $query = $bbdd->prepare($sql);
            $query -> execute();
            $results = $query -> fetch(PDO::FETCH_ASSOC);
            return $results;
     
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }

    public function delete_user($userId)
    {
        $bbdd = new Conexion();
        $bbdd = $bbdd->connect();
        $sql = "DELETE FROM usuarios WHERE Id_usuario = $userId";
        $query = $bbdd->prepare($sql);
        return $query -> execute();
    }
    
}