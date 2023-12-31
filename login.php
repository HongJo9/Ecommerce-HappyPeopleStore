<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My ecommerce</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="happypeoplestore/dist/img/icono.jpg" sizes="16x16">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="happypeoplestore/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="happypeoplestore/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="happypeoplestore/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <style>
        body {
          background-image: url('happypeoplestore/dist/img/logincliente.jpg');
          background-size: cover;
          background-attachment: fixed;
          background-repeat: no-repeat;
          font-family: 'Source Sans Pro', sans-serif;
          margin: 0;
          display: flex;
          align-items: center;
          justify-content: center;
          height: 100vh;
        }

        .login-box {
            backdrop-filter: blur(30px);
            border: 2px solid #7a623b;
            border-radius: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
            overflow: hidden;
            max-width: 400px;
            width: 100%;
            padding: 20px;
            
        }

        .login-logo {
            font-size: 30px;
            text-align: center;
            margin-bottom: 20px;
        }

        .login-logo h2{
            color: white;
        }

        .login-card-body {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .boton {
            background-color: #7a623b;
            border-color: #7a623b;
        }

        .boton:hover {
            background-color: #634f32;
            border-color: #634f32;
        }

        .text-success {
            color: #28a745;
        }

        .text-success:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <div class="login-logo">
            <h2>
                <strong>Bienvenido</strong>
            </h2>
            
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Iniciar Sesión</p>
                <?php
                if (isset($_REQUEST['login'])) {
                    session_start();
                    $email = $_REQUEST['email'] ?? '';
                    $pasword = $_REQUEST['pass'] ?? '';
                    $pasword = md5($pasword);
                    include_once "happypeoplestore/DBecommerce.php";
                    $con = mysqli_connect($host, $user, $pass, $db);
                    $query = "SELECT id,email,nombre from clientes where email='" . $email . "' and pass='" . $pasword . "';  ";
                    $res = mysqli_query($con, $query);
                    $row = mysqli_fetch_assoc($res);
                    if ($row) {
                        $_SESSION['idCliente'] = $row['id'];
                        $_SESSION['emailCliente'] = $row['email'];
                        $_SESSION['nombreCliente'] = $row['nombre'];
                        header("location: index.php?mensaje=Usuario registrado exitosamente");
                    } else {
                ?>
                        <div class="alert alert-danger" role="alert">
                            Error de login
                        </div>
                <?php
                    }
                }
                ?>
                <form method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Correo Electrónico" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Contraseña" name="pass">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary boton" name="login">Iniciar Sesión</button>
                            <a href="registro.php" class="text-success float-right">Registrarse</a>
                        </div>
                    </div>
                </form>
                <a class="btn btn-primary mt-3" href="index.php" role="button">Regresar a la tienda</a>
            </div>
        </div>
    </div>
</body>

</html>
