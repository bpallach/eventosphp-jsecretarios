<!DOCTYPE html>
<html lang="en">
<?php require('partials/head.php') ?>
<body>
    <?php require('partials/header.php') ?>
    <main class="container">
        <section class="my-4 events d-flex flex-column align-items-start">
            <h1 class="text-primary mt-5">Evento: </strong><?php echo $evento['Titulo']; ?></h1>

            <p><strong>Descripción Corta:</strong> <?php echo $evento['Descripcion_corta']; ?></p>

            <p><strong>Fecha: </strong><?php echo $evento['Fecha']; ?></p>

            <p><strong>Hora: </strong><?php echo $evento['Hora']; ?></p>

            <p><strong>Asistentes:</strong> <?php echo $evento['Num_asistentes']; ?></p>

            <p><strong>Tipo acto: </strong><?php echo $typeEventName['Descripcion']; ?></p>

            <p><strong>Descripción Larga: </strong><?php echo $evento['Descripcion_larga']; ?></p>
            
            <?php 
            $suscribed = $user->get_suscribed_event($_SESSION['Id_Persona'], $evento['Id_acto']);
            if($suscribed["COUNT(id_acto)"] > 0){ ?>
                <a href="./controllers/submit_unsuscribe_event_controller.php?id=<?php echo $evento['Id_acto']; ?>" class="btn btn-danger">Desuscribirse</a>
            <?php }else{ ?>
                <a href="./controllers/submit_suscribe_event_controller.php?id=<?php echo $evento['Id_acto']; ?>" class="btn btn-success">Inscribirse</a>
            <?php }

            ?>
        </section>
    </main>
    <?php require('partials/footer.php') ?>
</body>
</html>