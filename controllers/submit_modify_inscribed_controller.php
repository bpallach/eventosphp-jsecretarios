<?php 
session_start();
if($_SESSION['Id_tipo_usuario'] != 1) {
    header('Location:./login.php');
}
require_once('../models/events_model.php');

$Id_inscripcion = trim($_POST["Id_inscripcion"]);
$id_acto = trim($_POST["Id_acto"]);
$Id_persona = trim($_POST["Id_persona"]);

$event = new events_model;
$update = $event->update_inscribed($Id_inscripcion,  $id_acto, $Id_persona);

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
