<?php 
session_start();

if(!isset($_SESSION['status'])){
    session_destroy();
    header('Location:./login.php');
}

require_once('./models/events_model.php');
require_once('./models/user_model.php');

$id = $_GET['id'];

$event = new events_model();
$user = new user_model();

$evento = $event->get_event($id);
$typeEventName = $event->get_type_event_name($evento['Id_tipo_acto']);

require('./views/event_view.php');
