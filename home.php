<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Desagotes La Victoria</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
 -->
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>

    <script src='https://www.google.com/recaptcha/api.js?render=6LdHrLEUAAAAAM4CqjNR_lDOOV1Tv16uXk57Ng4o'></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LdHrLEUAAAAAM4CqjNR_lDOOV1Tv16uXk57Ng4o', { action: 'formulario' })
                .then(function (token) {
                    var recaptchaResponse = document.getElementById('recaptchaResponse');
                    recaptchaResponse.value = token;
                });
        });
    </script>

    <meta name="google-site-verification"
        content="google-site-verification=_hKqKGTBLcEraPvwFu8tUNzUJNI9BkeupGXAuiU8QDo" />
        <style>
            @media only screen and (max-width: 768px) {
            .container {
                max-width: 90%; /* Ajusta el ancho máximo para pantallas pequeñas */
            }
        }
        .title3 {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-bottom: 20px;
            text-align: center;
        }

        .text-primary {
            color: #3498db;
            letter-spacing: 0.3em;
        }

        h1 {
            display: flex;
            justify-content: center;
            margin: 0;
        }
        </style>

</head>


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Realizamos la petición de control: 
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LdHrLEUAAAAAF5X3_3TIrJm1Wyh93BllZtXdQGa';
    $recaptcha_response = $_POST['recaptcha_response'];
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Miramos si se considera humano o robot: 
    if ($recaptcha->score >= 0.5) {
        // Si la verificación de reCAPTCHA es exitosa, procesa el formulario y envía el correo electrónico
        $_email = $_POST['email'];
        $from = "info@desagoteslavictoria.com.ar";
        $to = "info@desagoteslavictoria.com.ar";
        $subject = "Desagotes La Victoria ==> Consulta desde el Formulario de Contacto";

        $message = '<br>================================================<br><b>CONSULTA</b><br>================================================<br><b>Email: </b>' . $_email . '<br><br>================================================<br>Enviado OK!<br><br><br><br>';

        $headers = "MIME-Version: 1.0" . "\r\nContent-type:text/html;charset=UTF-8" . "\r\nFrom: $from\r\nReply-to: $_email\r\nBcc: cjgorgoretti@gmail.com";

        if (mail($to, $subject, $message, $headers)) {
            echo '<script type="text/javascript">
            alert("Será contactado a la brevedad. Gracias!");
             window.location.href="index.php";
           </script>';
        }
    } else {
        // Si la verificación de reCAPTCHA falla, puedes manejarlo aquí (puedes agregar un mensaje de error, por ejemplo).
        echo '<script type="text/javascript">
            alert("Error: No se ha superado la verificación de reCAPTCHA. Por favor, inténtelo de nuevo.");
            </script>';
    }
}

?>


