<?php 

if(isset($_SESSION['status'])){
    if($_SESSION['status'] == true){
        $session = true;
        if($_SESSION['Id_tipo_usuario'] == 1) {
            $sessionAdmin = true;
        }else{
            $sessionAdmin = false;
        }
    }
}else{
    $session = false;
}

?>

<header>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand text-light" href="/">jSecretarios</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="text-light nav-link" href="/">Inicio</a>
                    </li>

                    <?php if($session && $sessionAdmin){ ?>
                        <li class="nav-item">
                            <a class="text-light nav-link" href="panel-de-administrador.php">Admin</a>
                        </li>
                    <?php } ?>

                    <?php if($session){ ?>
                        <li class="nav-item">
                            <a class="text-light nav-link" href="perfil.php">Perfil</a>
                        </li>

                        <li class="nav-item">
                            <a class="text-light nav-link" href="/cerrar-sesion.php">Cerrar Sesión</a>
                        </li>
                    <?php }else{ ?>
                        <li class="nav-item">
                            <a class="text-light nav-link" href="/login.php">Login</a>
                        </li>
                    <?php } ?>
                    
                </ul>

            </div>
        </div>
    </nav>
</header>