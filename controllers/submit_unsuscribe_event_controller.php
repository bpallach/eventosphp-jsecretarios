<?php
session_start();
require_once('../models/events_model.php');

$eventId = $_GET['id'];
$personId = $_SESSION['Id_Persona'];

$event = new events_model();

$unsuscribe = $event->unsuscribe($eventId, $personId);

header('Location:../index.php');
