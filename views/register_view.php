<!DOCTYPE html>
<html lang="en">
<?php require('partials/head.php') ?>
<body>
    <?php require('partials/header.php') ?>
    <main class="container">
        <div class="d-flex align-items-center my-5">
            <div class="mx-auto" style="width: 450px;">
                <h1>Registrarse</h1>
                <form action="./controllers/submit_register_controller.php" method="post">
                    <div class="mb-3">
                        <label class="form-label"><h5>Nombre</h5></label>
                        <input required type="text" class="form-control" id="CambioNombre" placeholder="nombre">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><h5>Apellido</h5></label>
                        <input required type="text" class="form-control" id="CambioNombre" placeholder="apellido">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><h5>Segundo Apellido</h5></label>
                        <input required type="text" class="form-control" id="CambioNombre" placeholder="segundo apellido">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><h5>Contraseña</h5></label>
                        <input required type="contraseña" class="form-control" id="CambioContraseña" placeholder="contraseña">
                    </div>

                    <button type="submit" class="btn btn-outline-primary">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </main>
    <?php require('partials/footer.php') ?>
</body>
</html>