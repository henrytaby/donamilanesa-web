<?php
include "inc/producto.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página web Doña Milanesa</title>
    <link rel="shortcut icon" href="img/Imagenmila.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css?id=323ss233">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.form.min.js"></script>

    <!-- jQuery Modal -->
    <script src="js/jquery.modal/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="js/jquery.modal/jquery.modal.min.css" />

</head>

<body id="Inicio">
<header>
    <nav class="topnav">
        <a href="#inicio" class="active">Inicio</a>
        <a href="#nosotros">Nosotros</a>
        <a href="#galeria">Productos</a>
        <a href="#servicios">Nuestros Servicios</a>
        <a href="#contacto">Contactonos</a>
    </nav>
    <section class="textos-header" id="inicio">
        <h1>Y tu,¿Ya probaste las nuestras?</h1>
        <h2>Las mejores de la ciudad</h2>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                                                                    style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                  style="stroke: none; fill: #fff;"></path>
        </svg></div>
</header>
<main>
    <section id="nosotros" class="contenedor sobre-nosotros">
        <h2 class="titulo">Nosotros</h2>
        <div class="contenedor-sobre-nosotros">
            <img src="img/imagen1.png" alt="" class="imagen-about-us">
            <div class="contenido-textos">
                <h3><span>1</span>Nuestra historia</h3>
                <p>Somos una empresa basada en las tradiciones culinarias familiares,
                    la cual Las Milanesas tienen un lugar privilegiado, por eso hace ya unos
                    años desde el 2014 dadas las vueltas de la vida nos pusimos a comercializar
                    uno de nuestros platos preferidos pero en un formato práctico y fácil de hacer a la
                    hora de comer. Nuestras milanesas de Pollo y Carne.</p>
                <h3><span>2</span>Nuestra misión</h3>
                <p>Somos una empresa especialista en la elaboracion de comida rapida dedicados al gusto de los clientes,
                    que antepone la alimentacion a cualquier otro interés.</p>
                <h3><span>3</span>Nuestra visión </h3>
                <p>Ser líderes del mercado nacional y en la preferencia del corazón de cada boliviano, con una
                    excelente y responsable gestión comercial y administrativa.</p>
            </div>
        </div>
    </section>
    <section id="galeria" class="portafolio">
        <div class="contenedor">
            <h2 class="titulo">Productos</h2>
            <div class="galeria-port">
                <?PHP
                foreach ($producto as $key => $row){
                    ?>
                    <div class="imagen-port">
                        <img src="img/producto/<?=$key?>.png" alt="">
                        <div class="hover-galeria">
                            <p> <?=$row["titulo"]?>  <br>
                                <?=$row["texto"]?> <br>
                                <br>
                                <a href="detalle.php?id=<?=$key?>" rel="modal:open"> Detalle</a>
                            </p>
                        </div>
                    </div>
                <?
                }
                ?>
            </div>
        </div>
    </section>
    <section id="contacto">
        <div class="contenedor">

            <h1 class="titulo">Contactanos</h1>

            <div class="contact-wrapper animated bounceInUp">
                <div class="contact-form">
                    <h3></h3>
                    <form method="POST"
                          action="contacto.php"
                    id="general_form">

                        <p>
                            <label>Nombre completo</label>
                            <input type="text" name="fullname">
                        </p>
                        <p>
                            <label>Dirección de correo electrónico</label>
                            <input type="email" name="email">
                        </p>
                        <p>
                            <label>Número de teléfono</label>
                            <input type="tel" name="phone">
                        </p>
                        <p>
                            <label>Asunto</label>
                            <input type="text" name="affair">
                        </p>
                        <p class="block">
                            <label>Mensaje</label>
                            <textarea name="message" rows="3"></textarea>
                        </p>
                        <p class="dddd">
                            <button type="reset" class="btn btn-primary mr-2" id="general_submit">
                                <i class="la la-save"></i>
                                Enviar</button>
                        </p>
                    </form>


                </div>
            </div>
    </section>

    <section class="clientes contenedor">
        <h2 class="titulo">Que dicen nuestros clientes</h2>
        <div class="cards">
            <div class="card">
                <img src="img/user.png" alt="">
                <div class="contenido-texto-card">
                    <h4>Gloria FloWers </h4>
                    <p>buena atención y solucionaron un error inmediatamente.  Me sentí muy satisfecha con la velocidad con la que respondieron a mi pedido.</p>
                </div>
            </div>
            <div class="card">
                <img src="img/user.png" alt="">
                <div class="contenido-texto-card">
                    <h4>Markéx VC</h4>
                    <p>Excelente atención, y deliciosas!!!!</p>
                </div>
            </div>
        </div>
    </section>
    <section id="servicios" class="about-services">
        <div class="contenedor">
            <h2 class="titulo">Nuestros servicios</h2>
            <div class="servicio-cont">
                <div class="servicio-ind">
                    <img src="img/serviR.png" alt="">
                    <h3>Consumo en el lugar</h3>
                    <p> <center>Tenemos nuestras sucursales en las cuales podras pasar a disfrutar de nuestra instancia.</center> </p>
                </div>
                <div class="servicio-ind">
                    <img src="img/Leevar.png" alt="">
                    <h3>Para llevar</h3>
                    <p> <center> Podras realizar el pedido en el lugar, llevandote el producto.</center></p>
                </div>
                <div class="servicio-ind">
                    <img src="img/Domi.png" alt="">
                    <h3>Entrega a domicilio</h3>
                    <p> <center> Realizamos entregas a domicilio.</center></p>
                </div>
            </div>
        </div>
    </section>
    <section class="about-map">
        <div class="contenedor2">
            <h2 class="titulo">Nuestra Ubicacion</h2>
            <div class="servicio-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61203.220033000325!2d-68.1572373993883!3d-16.515934442255553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f206175318d89%3A0x632dbaa19ddd3f8a!2sLas%20Torres%20Mall!5e0!3m2!1ses!2sbo!4v1651192646844!5m2!1ses!2sbo"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

</main>
<footer>
    <div class="contenedor-footer">
        <div class="content-foo">
            <h4>Telefono</h4>
            <p>+591 76774137</p>
        </div>
        <div class="content-foo">
            <h4>Email</h4>
            <p>Doñamilanesa@.com</p>
        </div>
        <div class="content-foo">
            <h4>Localizacion</h4>
            <p>La paz | Bolivia</p>
        </div>
    </div>
    <h2 class="titulo-final">&copy; Doña Milanesa | Milanesa</h2>
</footer>
</body>
<script src="js/web.js"></script>
</html>