<?php 
session_start();
if($_SESSION['Id_tipo_usuario'] != 1) {
    header('Location:/login.php');
}

require_once('../models/user_model.php');
$user = new user_model;

$id = $_GET['id'];

$delete = $user->delete_user($id);

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
