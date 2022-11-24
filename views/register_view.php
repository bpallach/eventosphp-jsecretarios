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
                        <label class="form-label"><h5>Nombre de usuario</h5></label>
                        <input required type="text" class="form-control" id="Username" name="Username" placeholder="Nombre de usuario">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><h5>Nombre</h5></label>
                        <input required type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><h5>Apellido</h5></label>
                        <input required type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Apellido">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><h5>Segundo Apellido</h5></label>
                        <input required type="text" class="form-control" id="Apellido2" name="Apellido2" placeholder="segundo apellido">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><h5>Contraseña</h5></label>
                        <input required type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                    </div>

                    <button type="submit" class="btn btn-outline-primary">Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <?php require('partials/footer.php') ?>
</body>
</html>