<body>

    <div class="btn-whatsapp">
        <a href="https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores."
            target="_blank">
            <img src="assets/img/btn_whatsapp.png" alt="">
        </a>
    </div>


    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center" style="background: none;">
        <div class="container d-flex justify-content-between align-items-center"
            style="background: white; border-radius: 20px;">
            <i class="bi bi-list mobile-nav-toggle" style="color: black;"></i>

            <div class="logo">
                <!-- <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1> -->
                <a href="home.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="home.php" style="color: black;">Inicio</a></li>
                    <li><a href="./sections/servicios.php" style="color: black;">Servicios</a></li>
                    <li><a href="./sections/nosotros.php" style="color: black;">Nosotros</a></li>
                    <li><a href="./sections/trabajos.php" style="color: black;">Trabajos</a></li>
                    <li><a href="./sections/blog.php" style="color: black;">Blogs</a></li>
                    <li><a href="./sections/contacto.php" style="color: black;">Contacto</a></li>
                </ul>
            </nav><!-- .navbar -->
            <div class="icons-navbar" style="height: 25px; width: 70px;">
                <a href="https://www.facebook.com/DesagotesLaVictoria" class="facebook"><i class="bx bxl-facebook"
                        style="color: black; font-size: 18px; padding-right: 2px;"></i></a>
                <a href="https://www.instagram.com/destapacioneslavictoria/" class="instagram"><i
                        class="bx bxl-instagram" style="color: black; font-size: 18px;  padding-right: 4px;"></i></a>
            </div>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Tenemos un Objetivo</h2>
                    <p class="animate__animated animate__fadeInUp">
                    <h3 style='color:white;'>Mantener sus Instalaciones en condiciones saludables</h3>
                    </p>
                    <a href="https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores."
                        target="_blank" class="btn-get-started animate__animated animate__fadeInUp"
                        style="background-color: black; border: black;   border-radius: 20px;">Conozca Nuestro
                        Proceso</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">La Clave de un Negocio Productivo</h2>
                    <p class="animate__animated animate__fadeInUp">
                    <h3 style='color:white'>Mantenimiento Preventivo</h3>
                    </p>
                    <a href="https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores."
                        target="_blank" class="btn-get-started animate__animated animate__fadeInUp"
                        style="background-color: black; border: black;   border-radius: 20px;">Conozca Nuestro
                        Proceso</a>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">


        <!-- ======= Services Section ======= -->
        <section class="services" style=" padding-top: 0px;   padding-bottom: 0px;">
            <div class="container">
                <div class="title3" style="display: flex; flex-direction: column; align-items: center; padding-bottom: 20px;">
                    <p class="text-primary" style="letter-spacing: 0.3em;">LA CLAVE DE UN NEGOCIO PRODUCTIVO: </p>
                    <h1 style="display: flex; justify-content: center;">MANTENIMIENTO PREVENTIVO</h1>
                    <p style="letter-spacing: 0.3em;">EL SERVICIO PARA UN NEGOCIO EXITOSO: </p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box icon-box-pink">
                            <div class="icon"><img src="assets/img/3.png" width="70"></div>
                            <h4 class="title"><a href="">Asesoramiento Profesional</a></h4>
                            <p class="description">Al contactarse, nuestro equipo de profesionales, especializados se
                                encarga de detectar las necesidas en su negocio y ofrecer un servicio a medida de sus
                                mecesidades.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box icon-box-cyan">
                            <div class="icon"><img src="assets/img/4.png" width="70"></div>
                            <h4 class="title"><a href="">Recolección + Disposición</a></h4>
                            <p class="description">Según el servicio requerido, nuestro equipo de profesionales se
                                encarga de retirar y transportar los residuos líquidos, realizando el recorrido hacia la
                                planta de tratamiento correspondiente.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-green">
                            <div class="icon"><img src="assets/img/5.png" width="70"></div>
                            <h4 class="title"><a href="">Certificación Legal</a></h4>
                            <p class="description">Extendemos los manifiestos de transporte y certificado de disposición
                                final de los residuos y sólidos retirados. Su empresa contará con una garantía de la
                                realización del servicio.</p>
                        </div>
                    </div>

                </div>
                <div style="display: flex; justify-content: center;">

                    <a href="https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores."
                        target="_blank" class="btn-get-started content_title animate__animated animate__fadeInUp"
                        style="    background-color: black; color: white;   border-radius: 20px;   display: flex;   width: 160px;   height: 30px;   margin-bottom: 20px;   align-items: center;   justify-content: center;">Cotice
                        su servicio</a>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Why Us Section ======= -->
        <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 video-box">
                <img src="assets/img/mr-Destapador.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center p-5">
    <div class="icon-box">
        <!-- <div class="icon"><i class="bx bx-fingerprint"></i></div> -->
        <h4 class="title"><a href="">HOLA! Soy Mr. Destapador</a></h4>
        <p class="description">Mi misión es acompañar a su empresa en el proceso de mantenimiento
            preventivo de sus instalaciones. En este camino, contará con todo lo necesario para su
            tranquilidad: Equipos de última generación, personal altamente capacitado y la
            experiencia propia de contar con un equipo con más de <strong>65 años de experiencia en el mercado.</strong>
        </p>
    </div>

    <div class="icon-box">
        <!-- <div class="icon"><i class="bx bx-gift"></i></div>
        <h4 class="title"><a href="">Nemo Enim</a></h4> -->
        <p class="description"><img src="assets/img/firma.png"></p>
    </div>
</div>
        </div>

    </div>
