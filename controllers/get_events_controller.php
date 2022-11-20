<?php 

require_once('../models/events_model.php');

$event = new events_model();

$events = $event->get_events();

require('../views/home_view.php');
