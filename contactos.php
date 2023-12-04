<body>
    <header class="header">
        <!-- contenido de la cabecera -->
        <div class="header-content">
            <h1>Contactanos</h1>
            <p>No hay nada que nos guste más que arremangarnos y comenzar un nuevo proyecto emocionante. Creemos en la magia de la colaboración y en la capacidad de convertir ideas en realidades impactantes. Hagamos algo grandioso juntos, donde nuestra creatividad se fusiona con tu visión. Estamos listos para escucharte y dar vida a tu proyecto. ¡Contáctanos hoy mismo y comencemos este emocionante viaje juntos!</p>
        </div>
    </header>

    <main>
    <div class="container pt-4 fondo">
        <div class="row ">
            <div class="col-md-6 pl-4 ">
                <div class=" bg-white rounded p-4 shadow mb-3">
                    <section class="contacto">
                        <form action="#" method="POST">
                            <div class="form-group">
                                <label for="nombre" class="text-lg">Nombre:</label>
                                <input type="text" id="nombre" name="nombre" required class="form-control mb-3" placeholder="Ingrese su nombre">
                            </div>

                            <div class="form-group">
                                <label for="email" class="text-lg">Email:</label>
                                <input type="email" id="email" name="email" required class="form-control mb-3" placeholder="Ingrese su email">
                            </div>

                            <div class="form-group">
                                <label for="mensaje" class="text-lg">Mensaje:</label>
                                <textarea id="mensaje" name="mensaje" rows="4" required class="form-control mb-3" placeholder="Escriba su mensaje"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </section>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-white rounded p-4 shadow">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe title="Mapa de Happy People Store" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.4798365836914!2d-71.53632059024889!3d-16.400439138102804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424a56904008eb%3A0x767a131d0baec68e!2sHappy%20People%20Store!5e0!3m2!1ses-419!2spe!4v1694817435226!5m2!1ses-419!2spe" class="embed-responsive-item rounded"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


    <style>
        .fondo{
            background-image: radial-gradient(circle at 50% 50%, #fef5f7 0, #f4eff0 25%, #e9e9e9 50%, #dfe3e2 75%, #d5dddb 100%);
        }
        .header{
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
            url("happypeoplestore/dist/img/9.jpg");
            background-position: center bottom;
            background-repeat: no-repeat;
            background-size: 190%;
            min-height: 60vh;
            display: flex;
            align-items: center;
            animation: zoomInOut 10s infinite alternate; /* Aplicar la animación */
            background-attachment: fixed;
        }

        @keyframes zoomInOut {
            0% {
                background-size: 150%;
            }
            100% {
                background-size: 190%;
            }
        }

        .header-content{
            padding: 0 100px;
        }

        .header-content h1{
            font-size: 75px;
            line-height: 80px;
            color: #f9fafc;
            text-transform: uppercase;
            margin-bottom: 35px;
            font-weight: 600;
        }

        .header-content p {
            font-size: 20px;
            color: #c5c5c5;
            margin-bottom: 25px;
        }

        @media (max-width: 991px) {
            .header {
                background-size: auto; /* Elimina el background-size para mantener la imagen completa */
                min-height: 50vh; /* Elimina la altura mínima */
                background-attachment: fixed; /* Mantiene la imagen de fondo fija */
                animation:none;
            }

            .header-content {
                padding: 50px;
            }

            .header-content h1 {
                font-size: 28px;
                line-height: 32px;
                margin-bottom: 15px;
            }
        }
    </style>
</body>