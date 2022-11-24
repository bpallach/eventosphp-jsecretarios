<?php 
session_start();
if(!$_SESSION['Id_usuario']) {
    header('Location:./login.php');
}

$username = trim($_POST["username"]);
$password = trim($_POST["password"]);
require_once('../models/user_model.php');
$user = new user_model;
$update = $user->update_user_credentials($username, $password, $_SESSION['Id_usuario']);

if($update){ ?>
    
    <script>
        alert('Actualizado Correctamente');
        window.location.href = "../login.php";
    </script>
    
<?php }else{ ?>
    <script>
        window.history.back();
    </script>
<?php }
