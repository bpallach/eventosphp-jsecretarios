<!DOCTYPE html>
<html lang="en">
<?php require('partials/head.php') ?>
<body>
    <?php require('partials/header.php') ?>
    <main class="container">
        <div class="d-flex align-items-center my-5">
            <div class="mx-auto" style="width: 450px;">
                <h1 class="mb-4">Mi perfil: <?php echo $usuario['Username'] ?></h1>
                <form action="./controllers/submit_modify_profile_controller.php" method="post">
                    <div class="mb-3">
                        <label class="form-label"><h5>Nombre de usuario</h5></label>
                        <input required type="nombre" class="form-control" id="username" name="username" placeholder="Introduce tu nuevo nombre">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><h5>Contraseña</h5></label>
                        <input required type="contraseña" class="form-control" id="password" name="password" placeholder="Introduce tu nueva contraseña">
                    </div>

                    <button type="submit" class="btn btn-outline-primary">Guardar cambios</button>
                </form>
                </form>
            </div>
        </div>
    </main>
    <?php require('partials/footer.php') ?>
</body>
</html>
