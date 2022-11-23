<?php 
session_start();
if($_SESSION['Id_tipo_usuario'] != 1) {
    header('Location:./login.php');
}
require_once('../models/events_model.php');

$data = [
    'id' => trim($_POST["id"]),
    'titulo' => trim($_POST["titulo"]),
    'fecha' => trim($_POST["fecha"]),
    'hora' => trim($_POST["hora"]),
    'descripcion_corta' => trim($_POST["descripcion_corta"]),
    'descripcion_larga' => trim($_POST["descripcion_larga"]),
    'asistentes' => trim($_POST["asistentes"]),
];

$update = events_model::update_event($data);

if($update){ ?>
    
    <script>
        alert('Actualizado Correctamente');
        window.location.href = "/panel-de-administrador.php";
    </script>
    
    // require('../views/modify_event_view.php');
<?php }else{ ?>
    <script>
        window.history.back();
    </script>
<?php }


