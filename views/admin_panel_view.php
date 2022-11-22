<!DOCTYPE html>
<html lang="en">
<?php require('partials/head.php') ?>
<body>
    <?php require('partials/header.php') ?>
    <main class="container">
        
        <section class="admin-panel-table admin-events my-4">

            <div class="d-flex align-items-center gap-4">
                <h2 class="text-primary mb-3">Tabla de Actos</h2>
                <a class="btn btn-primary" href="/nuevo-acto.php">Añadir acto</a>
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
                            <td><a href="/editar-evento.php?id=<?php echo $event['Id_acto'];?>"><i class="bi bi-pencil-square"></i></a></td>
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
                            <td><a href="/editar-usuario.php?id=<?php echo $user['Id_usuario'];?>"><i class="bi bi-pencil-square"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>

        <section class="admin-panel-table admin-type-events my-4">

            <div class="d-flex align-items-center gap-4">
                <h2 class="text-primary mb-3">Tipos de actos</h2>
                <a class="btn btn-primary" href="/nuevo-acto.php">Añadir tipo de acto</a>
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
                            <td><a href="/editar-evento.php?id=<?php echo $event['Id_acto'];?>"><i class="bi bi-pencil-square"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>
    <?php require('partials/footer.php') ?>
</body>
</html>