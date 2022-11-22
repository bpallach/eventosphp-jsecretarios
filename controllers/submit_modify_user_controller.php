<?php 

require_once('../models/user_model.php');

$data = [
    'id' => trim($_POST["id"]),
    'Username' => trim($_POST["username"]),
    'Password' => trim($_POST["password"]),
    'Id_Persona' => trim($_POST["Id_Persona"]),
    'Id_tipo_usuario' => trim($_POST["Id_tipo_usuario"]),
];

$update = user_model::update_user($data);

if($update){ ?>
    
    <script>
        alert('Actualizado Correctamente');
        window.location.href = "/panel-de-administrador.php";
    </script>
    
<?php }else{ ?>
    <script>
        window.history.back();
    </script>
<?php }


