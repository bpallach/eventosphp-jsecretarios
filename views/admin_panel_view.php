<!DOCTYPE html>
<html lang="en">
<?php require('partials/head.php') ?>
<body>
    <?php require('partials/header.php') ?>
    <main class="container">
        
        <section class="admin-panel-table admin-events my-4">

            <div class="d-flex align-items-center gap-4">
                <h2 class="text-primary mb-3">Tabla de Actos</h2>
                <a class="btn btn-primary" href="./nuevo-acto.php">Añadir acto</a>
            </div>

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
                            <td>
                                <a href="./editar-evento.php?id=<?php echo $event['Id_acto'];?>"><i class="bi bi-pencil-square"></i></a>
                                <a class="text-danger" href="./controllers/submit_delete_event_controller.php?id=<?php echo $event['Id_acto'];?>"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>

        <section class="admin-panel-table admin-users my-4">
            <div class="d-flex align-items-center gap-4">
                <h2 class="text-primary mb-3">Tabla de usuarios</h2>
                <a class="btn btn-primary" href="">Añadir usuario</a>
            </div>
            
            <table class="table table-striped-columns table-bordered">
                <thead>
                    <tr>
                        <th>Id_usuario</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Id_Persona</th>
                        <th>Id_tipo_usuario</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach($users as $user) : ?>
                        <tr>
                            <td><?php echo $user['Id_usuario']; ?></td>
                            <td><?php echo $user['Username']; ?></td>
                            <td><?php echo $user['Password']; ?></td>
                            <td><?php echo $user['Id_Persona']; ?></td>
                            <td><?php echo $user['Id_tipo_usuario']; ?></td>
                            <td>
                                <a href="./editar-usuario.php?id=<?php echo $user['Id_usuario'];?>"><i class="bi bi-pencil-square"></i></a>
                                <a class="text-danger" href="./controllers/submit_delete_user_controller.php?id=<?php echo $user['Id_usuario'];?>"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>

        <section class="admin-panel-table admin-type-events my-4">

            <div class="d-flex align-items-center gap-4">
                <h2 class="text-primary mb-3">Tipos de actos</h2>
            </div>

            <table class="table table-striped-columns table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach($type_events as $type_event) : ?>
                        <tr>
                            <td><?php echo $type_event['Id_tipo_acto']; ?></td>
                            <td><?php echo $type_event['Descripcion']; ?></td>
                            <td>
                                <a class="text-danger" href="./controllers/submit_delete_type_event_controller.php?id=<?php echo $type_event['Id_tipo_acto'];?>"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>

        <section class="admin-panel-table admin-type-events my-4">

            <div class="d-flex align-items-center gap-4">
                <h2 class="text-primary mb-3">Inscritos</h2>
                <a class="btn btn-primary" href="./nuevo-inscrito.php">Inscribir usuario</a>
            </div>

            <table class="table table-striped-columns table-bordered">
                <thead>
                    <tr>
                        <th>Id inscripción</th>
                        <th>Persona</th>
                        <th>Acto</th>
                        <th>Fecha Inscripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $user = new user_model();
                    $event = new events_model();
                    foreach($inscribeds as $inscribed) : 
                        $personaName = $user->get_persona($inscribed['Id_persona']);
                        $eventName = $event->get_event_name($inscribed['id_acto'])
                    ?>
                        <tr>
                            <td><?php echo $inscribed['Id_inscripcion']; ?></td>
                            <td><?php echo $personaName['Nombre'] . " " . $personaName['Apellido1']; ?></td>
                            <td><?php echo $eventName['Titulo']; ?></td>
                            <td><?php echo $inscribed['Fecha_inscripcion']; ?></td>
                            <td>
                                <a href="./editar-inscrito.php?id=<?php echo $inscribed['Id_inscripcion'];?>"><i class="bi bi-pencil-square"></i></a>
                                <a class="text-danger" href="./controllers/submit_delete_inscribed_controller.php?id=<?php echo $inscribed['Id_inscripcion'];?>"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>
    <?php require('partials/footer.php') ?>
</body>
</html>