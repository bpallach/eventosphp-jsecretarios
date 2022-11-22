<?php 
if(empty($user)){
    header("Location: ../index.php"); //si en el controlador no dvuelve nada lo enviamos al index.php
}
?>

<!DOCTYPE html>
<html lang="es">
<?php require('partials/head.php') ?>
<body>
    <?php require('partials/header.php') ?>
    <main class="container">
        <section class="users-table">
            <form action="../controllers/submit_modify_user_controller.php" method="post">

                <div class="form-group my-3">
                    <label for="username">Username:</label>
                    <input required class="form-control" type="text" id="username" name="username" value="<?php echo $user['Username']; ?>">
                </div>

                <div class="form-group my-3">
                    <label for="fecha">Password:</label>
                    <input required class="form-control" type="password" id="password" name="password" value="<?php echo $user['Password']; ?>">
                </div>

                

                <div class="form-group my-3">
                    <label for="Id_Persona" id="Id_Persona">Persona Asignada:</label>
                    <select name="Id_Persona" required class="form-control">
                        <option value="">Seleccionar persona</option>
                        <?php 
                        if(!empty($personas)){
                            foreach($personas as $persona){ ?>
                                <option value="<?php echo $persona["Id_persona"]?>"><?php echo $persona["Nombre"] . " " . $persona["Apellido1"] ?></option>
                            <?php } 
                        }else{ ?>
                            <option value="0">No hay personas disponibles</option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group my-3">                
                    <label for="Id_tipo_usuario">Tipo de usuario:</label>
                    <select name="Id_tipo_usuario" required class="form-control" id="Id_tipo_usuario">
                        <option value="">Seleccionar tipo de usuario</option>
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                    
                </div>

                <input required type="hidden" value="<?php echo $user['Id_usuario']; ?>" id="id" name="id">

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </section>
    </main>
    <?php require('partials/footer.php') ?>
</body>
</html>