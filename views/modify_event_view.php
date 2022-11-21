<?php 
if(empty($event)){
    header("Location: ../index.php"); //si en el controlador no dvuelve nada lo enviamos al index.php
}
?>

<!DOCTYPE html>
<html lang="en">
<?php require('partials/head.php') ?>
<body>
    <?php require('partials/header.php') ?>
    <main class="container">
        <section class="events-table">
            <form action="../controllers/submit_modify_event_controller.php" method="post">
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" value="<?php echo $event['Titulo']; ?>">

                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha" name="fecha" value="<?php echo $event['Fecha']; ?>">

                <label for="hora">Hora:</label>
                <input type="time" id="hora" name="hora" value="<?php echo $event['Hora']; ?>">

                <label for="descripcion_corta">Descripcion Corta:</label>
                <input type="textarea" id="descripcion_corta" name="descripcion_corta" value="<?php echo $event['Descripcion_corta']; ?>">

                <label for="descripcion_larga">Descripcion Larga:</label>
                <input type="textarea" id="descripcion_larga" name="descripcion_larga" value="<?php echo $event['Descripcion_larga']; ?>">

                <label for="asistentes">Asistentes:</label>
                <input type="number" id="asistentes" name="asistentes" value="<?php echo $event['Num_asistentes']; ?>">

                <input type="hidden" value="<?php echo $event['Id_acto']; ?>" id="id" name="id">

                <input type="submit" value="Confirmar">
            </form>
        </section>
    </main>
    <?php require('partials/footer.php') ?>
</body>
</html>