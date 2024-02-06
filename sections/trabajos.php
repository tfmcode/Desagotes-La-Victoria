<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Desagotes La Victoria</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
 -->
    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

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
        .img_trabajos {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 10px;
            border-radius: 8px;
        }

        .img_trabajos img {
            width: 20%;
            height: auto;
            border-radius: 6px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .img_trabajos img:hover {
            transform: scale(1.1);
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
            <img src="../assets/img/btn_whatsapp.png" alt="">
        </a>
    </div>


    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center" style="background: none;">
        <div class="container d-flex justify-content-between align-items-center"
            style="background: white; border-radius: 20px;">
            <i class="bi bi-list mobile-nav-toggle" style="color: black;"></i>

            <div class="logo">
                <!-- <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1> -->
                <a href="../home.php"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="../home.php" style="color: black;">Inicio</a></li>
                    <li><a href="servicios.php" style="color: black;">Servicios</a></li>
                    <li><a href="nosotros.php" style="color: black;">Nosotros</a></li>
                    <li><a href="trabajos.php" style="color: black;">Trabajos</a></li>
                    <li><a href="blog.php" style="color: black;">Blogs</a></li>
                    <li><a href="contacto.php" style="color: black;">Contacto</a></li>
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
    <main id="main">
        <section>

            <div class="container">

                

                <div style="display: flex; flex-direction: column; align-items: center; padding-bottom: 20px;">
                    <p class="text-primary" style="letter-spacing: 0.3em;">Nuestros trabajos</p>
                    <h1>Excelencia operativa</h1>
                </div>
                <div class="img_trabajos">
                    <img src="../assets/img/trabajo3.jpg" alt="" style="    width: 300px;
            height: 340px;">
                    <img src="../assets/img/trabajo1.jpg" alt="" style="    width: 300px;
            height: 340px;">
                    <img src="../assets/img/trabajo2.jpg" alt="" style="    width: 300px;
            height: 340px;">
                </div>
            </div>
        </section>
        <section style="    padding-top: 30px;
    padding-bottom: 30px;">
            <div class="container">

                <h2 style="text-align: center; font-weight: bold; margin-bottom: 20px;">Transportación y
                    disposición residuos especiales / no especiales</h2>
                <p style="list-style-type: none; padding: 0; text-align: left; margin-left: 30px;">Empresa habilitada
                    por la
                    S.R.N y D.S., y la Secretaría de Política Ambiental de la Provincia de Bs.As.</p>
                <p style="list-style-type: none; padding: 0; text-align: left; margin-left: 30px;"> Equipos y personal
                    especializados.</p>
                <ul style="list-style-type: none; padding: 0; text-align: left; margin-left: 30px;">
                    <li style="display: block; font-size: 24px; margin-top: 10px;">✔️ Retiro de aceites usados y afines.
                    </li>
                    <li style="display: block; font-size: 24px;">✔️ Retiro de residuos industriales líquidos,
                        semisólidos y
                        sólidos.</li>
                    <li style="display: block; font-size: 24px;">✔️ Retiro de barros, limpieza e hidrolavado de cámaras
                        y
                        rejillas industriales.</li>
                    <li style="display: block; font-size: 24px;">✔️ Retiro, transporte y disposición final de barros en
                        lavaderos y estaciones de servicio.</li>
                    <li style="display: block; font-size: 24px;">✔️ Retiro de barros en plantas de efluentes.</li>
                    <li style="display: block; font-size: 24px;">✔️ Limpieza de fondos de tanques con hidrolavado.</li>
                    <li style="display: block; font-size: 24px;">✔️ Limpieza en trampas de grasas y aceites.</li>
                    <li style="display: block; font-size: 24px;">✔️ Limpieza en decantadores y graseras de cocina.</li>
                    <li style="display: block; font-size: 24px;">✔️ Limpieza de tanques y calderas con fueloil.</li>
                </ul>
            </div>
        </section>
        <section style="    padding-top: 30px;
    padding-bottom: 30px;">
            <div class="container">

                <h2 style="text-align: center; font-weight: bold;  margin-bottom: 20px;">Desobstrucción y
                    limpieza de cañerías</h2>
                <ul style="list-style-type: none; padding: 0; text-align: left; margin-left: 30px;">
                    <li style="display: block; font-size: 24px; margin-top: 10px;">✔️ Destapaciones de cañerías en
                        cocinas
                        industriales.</li>
                    <li style="display: block; font-size: 24px;">✔️ Destapación de cañerías en sectores de producción.
                    </li>
                    <li style="display: block; font-size: 24px;">✔️ Destapaciones en cañerías y desagüe de la red
                        pluvial.
                    </li>
                    <li style="display: block; font-size: 24px;">✔️ Destapación y limpieza de cañería cloacal.</li>
                    <li style="display: block; font-size: 24px;">✔️ Destapaciones en baños y vestuarios.</li>
                    <li style="display: block; font-size: 24px;">✔️ Limpieza hidrocinética de cañerías.</li>
                    <li style="display: block; font-size: 24px;">✔️ Limpieza en columnas y bajadas de techos.</li>
                    <li style="display: block; font-size: 24px;">✔️ Video inspección y diagnóstico para cañerías.
                        Informe
                        del estado de las cañerías.</li>
                </ul>
                <p style="list-style-type: none; padding: 0; text-align: left; margin-left: 30px;">Camiones atmosféricos
                    (4.000 litros hasta 18.000).</p>
                <p style="list-style-type: none; padding: 0; text-align: left; margin-left: 30px;">Camiones
                    desobstructores.
                </p>
                <p style="list-style-type: none; padding: 0; text-align: left; margin-left: 30px;">Maquinaria para
                    desobstrucción industrial.</p>
            </div>
        </section>
        <section style="text-align: center;" data-aos="fade-up" date-aos-delay="200">
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
                            <img src="../assets/img/logo-grande.png" class="img-fluid" style="    height: 200px;
width: 270px;">
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
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>