<?php 

$id = $_GET["id"];

require_once('../models/events_model.php');

$events = new events_model();
$event = $events->get_event($id);

require('../views/modify_event_view.php');
