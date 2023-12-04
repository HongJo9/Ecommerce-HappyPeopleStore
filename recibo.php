<?php
    include_once "happypeoplestore/DBecommerce.php";
    $con = mysqli_connect($host, $user, $pass, $db);



    // Obtén el valor de la cookie "productosArray"
    $productosArrayJSON = $_COOKIE['productosArray'];

    // Decodifica el JSON a un array de PHP
    $productosArray = json_decode($productosArrayJSON, true);



    
    //reservado , esperate
    if (isset($_POST['confirmarPago'])) {
        // Suponiendo que tienes una tabla llamada 'ventas' para almacenar los detalles de la transacción
        $idCliente = $_SESSION['idCliente'] ?? '';
        $total = $_COOKIE['TOTAL'] ?? '';
    
        // Insertar los detalles de la transacción en la tabla 'ventas'
        $queryInsertVenta = "INSERT INTO pre_ventas (id_cliente, total)
                             VALUES ('$idCliente', '$total')";
        $resInsertVenta = mysqli_query($con, $queryInsertVenta);
    
        // Obtener el ID de la venta recién insertada
        $idpreVenta = mysqli_insert_id($con);
        
        // Verifica que el array exista y no esté vacío
        if ($productosArray && is_array($productosArray)) {
            // Itera sobre cada producto en el array
            foreach ($productosArray as $productoArray) {
                // Extrae el primer (y único) valor del array asociativo
                $producto = reset($productoArray);

                // Imprime los detalles del producto
                $idProducto = $producto['id'];
                $precioProducto = $producto['precio'];
                $cantidadProducto = $producto['cantidad'];

                $queryInsertDetalleVenta = "INSERT INTO detalle_preventa (id_preventa, id_producto, cantidad, precio_unitario, estado)
                                            VALUES ('$idpreVenta', '$idProducto', '$cantidadProducto', '$precioProducto' , 'pendiente')";
                
                $resInsertDetalleVenta = mysqli_query($con, $queryInsertDetalleVenta);
                if (!$resInsertDetalleVenta) {
                    echo "Error al insertar detalles del producto: " . mysqli_error($con);
                }
            }
        } else {
            echo "No se encontraron productos en el recibo.";
        }
    }


    $nombreCliente = $_POST['nombreCliHidden'];
    $emailCliente = $_POST['emailCliHidden'];
    $telefonoCliente = $_POST['TelefonoCliHidden'];
    $DNICliente = $_POST['DNICliHidden'];
    $direccionCliente = $_POST['direccionCliHidden'];
    $totalCompra = $_POST['totalHidden'];

    date_default_timezone_set('America/Lima');
?>
<body>
<div class="container pt-5 pr-5 pb-5 fondo">
    <div class="row">
        <div class="col-8">
            <!-- Recibo en un cuadro -->
            <div class="recibo bg-white">
                <div class="row">
                    <div class="col-4">
                        <img src="happypeoplestore/dist/img/logo recibo.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-8">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="background: black; color: #ccc;">Fecha PreCompra</th>
                                    <th style="background: black; color: #ccc;">Fecha de Aprobacion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo date('d/m/Y H:i:s'); ?></td>
                                    <td>En espera.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="datosRecibo">
                    <div class="info-cliente">
                        <p><strong>Codigo PreCompra: </strong><?php echo $idpreVenta ?></p>
                        <p><strong>Cliente: </strong><?php echo $nombreCliente ?></p>
                        <p><strong>E-mail: </strong><?php echo $emailCliente ?></p>
                        <p><strong>Teléfono: </strong><?php echo $telefonoCliente ?></p>
                        <p><strong>DNI: </strong><?php echo $DNICliente ?></p>
                        <p><strong>Dirección: </strong><?php echo $direccionCliente ?></p>
                        <p><strong>Terminos y Condiciones: </strong> Usted acepto los terminos y condiciones</p>
                    </div>
                </div>

                <!-- //resumen de productos insertados por el cliente -->
                <table class="table-bordered table-striped detalle-productos" id="tablaVariable" >
                    <thead>
                        <tr>
                            <th style="background: black; color: #ccc;">Producto</th>
                            <th style="background: black; color: #ccc;">Precio Unitario</th>
                            <th style="background: black; color: #ccc;">Cantidad</th>
                            <th style="background: black; color: #ccc;">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                
                <div class="total ">
                    Total: S./ <?php echo $totalCompra ?>
                </div>
                <div class="instrucciones" id="productosInsertados">
                    <p>Gracias por su compra. Guarde este recibo para la entrega de su producto.</p>
                </div>
            </div>

        </div>
        <div class="col-4">
            <h2 style="text-decoration: underline;">Indicaciones</h2>
            <ul>
                <li>Por favor, conserve este recibo para futuras referencias.</li>
                <li>Recoge tu pedido en la tienda en 1 día.</li>
                <li>Al obtener su recibo, confirma que ha leído y aceptado nuestras condiciones de compra.</li>
                <li>El tiempo de vigencia de este recibo es de 3 meses, pasado el tiempo, la empresa ya no se hace responsable</li>
                <li>Registramos todos los datos y acciones de compra para prevenir fraudes. Cualquier intento sospechoso será investigado y tomaremos medidas legales si es necesario.</li>
            </ul>
        </div>
    </div>
</div>
<style>
    body {
        font-family: Arial, sans-serif;
    }

    .fondo{
        background-image: radial-gradient(circle at 50% 50%, #fef5f7 0, #f4eff0 25%, #e9e9e9 50%, #dfe3e2 75%, #d5dddb 100%);
    }

    .recibo {
        width: 600px;
        margin: 0 auto;
        border: 1px solid #ccc;
        padding: 10px;
    }


    .logo {
        max-width: 20%;
        height: auto;
    }

    .info-cliente {
        margin-top: 10px;
    }

    .detalle-productos {
        margin-top: 20px;
        border-collapse: collapse;
        width: 100%;
    }

    .detalle-productos th,
    .detalle-productos td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }

    .detalle-productos th {
        background-color: #f2f2f2;
    }

    .total {
        margin: 10px 5px 0 0;
        text-align: right;
        font-weight: bold;
    }

    .instrucciones {
        margin-top: 20px;
    }
</style>
</body>

