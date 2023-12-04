<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Happy People Store</title>
    <!-- Indica al navegador que sea sensible al ancho de la pantalla -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="happypeoplestore/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Estilo del tema -->
    <link rel="stylesheet" href="happypeoplestore/dist/css/adminlte.min.css">
    <!-- Selector de rango de fechas -->
    <link rel="stylesheet" href="happypeoplestore/plugins/daterangepicker/daterangepicker.css">
      <!-- tipo de letra -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap">
    <?php
        session_start();
        $accion=$_REQUEST['accion']??'';
        if($accion=='cerrar'){
            session_destroy();
            header("Refresh:0");
        }
    ?>
</head>
    <body>
    <style>
      *{
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
      }

      body {
        background-image: url("happypeoplestore/dist/img/fondo.jpg");
        background-size: cover; /* Cubre todo el área visible */
        background-repeat: no-repeat; /* Evita la repetición de la imagen */
        background-attachment: fixed; /* Hace que la imagen de fondo sea fija mientras se desplaza la página */
        /* Puedes agregar más propiedades según tus necesidades */
    }
    </style>
    <?php
        include_once "happypeoplestore/DBecommerce.php";
        $con = mysqli_connect($host, $user, $pass, $db);
    ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php
                        include_once "cabecera.php";
      
                        $modulo=$_REQUEST['modulo']??'';
                        if($modulo=="productos" || $modulo=="" ){
                            include_once "promociones.php";
                            include_once "ProductosPersonalizados/productosPerso.php";
                            include_once "ProductosImportados/productos.php"; 
                        }
                        
                        
                        if($modulo=="detalleProducto"){
                            include_once "ProductosImportados/detalleProducto.php";
                        }

                        if($modulo=="perfil"){
                            include_once "perfil.php";
                        }

                        if($modulo=="pedidos"){
                            include_once "perfil.php";
                        }

                        if($modulo=="detalleProductoPerso"){
                            include_once "ProductosPersonalizados/detalleProductoPerso.php";
                        }

                        if( $modulo=="carrito" ){
                            include_once "carrito.php";
                        }                        

                        if( $modulo=="pago" ){
                            include_once "pago.php";
                        }

                        if( $modulo=="recibo" ){
                            include_once "recibo.php";
                        }

                        if( $modulo=="nosotros" ){
                            include_once "nosotros.php";
                        }

                        if( $modulo=="contactos" ){
                            include_once "contactos.php";
                        }

                        if( $modulo=="recibo" ){
                            include_once "recibo.php";
                        }

                        if( $modulo=="tienda" ){
                            include_once "tienda.php";
                        }

                        if( $modulo=="ProductosInsert" ){
                            include_once "ProductosInsert.php";
                        }
                        if( $modulo=="Recibo_Venta" ){
                            include_once "recibos/Recibo_Venta.php";
                        }

                        if( $modulo=="Recibo_Preventa" ){
                            include_once "recibos/Recibo_Preventa.php";
                        }
                    ?>
                </div>
            </div>
        </div>
        <?php
            include_once "footer.php";
        ?>



                
        <!-- jQuery -->
        <script src="happypeoplestore/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="happypeoplestore/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="happypeoplestore/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- daterangepicker -->
        <script src="happypeoplestore/plugins/moment/moment.min.js"></script>
        <script src="happypeoplestore/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="happypeoplestore/dist/js/pages/dashboard.js"></script>
        <!-- archivo php del carrito de compras -->
        <script src="happypeoplestore/js/carritoCompras.js"></script>
    </body>
</html>

