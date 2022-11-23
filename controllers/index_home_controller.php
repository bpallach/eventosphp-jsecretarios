<?php 
session_start();

if(!isset($_SESSION['status'])){
    session_destroy();
    header('Location:/login.php');
}

require_once('./models/events_model.php');
require_once('./models/user_model.php');

$event = new events_model();

$events = $event->get_events();

$user = new user_model;
$user->get_suscribed_events($_SESSION['Id_Persona']);

require('./views/home_view.php');