</section><!-- End Why Us Section -->



        <!-- ======= Why Us Section ======= -->
        <!-- <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200" id="proceso"
            style=" padding-top: 0px; ">
            <div class="container">

                <div class="section-title">
                    <h2><br><br><strong>Nuestro Proceso</strong><br>Modernas Tecnologías</h2>
                </div>


                <div class="row">
                    <div class="col-lg-6 video-box">
                        <img src="assets/img/proceso.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                        <div class="icon-box">
                            <div class="icon"><span class="iconify" data-icon="icon-park-outline:one-key"
                                    data-width="128"></span></div>
                            <h4 class="title"><a href="">Recepción de Pedido</a></h4>
                            <p class="description">Recibimos mediante nuestras vías de comunicación las diferentes
                                solicitudes de nuestros clientes</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><span class="iconify" data-icon="icon-park-outline:two-key"
                                    data-width="128"></span></div>
                            <h4 class="title"><a href="">Asesoría de Cliente</a></h4>
                            <p class="description">Asesoramos en base a la solicitud del cliente e indicamos el servicio
                                que mejor se adapta a sus necesidades</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><span class="iconify" data-icon="icon-park-outline:three-key"
                                    data-width="128"></span></div>
                            <h4 class="title"><a href="">Visita Técnica y Diagnóstico</a></h4>
                            <p class="description">Realizamos la visita técnica y diagnosticamos gratuitamente en el
                                lugar de trabajo</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><span class="iconify" data-icon="icon-park-outline:four-key"
                                    data-width="128"></span></div>
                            <h4 class="title"><a href="">Cotización</a></h4>
                            <p class="description">Cotizamos en base a la información recabada y el tipo de trabajo a
                                realizar</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><span class="iconify" data-icon="icon-park-outline:five-key"
                                    data-width="128"></span></div>
                            <h4 class="title"><a href="">Presupuesto</a></h4>
                            <p class="description">Una vez enviado el presupuesto aguardamos confirmación por parte del
                                cliente</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><span class="iconify" data-icon="icon-park-outline:six-key"
                                    data-width="128"></span></div>
                            <h4 class="title"><a href="">Pago</a></h4>
                            <p class="description">Ponemos a disposición los distintos métodos de pago para hacer una
                                transacción segura</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><span class="iconify" data-icon="icon-park-outline:seven-key"
                                    data-width="128"></span></div>
                            <h4 class="title"><a href="">Servicio</a></h4>
                            <p class="description">En plazos y condiciones establecidas en las etapas anteriores,
                                procedemos con el servicio</p>
                        </div>


                    </div>
                </div>


            </div>

        </section> --><!-- End Why Us Section -->
        <section id="heros" style="text-align: center;" data-aos="fade-up" date-aos-delay="200">
            <div class="container">
                <h1>Cuidando el ambiente desde 1950</h1>
                <button type="button" class="btn btn-primary" data-bs-toggle="button" onclick="window.location.href='https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores.'">
                Dudas? Click aquí
                </button>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

        <div class="footer-top">
            <div class="container">
                <div class="row" style="display: flex;  justify-content: space-evenly;   align-items: center;">
                    <div class="col-lg-4 col-md-4 footer-contact">
                        <h4>Consúltenos</h4>
                        <p>
                            Aguilar 2878 <br>
                            Ciudad de Buenos Aires<br>
                            Argentina<br><br>
                            <strong>Teléfono:</strong> +54 11-4551-5191<br>
                            <strong>Email:</strong> info@desagoteslavictoria.com.ar<br>
                        </p>

                    </div>

                    <div class="col-lg-4 col-md-4 footer-contact">
                        <p style="display: flex; justify-content: center;">
                            <img src="assets/img/logo-grande.png" class="img-fluid" style="    height: 200px; width: 270px;">
                        </p>
                    </div>

                </div>
                <div class="footer-newsletter">
                    <div class="container">
                        <div class="row" style="display: flex;
                justify-content: space-around;
                align-items: flex-start;">
                            <div class="col-lg-6">
                                <form action="procesar-formulario.php" method="post">
                                    <input id="correo" type="email" name="email" placeholder="Correo electrónico"><input
                                        type="submit" value="Enviar">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="    display: flex;
justify-content: center;">
                    <a href="https://www.facebook.com/DesagotesLaVictoria" class="facebook"><i class="bx bxl-facebook"
                            style="color: white; font-size: 25px; padding-right: 5px;"></i></a>
                    <a href="https://www.instagram.com/destapacioneslavictoria/" class="instagram"><i
                            class="bx bxl-instagram"
                            style="color: white; font-size: 25px; padding-right: 10px;"></i></a>
                    <a href="https://www.linkedin.com/company/desagotes-la-victoria/" class="linkedin"><i
                            class="bx bxl-linkedin" style="color: white; font-size: 25px;"></i></a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; <strong><span>Servicios La Victoria</span></strong></div>
            <div class="credits">
                TFM Code <a href="">Adway Solutions</a>
            </div>
        </div>
    </footer><!-- End Footer -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>