<!DOCTYPE html>
<html lang="en">
<?php require('partials/head.php') ?>
<body>
    <?php require('partials/header.php') ?>
    <main>
        <section class="container">
            <table class="table table-striped-columns table-bordered">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Descripción corta</th>
                        <th>Asistentes</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach($events as $event) : ?>
                        <tr>
                            <td><?php echo $event['Titulo']; ?></td>
                            <td><?php echo $event['Descripcion_corta']; ?></td>
                            <td><?php echo $event['Num_asistentes']; ?></td>
                            <td><?php echo $event['Fecha']; ?></td>
                            <td><?php echo $event['Hora']; ?></td>
                            <td><a href="/editar-evento.php?id=<?php echo $event['Id_acto'];?>">Modificar</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>
    <?php require('partials/footer.php') ?>
</body>
</html>