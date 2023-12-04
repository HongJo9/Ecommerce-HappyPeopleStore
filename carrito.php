<div class="carro row">
    <table class="table table-striped table-inverse" id="tablaCarrito" >
        <thead class="thead-inverse">
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Total por Producto</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <div class="col-md-6"> <!-- La mitad del ancho en pantallas medianas y más grandes -->
        <a class="btn btn-warning mr-2" href="index.php?modulo=productos" role="button">Ir a productos</a>
    </div>

    <div class="col-md-6 text-right"> <!-- La otra mitad del ancho en pantallas medianas y más grandes, y alinea a la derecha -->
        <a class="btn btn-primary" href="index.php?modulo=pago" id="irapagar" role="button">Ir a pagar</a>
    </div>

    <div class="vacio"></div>
</div>

<style>
    .carro{
        padding: 0 10px 0 10px;
        background-image: radial-gradient(circle at 49.04% 55.42%, #ffffff 0, #fffbfc 25%, #f5f5f5 50%, #eaefee 75%, #e0e9e6 100%);
    }
    .vacio{
        padding: 0 0 50px 0;
    }
</style>