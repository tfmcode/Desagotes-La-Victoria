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
        <a href="https://wa.me/1122589806?text=Hola%2C%20quiero%20más%20información" target="_blank">
            <img src="assets/img/btn_whatsapp.png" alt="">
        </a>
    </div>


    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <!-- <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1> -->
                <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="active " href="index.php">Inicio</a></li>
                    <li><a class="active " href="home.php">Home</a></li>
                    <li><a href="./sections/nosotros.php">Nosotros</a></li>
                    <li><a href="./sections/servicios.php">Servicios</a></li>
                    <li><a href="/sections/trabajos.php">Trabajos</a></li>
                    <li><a href="./sections/contacto.php">Contacto</a></li>
                    <li><a href="./sections/blog.php">Blogs</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

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
                    <a href="#proceso" class="btn-get-started animate__animated animate__fadeInUp">Conozca Nuestro
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
                    <a href="#proceso" class="btn-get-started animate__animated animate__fadeInUp">Conozca Nuestro
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
        <section class="services">
            <div class="container">

                <div>
                    <h3>LA CLAVE DE UN NEGOCIO PRODUCTIVO: </h3>
                    <h1>MANTENIMIENTO PREVENTIVO</h1>
                    <img src="" alt="">
                    <h4>EL SERVICIO PARA UN NEGOCIO EXITOSO</h4>
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

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Why Us Section ======= -->
        <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 video-box">
                        <img src="assets/img/mr-Destapador.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                        <div class="icon-box">
                            <!-- <div class="icon"><i class="bx bx-fingerprint"></i></div> -->
                            <h4 class="title"><a href="">HOLA! Soy Mr. Destapador</a></h4>
                            <p class="description">Mi misión es acompañar a su empresa en el proceso de mantenimiento
                                preventivo de sus instalaciones. En este camino, contará con todo lo necesario para su
                                tranquilidad: Equipos de última generación, personal altamente capacitado y la
                                experiencia propia de contar con un equipo con más de <strong>65 años de experiencia en
                                    el mercado.</strong></p>
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
        <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200" id="proceso">
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

        </section><!-- End Why Us Section -->
        <section style="text-align: center;">
        <h1 style="font-weight: bold;">Cuidando el ambiente desde 1950</h1>
        <div>
            <p class="d-inline-flex gap-1">
                <a href="https://wa.me/1122589806?text=Hola%2C%20quiero%20más%20información" target="_blank" class="btn active btn-outline-primary" style="border-radius: 10px;">
                    Dudas? Click aquí
                </a>
            </p>
        </div>
    </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

        <div class="footer-top">
            <div class="container">
                <div class="row">



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
                        <p>
                            <img src="assets/img/logo-grande.png" class="img-fluid">
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
                                    <input id="correo" type="email" name="email" placeholder="Correo electrónico"><input type="submit" value="Enviar">
                                </form>
                            </div>
                        </div>
                    </div>
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