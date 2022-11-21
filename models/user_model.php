<?php
require_once dirname(__FILE__).'/../config/db.php';

class user_model {

    public function __construct()
    {
        $this->events = array();
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
}