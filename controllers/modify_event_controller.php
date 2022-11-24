<?php 
session_start();
if(!$_SESSION['Id_usuario']) {
    header('Location:./login.php');
}

$id = $_GET['id'];

require_once('./models/events_model.php');
$event = new events_model;
$event = $event->get_event($id);

require('views/modify_event_view.php');
