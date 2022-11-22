<?php 

require_once('./models/events_model.php');
$event = new events_model();
$type_events = $event->get_type_events();

require('views/add_event_view.php');
