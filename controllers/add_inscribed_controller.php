<?php 

session_start();
if($_SESSION['Id_tipo_usuario'] != 1) {
    header('Location:./login.php');
}

require_once('./models/events_model.php');
$event = new events_model();
$events = $event->get_events();

require_once('./models/user_model.php');
$user = new user_model();
$personas = $user->get_personas();

require('views/add_inscribed_view.php');
