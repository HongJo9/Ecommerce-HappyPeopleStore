<?php
    $id=mysqli_real_escape_string($con,$_REQUEST['id']??'');
    $queryProducto="SELECT id,nombre,precio,stock,imgProducto,descripcion_producto FROM productos where id='$id';";
    $resProducto=mysqli_query($con,$queryProducto);
    $rowProducto=mysqli_fetch_assoc($resProducto);
?>
    <style>
        .card {
            background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }
    </style>
<div class="card card-solid">
    <div class="row mt-5 pl-5 pr-5">
        <div class="col-lg-6">
            <img src="happypeoplestore/<?php echo $rowProducto['imgProducto']; ?>" class="img-fluid mb-5" alt="Imagen del producto">
        </div>
        <div class="col-lg-6">
            <h2 class="text-primary"><?php echo $rowProducto['nombre']; ?></h2>
            <hr>
            <p class="text-muted"><?php echo $rowProducto['descripcion_producto']; ?></p>
            <hr>

                <div class="mb-3">
                    <h5 class="text-success">Precio</h5>
                    <p class="font-weight">S/ <?php echo $rowProducto['precio']; ?> Nuevos Soles</p>
                </div>
                <div class="mb-3">
                    <h5 class="text-info">Stock</h5>
                    <p class="font-weight">Disponible: <?php echo $rowProducto['stock']; ?></p>
                </div>

                <div class="form-group mb-3">
                    <label for="cantidadProducto" class="font-weight-bold">Cantidad</label>
                    <input type="number" class="form-control" id="cantidadProducto" value="1">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary btn-lg btn-block" id="agregarCarrito"
                            data-id="<?php echo $_REQUEST['id']; ?>"
                            data-nombre="<?php echo $rowProducto['nombre']; ?>"
                            data-img="<?php echo $rowProducto['imgProducto']; ?>"
                            data-precio="<?php echo $rowProducto['precio']; ?>">
                        <i class="fas fa-cart-plus fa-lg mr-2"></i>
                        Agregar al Carrito
                    </button>
                </div>

                <div class="mt-4 ">
                    <h5 class="mb-3">Compartir en redes sociales</h5>
                    <a href="#" class="text-primary mr-3">
                        <i class="fab fa-facebook-square fa-2x"></i>
                    </a>
                    <a href="#" class="text-info mr-3">
                        <i class="fab fa-twitter-square fa-2x"></i>
                    </a>
                    <a href="#" class="text-danger mr-3">
                        <i class="fas fa-envelope-square fa-2x"></i>
                    </a>
                    <a href="#" class="text-dark">
                        <i class="fas fa-rss-square fa-2x"></i>
                    </a>
                </div>
                <a class="btn btn-warning mt-3 mb-5" href="index.php?modulo=productos" role="button">Ir a productos</a>
            </div>
        </div>
        <?php
    include_once "productosPerso.php";
?>
    <!-- /.card-body -->
</div>


<!-- /.card -->