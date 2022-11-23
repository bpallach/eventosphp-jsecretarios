<?php 

session_start();
if($_SESSION['Id_tipo_usuario'] != 1) {
    header('Location:./login.php');
}

require_once('./models/events_model.php');
$event = new events_model();
$type_events = $event->get_type_events();

require('views/add_event_view.php');
