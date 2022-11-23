<!DOCTYPE html>
<html lang="en">
<?php require('partials/head.php') ?>
<body>
    <?php require('partials/header.php') ?>
    <main class="container">
        <div class="d-flex align-items-center my-5">
            <div class="mx-auto" style="width: 450px;">
                <h1>Iniciar Sesión</h1>
                <form method="POST" action="./../controllers/submit_login_controller.php">
                    <div class="mb-3">
                        <label class="form-label" for="username"><h5>Nombre de usuario</h5></label>
                        <input required type="text" class="form-control" name="username" id="username" placeholder="nombre de usuario">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="password"><h5>Contraseña</h5></label>
                        <input required type="password" class="form-control" name="password" id="password" placeholder="contraseña">
                    </div>

                    <button type="submit" class="btn btn-outline-primary">Iniciar Sesión</button>
                    <a href="/registrarse.php" class="btn btn-danger">Registrarse</a>

                    <?php 
                        if(isset($_GET['e'])){ ?>
                            <p class="text-danger"><?php echo $_GET['e']; ?></p>
                        <?php }
                    ?>

                </form>
            </div>
        </div>
    </main>
    <?php require('partials/footer.php') ?>
</body>
</html>