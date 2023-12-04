<body>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
<!--::::Pie de Pagina::::::-->
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <h2>Siguenos en nuestras redes sociales</h2>
                <div class="red-social">
                    <a title="Facebook" href="https://www.facebook.com/happyPeopleStore" class="fa fa-facebook"></a>
                    <a title="Instagram" href="https://www.instagram.com/happypeoplestore_/" class="fa fa-instagram"></a>
                    <a title="Whatsapp" href="https://wa.me/984358846" class="fa fa-whatsapp"></a>
                </div>
            </div>

            <div class="box">
                <h2>UBICANOS</h2>
                <p>Direccion: Calle - Santo Domingo 205 - nt 108 - Galerias Los Cristales (Ref. Frente a la Polleria Pio Pio)</p>
                <p>Llamanos: 984 358 846 </p>
            </div>

            <div class="box">
                <div class="mapa">
                    <h2>Lugar de la tienda</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d478.4346551642003!2d-71.53402663207684!3d-16.400571135208946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424a56904008eb%3A0x767a131d0baec68e!2sHappy%20People%20Store!5e0!3m2!1ses-419!2spe!4v1694187554937!5m2!1ses-419!2spe" width="350" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            
            <div class="box image">
                <figure>
                    <a href="index.php">
                        <img class="logofooter" src="happypeoplestore/dist/img/logo.png" alt="Logo de SLee Dw">
                    </a>
                </figure>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2023 <b>Happy People Store</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
</body>
<style>
    html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    }
    
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .pie-pagina{
        background-color: #0C0C0C;
        color: #fff;
        padding: 20px 0;
    }

    .pie-pagina .grupo-1{
        max-width: 1200px;
        margin: auto;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .pie-pagina .grupo-1 .box{
        padding: 20px;
        border: 1px solid #333;
    }

    .pie-pagina .grupo-1 .box h2{
        font-size: 18px;
        margin-bottom: 10px;
        text-align: center;
    }

    .pie-pagina .grupo-1 .box p{
        font-size: 14px;
        line-height: 1.4;
    }

    .red-social{
            margin: 20px auto;
            text-align: center;
        }
    .pie-pagina .grupo-1 .red-social a{
        display: inline-block;
        text-decoration: none;
        width: 45px;
        height: 45px;
        line-height: 45px;
        color: #fff;
        margin-right: 10px;
        background-color: #303030;
        text-align: center;
        transition: all 300ms ease;
        border-radius: 50%;
        justify-content:center;
    }
    .pie-pagina .grupo-1 .red-social a:hover{
        color: #f8c778;
    }

    .pie-pagina .grupo-2{
        text-align: center;
        padding: 10px 0;
        background-color: #000;
    }

    .pie-pagina .grupo-2 small{
        font-size: 12px;
    }

    .mapa{
        position: relative;
    }

    .mapa h2{
        position: relative;
        text-align:center;
    }

    .mapa iframe{
        position: relative;
        width: 100%;
        height:150px;
    }

    .logofooter{
            height: 150px;
            display: block;
            margin: 0 auto;
    }

    @media screen and (max-width:800px){
        .pie-pagina .grupo-1{
            grid-template-columns: repeat(1, 1fr);
        }

        .pie-pagina .grupo-1 .box{
        padding: 20px;
        border: 1px solid #333;
        }
        .image{
            display:none;
        }
    }
</style>