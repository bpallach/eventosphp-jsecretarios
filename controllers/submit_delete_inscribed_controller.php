<?php 
session_start();
if($_SESSION['Id_tipo_usuario'] != 1) {
    header('Location:./login.php');
}

require_once('../models/events_model.php');
$event = new events_model;

$id = $_GET['id'];

$delete = $event->delete_inscribed_event($id);

if($delete){ ?>
    
    <script>
        alert('Eliminado correctamente');
        window.location.href = "/panel-de-administrador.php";
    </script>
    
<?php }else{ ?>
    <script>
        window.history.back();
    </script>
<?php }
