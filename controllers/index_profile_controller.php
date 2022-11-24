<?php 
session_start();

if(!isset($_SESSION['status'])){
    session_destroy();
    header('Location:./login.php');
}
require_once('./models/user_model.php');

$user = new user_model;
$usuario = $user->get_user($_SESSION['Id_usuario']);

require('./views/profile_view.php');
