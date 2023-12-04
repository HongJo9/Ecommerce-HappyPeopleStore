<div class="row sticky-top">
<nav class="container navbar navbar-expand navbar-dark " style="background-color: black;">
    <!-- Logo de cabecera -->
    <div class="navbar-brand ">
        <a href="happypeoplestore/panel.php"><img src="happypeoplestore/dist/img/logo recibo.jpg" alt="Logo" class="img-fluid" style="max-width: 150px;"></a>
        
    </div>
    <!-- Enlaces de navegación derechos -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item"><a href="index.php" class="nav-link">Inicio</a></li>
        <li class="nav-item"><a href="index.php?modulo=nosotros" class="nav-link">Nosotros</a></li>
        <li class="nav-item"><a href="index.php?modulo=contactos" class="nav-link">Contacto</a></li>

        <!-- Carrito de compras-->
        <li class="nav-item dropdown">
            <!-- icono -->
            <a class="nav-link" data-toggle="dropdown" href="#" id="iconoCarrito">
                <i style="font-size: 20px;" class="icono fa fa-cart-plus" aria-hidden="true"></i>
                <span class="badge badge-danger navbar-badge" id="badgeProducto"></span>
            </a>
            <!-- ventanita emergente -->
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" id="listaCarrito">
                <!-- total de productos en dinero -->
            </div>
        </li>
        <!-- iniciar sesion -->
        <li class="nav-item dropdown">
            <!-- icono de login -->
            <a class="nav-link" data-toggle="dropdown" href="#">
            <i style="font-size: 20px;" class="fa fa-user-o" aria-hidden="true"></i>
            </a>
            <!-- contenido de login -->
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                <?php
                    if(isset($_SESSION['idCliente'])==false){
                    ?>
                        <a href="login.php" class="dropdown-item">
                            <i class="fas fa-door-open mr-2"></i> Iniciar sesion
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="registro.php" class="dropdown-item">
                            <i class="fas fa-sign-in-alt mr-2"></i> Registrarse
                        </a>
                    <?php
                    }else{
                    ?>
                        <h6 href="index.php?modulo=usuario" class="dropdown-item">
                            <i class=text-primary mr-2"></i> Bienvenido <?php echo $_SESSION['nombreCliente']?>
                        </h6>
                        <a href="index.php?modulo=perfil" class="dropdown-item">
                            <i class="fas fa-user text-primary mr-2"></i> Mi Espacio
                        </a>
                        <form action="index.php" method="post">
                            <button name="accion" class="btn btn-danger dropdown-item" type="submit" value="cerrar">
                                <i class="fas fa-door-closed text-danger mr-2"></i> Cerrar Sesion
                            </button>
                        </form> 
                    <?php    
                }
                ?>
            </div>
        </li>
    </ul>
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

