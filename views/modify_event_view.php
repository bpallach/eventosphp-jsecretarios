<?php 
if(empty($event)){
    header("Location: ../index.php"); //si en el controlador no dvuelve nada lo enviamos al index.php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar evento</title>
</head>
<body>
    <form action="../controllers/update_event_controller" method="post">
        <label for="titulo">Titulo:</label>
        <input type="text" id="titulo" name="titulo" value="<?php echo $event['Titulo']; ?>">

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" value="<?php echo $event['Fecha']; ?>">

        <label for="hora">Hora:</label>
        <input type="text" id="hora" name="hora" value="<?php echo $event['Hora']; ?>">

        <label for="descripcion_corta">Descripcion Corta:</label>
        <input type="textarea" id="descripcion_corta" name="descripcion_corta" value="<?php echo $event['Descripcion_corta']; ?>">

        <label for="descripcion_larga">Descripcion Larga:</label>
        <input type="textarea" id="descripcion_larga" name="descripcion_larga" value="<?php echo $event['Descripcion_larga']; ?>">

        <label for="asistentes">Asistentes:</label>
        <input type="number" id="asistentes" name="asistentes" value="<?php echo $event['Num_asistentes']; ?>">

        <input type="hidden" value="<?php echo $event['Id_acto']; ?>">

        <input type="submit" value="Confirmar">
    </form>
</body>
</html>

