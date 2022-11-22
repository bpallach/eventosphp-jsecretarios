<?php 

$id = $_GET["id"];

require_once('models/user_model.php');

$users = new user_model();
$user = $users->get_user($id);
$personas = $users->get_personas();

require('views/modify_user_view.php');
