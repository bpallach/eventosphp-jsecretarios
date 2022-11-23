<?php 

session_start();
if($_SESSION['Id_tipo_usuario'] != 1) {
    header('Location:/login.php');
}

require_once('./models/events_model.php');
require_once('./models/user_model.php');


$event = new events_model();
$events = $event->get_events();
$inscribeds = $event->get_inscribeds();

$user = new user_model();
$users = $user->get_users();

$type_events = $event->get_type_events();

require('./views/admin_panel_view.php');
