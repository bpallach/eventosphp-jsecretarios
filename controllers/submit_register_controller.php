<?php 
require_once('../models/user_model.php');

$Nombre = trim($_POST["Nombre"]);
$Username = trim($_POST["Username"]);
$Apellido = trim($_POST["Apellido"]);
$Apellido2 = trim($_POST["Apellido2"]);
$Password = trim($_POST["password"]);

$user = new user_model;
$update = $user->create_user($Nombre, $Username, $Apellido, $Apellido2, $Password);

if($update){ ?>
    
    <script>
        alert('Registrado Correctamente');
        window.location.href = "../login.php";
    </script>
    
<?php }else{ ?>
    <script>
        window.history.back();
    </script>
<?php }
