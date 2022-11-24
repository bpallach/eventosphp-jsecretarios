<?php 
session_start();
if($_SESSION['Id_tipo_usuario'] != 1) {
    header('Location:./login.php');
}
$id = $_GET["id"];

require_once('./models/events_model.php');
require_once('./models/user_model.php');

$event = new events_model();
$inscribed = $event->get_inscribed($id);
$events = $event->get_events();

$user = new user_model();
$personas = $user->get_personas();

require('views/modify_inscribed_view.php');
