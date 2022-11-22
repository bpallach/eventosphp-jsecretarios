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
        <section class="events-table my-5 shadow p-3 mb-5 bg-white rounded">
            <h2 class="text-primary">Editar evento: <?php echo $event['Titulo']; ?></h2>
            <form action="../controllers/submit_modify_event_controller.php" method="post">
            
                <div class="form-group my-3">
                    <label for="titulo">Titulo:</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $event['Titulo']; ?>">
                </div>

                <div class="form-group my-3">
                    <label for="fecha">Fecha:</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo $event['Fecha']; ?>">
                </div>

                <div class="form-group my-3">
                    <label for="hora">Hora:</label>
                    <input type="time" class="form-control" id="hora" name="hora" value="<?php echo $event['Hora']; ?>">
                </div>

                <div class="form-group my-3">
                    <label for="descripcion_corta">Descripcion Corta:</label>
                    <input type="textarea" class="form-control" id="descripcion_corta" name="descripcion_corta" value="<?php echo $event['Descripcion_corta']; ?>">
                </div>

                <div class="form-group my-3">
                    <label for="descripcion_larga">Descripcion Larga:</label>
                    <input type="textarea" class="form-control" id="descripcion_larga" name="descripcion_larga" value="<?php echo $event['Descripcion_larga']; ?>">
                </div>

                <div class="form-group my-3">
                    <label for="asistentes">Asistentes:</label>
                    <input type="number" class="form-control" id="asistentes" name="asistentes" value="<?php echo $event['Num_asistentes']; ?>">
                </div>
                    <input type="hidden" class="form-control" value="<?php echo $event['Id_acto']; ?>" id="id" name="id">

                    <button type="submit" class="btn btn-primary my-3">Confirmar</button>
            </form>
        </section>
    </main>
    <?php require('partials/footer.php') ?>
</body>
</html>