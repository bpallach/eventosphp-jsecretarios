<?php

require_once('config/db.php');

echo "<h1>Prueba de Docker</h1>";
$sql = 'SELECT * FROM tipo_acto';
$bbdd = new Conexion();
$bbdd = $bbdd->connect();
$query = $bbdd->prepare($sql);
$query -> execute();
$results = $query -> fetch(PDO::FETCH_ASSOC);

echo var_dump($results);