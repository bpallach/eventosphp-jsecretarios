<?php 
session_start();
if($_SESSION['Id_tipo_usuario'] != 1) {
    header('Location:./login.php');
}
require_once('../models/events_model.php');

$data = [
    'titulo' => trim($_POST["Titulo"]),
    'fecha' => trim($_POST["fecha"]),
    'hora' => trim($_POST["hora"]),
    'descripcion_corta' => trim($_POST["Descripcion_corta"]),
    'descripcion_larga' => trim($_POST["Descripcion_larga"]),
    'asistentes' => trim($_POST["asistentes"]),
    'tipo_acto' => trim($_POST["Id_tipo_acto"]),
];

$add = events_model::add_event($data);

if($add){ ?>
    
    <script>
        alert('Añadido Correctamente');
        window.location.href = "../panel-de-administrador.php";
    </script>
    
<?php }else{ ?>
    <script>
        window.history.back();
    </script>
<?php }
