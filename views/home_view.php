<?php 
require_once('./models/events_model.php'); 
$user = new user_model;
?>

<!DOCTYPE html>
<html lang="en">
<?php require('partials/head.php') ?>
<body>
    <?php require('partials/header.php') ?>
    <main class="container">
        <h1 class="text-primary mt-5">Eventos disponibles</h1>
        <section class="my-4 events row">

            <?php foreach($events as $event) : 
              $suscribed = $user->get_suscribed_event($_SESSION['Id_Persona'], $event['Id_acto']);
            ?>
            <div class="card col-sm-3 col-md-6 col-lg-4">
                <div class="card-body">
                    <a href="./evento.php?id=<?php echo $event['Id_acto']; ?>">
                        <h5 class="card-title"><?php echo $event['Titulo']; ?></h5>
                    </a>
                    <p class="card-text"><strong><?php echo $event['Descripcion_corta']; ?></strong></p>
                    <p class="card-text"><strong>Asistentes:</strong> <?php echo $event['Num_asistentes']; ?></p>
                    <?php 
                    
                    if($suscribed["COUNT(id_acto)"] > 0){ ?>
                        <a href="./controllers/submit_unsuscribe_event_controller.php?id=<?php echo $event['Id_acto']; ?>" class="btn btn-danger">Desuscribirse</a>
                    <?php }else{ ?>
                        <a href="./controllers/submit_suscribe_event_controller.php?id=<?php echo $event['Id_acto']; ?>" class="btn btn-success">Inscribirse</a>
                    <?php }

                    ?>
                    
                </div>
            </div>

            <?php endforeach; ?>

        </section>
    </main>
    <?php require('partials/footer.php') ?>
</body>
</html>