<div class="row sticky-top">
    <nav class="container navbar navbar-expand-lg navbar-dark" style="background-color: black;">
        <!-- Logo de cabecera -->
        <div class="navbar-brand">
            <a href="index.php"><img src="happypeoplestore/dist/img/logo recibo.jpg" alt="Logo" class="img-fluid" style="max-width: 150px;"></a>
        </div>

        <!-- Botón de hamburguesa para dispositivos pequeños en el lado derecho -->
        <button class="navbar-toggler ml-auto navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <!-- Enlaces de navegación -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index.php" class="navegacion nav-link"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a></li>
                <li class="nav-item"><a href="index.php?modulo=nosotros" class="navegacion nav-link">Nosotros</a></li>
                <li class="nav-item"><a href="index.php?modulo=contactos" class="navegacion nav-link"> Contacto</a></li>

                <!-- Carrito de compras -->
                <li class="nav-item dropdown">
                    <!-- Icono -->
                    <a class="nav-link" data-toggle="dropdown" href="#" id="iconoCarrito">
                        <i style="font-size: 20px;" class="icono fa fa-cart-plus text-white" aria-hidden="true"></i>
                        <span class="badge badge-danger navbar-badge" id="badgeProducto"></span>
                    </a>
                    <!-- Ventana emergente -->
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" id="listaCarrito">
                        <!-- Total de productos en dinero -->
                    </div>
                </li>

                <!-- Iniciar sesión -->
                <li class="nav-item dropdown">
                    <!-- Icono de login -->
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i style="font-size: 20px;" class="fa fa-user text-white" aria-hidden="true"></i>
                    </a>
                    <!-- Contenido de login -->
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                        <?php
                        if (isset($_SESSION['idCliente']) == false) {
                        ?>
                            <a href="happypeoplestore/panel.php" class="dropdown-item">
                                <i class="fa fa-id-card-o" aria-hidden="true"></i> Administración
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="login.php" class="dropdown-item">
                                <i class="fas fa-door-open mr-2"></i> Iniciar sesión
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="registro.php" class="dropdown-item">
                                <i class="nav icon fas fa-sign-in-alt mr-2"></i> Registrarse
                            </a>
                        <?php
                        } else {
                        ?>
                            <h6 style="background-image: radial-gradient(circle at 25.74% 70.36%, #392d69 0, #001051 50%, #00003b 100%); color:white" href="index.php?modulo=usuario" class="dropdown-item">
                            <i class="fa fa-id-badge" style="font-size: 20px;" aria-hidden="true"></i><i class="text-primary mr-2"></i> Bienvenido <?php echo $_SESSION['nombreCliente'] ?>
                            </h6>
                            <a href="happypeoplestore/panel.php" class="dropdown-item">
                                <i class="fa fa-id-card-o" aria-hidden="true"></i>  Administración
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="index.php?modulo=perfil" class="dropdown-item">
                                <i class="fas fa-user text-primary mr-2"></i> Mi Espacio
                            </a>
                            <div class="dropdown-divider"></div>
                            <form action="index.php" method="post">
                                <button name="accion" class="btn btn-danger dropdown-item" type="submit" value="cerrar">
                                    <i class="fas fa-door-closed text-danger mr-2"></i> Cerrar Sesión
                                </button>
                            </form>
                        <?php
                        }
                        ?>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>

<?php
$mensaje = $_REQUEST['mensaje'] ?? '';
if ($mensaje) {
?>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <?php echo $mensaje; ?>
    </div>
<?php
}
?>

<style>
    .navegacion{
        color: white;
    }
    .navegacion:hover{
        color:darkgray;
    }
    
</style>
