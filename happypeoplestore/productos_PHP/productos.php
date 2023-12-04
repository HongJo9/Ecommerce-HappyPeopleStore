<?php
    // Incluir el archivo de conexión a la base de datos
    include_once "DBecommerce.php";
    // Conectar a la base de datos
    $con = mysqli_connect($host, $user, $pass, $db);
    if(isset($_REQUEST['idBorrar'])){
        $id= mysqli_real_escape_string($con,$_REQUEST['idBorrar']??'');
        $query="DELETE from productos where id='".$id."';";
        $res=mysqli_query($con,$query);
        if($res){
          ?>
          <div class="alert alert-warning float-right" role="alert">
            Producto eliminado        
          </div>
          <?php
        }else{
          ?>
          <div class="alert alert-danger float-right" role="alert">
            Error al borrar <?php echo mysqli_error($con);?>
          </div>
          <?php 
        } 
      }
  ?>
  <!-- Contenedor de contenido. Contiene contenido de la página -->
  <div class="content-wrapper" style="background-image: radial-gradient(circle at 11.95% 36.15%, #ffffff 0, #fffafb 25%, #f2f2f2 50%, #e4eae8 75%, #d8e2df 100%);">
      <!-- Encabezado de contenido (encabezado de página) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>PRODUCTOS</h1>
                  </div>
              </div>
          </div><!-- /.contenedor fluido -->
      </section>

      <!-- Contenido principal -->
      <section class="content">
          <div class="row">
              <div class="col-12">
                  <div class="card" style="backdrop-filter: blur(30px);
            border-radius: 30px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.8);
            overflow: hidden;
            width: 100%;
            padding: 20px;">
                      <!-- /.card-header -->
                      <div class="card-body">
                      <a href="panel.php?modulo=agregarProductos" class="btn btn-primary" style="margin: 0 0 10px;">Agregar Productos</a>
                          <table id="example2" class="table table-bordered table-hover">
                              <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Categoria</th>
                                    <th>Precio</th>
                                    <th>Stock</th>
                                    <th>Imagen</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <?php
                                    // Consulta SQL para obtener todos los productos
                                    $query = "SELECT id,nombre,Categoria,precio,stock,imgProducto from productos;  ";
                                    // Ejecutar la consulta
                                    $res = mysqli_query($con, $query);

                                    while ($row = mysqli_fetch_assoc($res)) {
                                    ?>
                                      <tr>
                                          <td><?php echo $row['nombre'] ?></td>
                                          <td><?php echo $row['Categoria'] ?></td>
                                          <td>S/<?php echo number_format($row['precio'], 2, '.', ',') ?></td>
                                          <td><?php echo $row['stock'] ?></td>
                                          <td><img src="<?php echo $row['imgProducto']; ?>" height="80"></td>
                                          <td > 
                                            <a href="panel.php?modulo=editarProductos&id=<?php echo $row['id'] ?>" style="margin-right: 5px;"> <i class="icono fas fa-edit"></i> </a> <!-- Editar usuario -->
                                        </td>
                                        <td><a href="panel.php?modulo=productos&idBorrar=<?php echo $row['id'] ?>" class="text-danger borrar"> <i class="icono fas fa-trash"></i> </a> <!-- Borrar usuario --></td>
                                      </tr>
                                  <?php
                                    }
                                    ?>
                              </tbody>
                          </table>
                      </div>
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card -->

              </div>
              <!-- /.col -->
          </div>
          <!-- /.row -->
      </section>
      <!-- /.content -->
  </div>

  <style>
    .icono {
      font-size: 20px;
      display: flex;
      align-items: center;
      justify-content: center; /* Tamaño del icono */
    }
  </style>