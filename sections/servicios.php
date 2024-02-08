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
    .content_title {
      text-align: center;
      max-width: 600px;
      /* Ajusta el ancho máximo según sea necesario */
      margin: 0 auto;
      /* Centra el párrafo horizontalmente */
      font-size: 16px;
      /* Tamaño de fuente ajustado */
      line-height: 1.5;
      /* Altura de línea ajustada para una mejor legibilidad */
    }

    .title1 {
      text-align: center;
      /* Centra el texto horizontalmente */
      margin-top: 0;
      /* Elimina el margen superior predeterminado */
      padding: 20px 0;
    }

    .number {
      color: #3498db;
      /* Color de texto blanco */
      border-radius: 50%;
      /* Bordes redondeados para formar un círculo */
      width: 60px;
      /* Ancho del contenedor del número (ajusta según sea necesario) */
      height: 60px;
      /* Altura del contenedor del número (ajusta según sea necesario) */
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 30px;
      /* Tamaño de fuente del número (ajusta según sea necesario) */
      font-weight: bold;
      /* Texto en negrita */
      margin: 0;
      /* Centrar horizontalmente */
    }

    @media (max-width: 768px) {
      .cards {
        display: flex;
        flex-direction: column;
        align-items: center;
      }
    }


    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .boxcontact {
      text-align: center;
      width: 18%;
      /* Ajusta el ancho según tus necesidades */
    }

    .boxcontainer {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: px;
      border: 5px solid lightblue;
      border-radius: 10px;
      margin-right: 40px;
    }

    .navbar-list {
      display: flex;
      justify-content: center;
      padding: 0;
      margin: 0;
      list-style: none;
      align-content: space-around;
      flex-wrap: nowrap;
      flex-direction: row;
    }

    .navfooter a {
      margin: 0.5%;
      text-decoration: none;
      color: #fff;
      /* Color de texto blanco */
      padding: 10px;
      display: block;
    }

    .navfooter a:hover {
      color: lightblue;
      /* Cambio de color de texto a blanco al pasar el cursor */
    }
  </style>




</head>


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Realizamos la petición de control: 
  $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
  $recaptcha_secret = '6LdHrLEUAAAAAF5X3_3TIrJm1Wyh93BllZtXdQGa';
  $recaptcha_responseF = $_POST['recaptcha_responseF'];
  $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_responseF);
  $recaptcha = json_decode($recaptcha);
  // Miramos si se considera humano o robot: 
  if ($recaptcha->score >= 0.5) {
    $_email = $_POST['email'];
    $from = "info@desagoteslavictoria.com.ar";
    $to = "info@desagoteslavictoria.com.ar";

    $message = '<br>================================================<br><b>CONTACTO PARA MAS INFORMACION</b><br>================================================<br><br><b>Email: </b>' . $_email . '<br><br>================================================<br>Enviado OK!<br><br><br><br>';

    $headers = "MIME-Version: 1.0" . "\r\nContent-type:text/html;charset=UTF-8" . "\r\nFrom: $from\r\nReply-to: $_email\r\nBcc: cjgorgoretti@gmail.com";

    if (mail($to, $subject, $message, $headers)) {
      echo '<script type="text/javascript">
            alert("Su Consulta será respondida a la brevedad. Gracias!");
             window.location.href="contacto.php";
           </script>';
    }

  } else {

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
        <a href="https://www.instagram.com/destapacioneslavictoria/" class="instagram"><i class="bx bxl-instagram"
            style="color: black; font-size: 18px;  padding-right: 4px;"></i></a>
      </div>

    </div>
  </header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade">
      <div class="carousel-item active">
        <div class="carousel-container">
          <h3 class="animate__animated animate__fadeInUp" style="color: white; letter-spacing: 0.3em;">
            SERVICIOS</h3>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->


  <main id="main">


    <!-- ======= Pricing Section ======= -->
    <section class="pricing section-bg" data-aos="fade-up" id="servicios">
      <div class="container">

        <div class="section-title">
          <p class="text-primary" style="letter-spacing: 0.3em;">SERVICIOS</p>
          <h1>SEGÚN SU NECESIDAD</h1>
          <!--  <p>Ponemos a su disposición las más modernas tecnologías para brindar un servicio óptimo, seguro y eficiente.
            Camiones y maquinarias de última generación son nuestras herramientas para brindar un servicio de máxima
            calidad</p> -->
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 box">
            <h2><strong>Extracción y Transporte</strong></h2>
            <h4>Consultar precio</h4>
            <p><strong>En CABA Y GBA</strong></p>
            <ul>
              <li><i class="bx bx-check"></i> Retiro, transporte y disposición final de residuos líquidos.</li>
              <li><i class="bx bx-check"></i> Tratamiento de residuos especiales y no especiales.</li>
              <li><i class="bx bx-check"></i> Emisión de certificado de tratamiento de residuos.</li>
            </ul>
            <a href="https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores."
              target="_blank" class="get-started-btn">CONSULTAR</a>
          </div>

          <div class="col-lg-4 box"> <!-- featured -->
            <h2><strong>Destapación</strong></h2>
            <h4>Consultar precio</h4>
            <p><strong>En CABA Y GBA</strong></p>
            <ul>
              <li><i class="bx bx-check"></i> Desobstrucción industrial de cañerías cloacales.</li>
              <li><i class="bx bx-check"></i> Limpieza hidrocinética de cañerías y desagües.</li>
              <li><i class="bx bx-check"></i> Destapación electromecánica de las cañerias.</li>
              <li><i class="bx bx-check"></i> Limpieza de columnas y bajadas en cañerías pluviales.</li>
              <li><i class="bx bx-check"></i> Destapación de sumideros y colectores principales de los desagües.</li>
              <li><i class="bx bx-check"></i> Destapación de cámaras sépticas y decantadores de residuos.</li>
              <li><i class="bx bx-check"></i> Servicio de video inspección y diagnóstico de cañerías.</li>

            </ul>
            <a href="https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores."
              target="_blank" class="get-started-btn">CONSULTAR</a>
          </div>

          <div class="col-lg-4 box">
            <h2><strong>Retiro de Sólidos</strong></h2>
            <h4>Consultar precio</h4>
            <p><strong>En CABA Y GBA</strong></p>
            <ul>
              <li><i class="bx bx-check"></i> Retiro, transporte y disposición final de residuos sólidos peligrosos.
              </li>
              <li><i class="bx bx-check"></i> Manifiesto de transporte.</li>
              <li><i class="bx bx-check"></i> Certificado de disposición final.</li>
              <li><i class="bx bx-check"></i> Personal capacitado para el manejo de residuos peligrosos.</li>
            </ul>
            <a href="https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores."
              target="_blank" class="get-started-btn">CONSULTAR</a>
          </div>

        </div>


        <div class="row no-gutters">

          <div class="col-lg-4 box">
            <h2><strong></strong>Desagote</strong></h3>
              <h4>Consultar precio</h4>
              <p><strong>En CABA Y GBA</strong></p>
              <ul>
                <li><i class="bx bx-check"></i> Desagotes de tanques cisternas.</li>
                <li><i class="bx bx-check"></i> Desagote y limpieza de pozos de bombeo de aguas residuales.</li>
                <li><i class="bx bx-check"></i> Hidrolavado de cámaras sépticas con alta presión.</li>
                <li><i class="bx bx-check"></i> Certificado de disposición final de los barros retirados.</li>
                <li><i class="bx bx-check"></i> Personal capacitado para limpiezas profundas en cámaras sépticas.</li>
              </ul>
              <a href="https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores."
                target="_blank" class="get-started-btn">CONSULTAR</a>
          </div>

          <div class="col-lg-4 box">
            <h2><strong>Hidrolavado de Tanques</strong></h2>
            <h4>Consultar precio</h4>
            <p><strong>En CABA Y GBA</strong></p>
            <ul>
              <li><i class="bx bx-check"></i> Retiro de barros contaminados con hidrocarburos.</li>
              <li><i class="bx bx-check"></i> Limpieza en decantadores y fosas de lavaderos.</li>
              <li><i class="bx bx-check"></i> Hidrolavado de cámaras sépticas con alta presión.</li>
              <li><i class="bx bx-check"></i> Certificado de disposición final de los barros retirados.</li>
              <li><i class="bx bx-check"></i> Personal capacitado para limpiezas profundas.</li>
            </ul>
            <a href="https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores."
              target="_blank" class="get-started-btn">CONSULTAR</a>
          </div>

          <div class="col-lg-4 box">
            <h2><strong>Asesoría en Mantenimiento</strong></h2>
            <h4>Consultar precio</h4>
            <p><strong>En CABA Y GBA</strong></p>
            <ul>
              <li><i class="bx bx-check"></i> Reunión con equipo de asesoramiento de La Victoria.</li>
              <li><i class="bx bx-check"></i> Visita de técnicos al establecimiento.</li>
              <li><i class="bx bx-check"></i> Entrega de informe.</li>
            </ul>
            <a href="https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores."
              target="_blank" class="get-started-btn">CONSULTAR</a>
          </div>

        </div>


      </div>
    </section><!-- End Pricing Section -->


    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200" id="proceso">
      <div class="container">

        <div
          style="display: flex; flex-direction: column; align-items: center; padding-bottom: 20px; padding-top: 30px;">
          <p class="text-primary" style="letter-spacing: 0.3em;">PROCESO DE TRABAJO</p>
          <h1>MODERNAS TECNOLOGIAS</h1>
        </div>
        <p class="content_title">Ponemos a su disposición las más modernas tecnologías para brindar un servicio óptimo,
          seguro y eficiente. Camiones y maquinarias de última generación son nuestras herramientas para brindar un
          servicio de máxima calidad.</p>


        <div class="row">


          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="container">
              <div>
                <h4 class="title">
                  <p href="" style="display: flex; align-items: baseline;"><span class="number">1.</span>Recepción de
                    Pedido</p>
                </h4>
              </div>
              <p class="description">Recibimos mediante nuestras vías de comunicación las diferentes solicitudes de
                nuestros clientes.</p>
            </div>
            <div class="container">
              <div>
                <h4 class=" title">
                  <p href="" style="display: flex; align-items: baseline;"><span class="number">2.</span>Asesoría de
                    Cliente</p>
                </h4>
              </div>
              <p class="description">Asesoramos en base a la solicitud del cliente e indicamos el servicio que mejor se
                adapta a sus necesidades.</p>
            </div>
            <div class="container">
              <div>
                <h4 class=" title">
                  <p href="" style="display: flex; align-items: baseline;"><span class="number">3.</span>Visita Técnica
                    y Diagnóstico</p>
                </h4>
              </div>
              <p class="description">Realizamos la visita técnica y diagnosticamos gratuitamente en el lugar de trabajo.
              </p>
            </div>
            <div class="container">
              <div>
                <h4 class=" title">
                  <p href="" style="display: flex; align-items: baseline;"><span class="number">4.</span>Cotización</p>
                </h4>
              </div>
              <p class="description">Cotizamos en base a la información recabada y el tipo de trabajo a realizar.</p>
            </div>
            <div class="container">
              <div>
                <h4 class=" title">
                  <p href="" style="display: flex; align-items: baseline;"><span class="number">5.</span>Presupuesto</p>
                </h4>
              </div>
              <p class="description">Una vez enviado el presupuesto aguardamos confirmación por parte del cliente.</p>
            </div>
            <div class="container">
              <div>
                <h4 class=" title">
                  <p href="" style="display: flex; align-items: baseline;"><span class="number">6.</span>Pago</p>
                </h4>
              </div>
              <p class="description">Ponemos a disposición los distintos métodos de pago para hacer una transacción
                segura.</p>
            </div>
            <div class="container">
              <div>
                <h4 class=" title">
                  <p href="" style="display: flex; align-items: baseline;"><span class="number">7.</span>Servicio</p>
                </h4>
              </div>
              <p class="description"></p>En plazos y condiciones establecidas en las etapas anteriores, procedemos con
              el
              servicio.</p>
            </div>
          </div>
          <div class="col-lg-6 video-box">
            <img src="../assets/img/proceso.jpg" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <section class="services" style="padding-top: 30px;">
      <div class="container">
        <div style="display: flex; flex-direction: column; align-items: center; padding-bottom: 20px;">
          <p class="text-primary" style="letter-spacing: 0.3em;">CUIDAMOS SU NEGOCIO</p>
          <h1 class="title1">COMPROMETIDOS CON EL MEDIO AMBIENTE</h1>
          <p class="content_title">Servicios La Victoria es una empresa familiar fundada por Sr. Juan Roberto Scozzino
            en el
            año 1950.</p>
          <br>
          <p class="content_title">Desde entonces, el trabajo en equipo, liderezgo en conocimiento, atención
            personalizada, seguridad y salud
            de
            nuestra gente, han sido nuestras principales fortalezas; aquellas que marcan la diferencia y nos posiciona
            como
            una empresa de garantía en el mercado y líder en Servicio de Transporte de Líquidos Peligrosos en Buenos
            Aíres.
          </p>
        </div>
      </div>

    </section>
    <!-- Services Section ======= -->
    <section class="services">
      <div class="container">
        <div style="display: flex; flex-direction: column; align-items: center; padding-bottom: 20px;">
          <p class="text-primary" style="letter-spacing: 0.3em;">NUESTRO DIFERENCIAL</p>

          <h1 class="title1">PRESTAMOS SERVICIO PREMIUM</h1>
        </div>
        <div class="row">
          <div class="cards" style="display: flex;
        justify-content: space-evenly; margin-top: 20px;
    margin-bottom: 20px;">


            <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box icon-box-blue">
                <div><img src="../assets/img/certificaciones.png" width="70"></div>
                <h4 class="title"><a href="">Certificaciónes</a></h4>
                <p class="description">Extendemos certificado de disposición final de los líquidos retirados.</p>

              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box icon-box-green">
                <div><img src="../assets/img/expertos.png" width="70"></div>
                <h4 class="title"><a href="">Expertos</a></h4>
                <p class="description">60 años de experiencia capacitándonos nos convierten en el equipo más capacitado
                  del mercado.</p>

              </div>
            </div>
          </div>
          <div class="cards" style="display: flex;
       justify-content: space-evenly; margin-top: 20px;
    margin-bottom: 20px;">

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
              <div class="icon-box icon-box-pink">
                <div><img src="../assets/img/seguridad.png" width="70"></div>
                <h4 class="title"><a href="">Medidas de Seguridad</a></h4>
                <p class="description">Todos nuestros trabajadores cumplen estrictos protocolos de seguridad.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box icon-box-cyan">
                <div><img src="../assets/img/tecnologias.png" width="70"></div>
                <h4 class="title"><a href="">Modernas Tecnologías</a></h4>
                <p class="description">Ponemos a disposición las más modernas tecnologías para brindar un servicio
                  óptimo, seguro y eficiente.</p>

              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <section style="text-align: center;
    background: rgb(45, 143, 255);" data-aos="fade-up" date-aos-delay="200">
      <div class="container">
        <h2 style="color: black">Cuidando el ambiente<h2 style="color: white;"> desde 1950</h2>
        </h2>
        <button type="button" class="btn " data-bs-toggle="button" style="    background: white;
    color: rgb(45, 143, 255);"
          onclick="window.location.href='https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores.'">
          ¿Dudas? Click aquí
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
          <div class="container">
            <!-- Primera fila -->
            <ul class="list-unstyled navbar-list">
              <li class="navfooter">
                <a href="../home.php">Inicio</a>
              </li>
              <li class="navfooter">
                <a href="servicios.php">Servicios</a>
              </li>
              <li class="navfooter">
                <a href="nosotros.php">Nosotros</a>
              </li>
            </ul>

            <!-- Segunda fila -->
            <ul class="list-unstyled navbar-list">
              <li class="navfooter">
                <a href="trabajos.php">Trabajos</a>
              </li>
              <li class="navfooter">
                <a href="blog.php">Blogs</a>
              </li>
              <li class="navfooter">
                <a href="contacto.php">Contacto</a>
              </li>
            </ul>
          </div>

        </div>
        <div class="footer-newsletter">
          <div class="container">
            <div class="row" style="display: flex; justify-content: space-around; align-items: flex-start;">
              <div class="col-lg-6">
                <form action="servicios.php" method="post" role="form"
                  style="display: flex; align-items: center;   justify-content: flex-start;">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Su correo electrónico"
                    required>
                  <input type="hidden" name="recaptcha_responseF" id="recaptchaResponseF">
                  <div class="text-center">
                    <button type="submit"
                      style='position: absolute;   top: 0;  right: 0;   bottom: 0; border: 0;   background: none;font-size: 16px;    padding: 0 20px;   margin: 3px;  background: #0d6efd;  color: #fff;    transition: 0.3s;   border-radius: 50px;'>Enviar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div style="    display: flex;
justify-content: center;">
          <a href="https://www.facebook.com/DesagotesLaVictoria" class="facebook"><i class="bx bxl-facebook"
              style="color: white; font-size: 25px; padding-right: 5px;"></i></a>
          <a href="https://www.instagram.com/destapacioneslavictoria/" class="instagram"><i class="bx bxl-instagram"
              style="color: white; font-size: 25px; padding-right: 10px;"></i></a>
          <a href="https://www.linkedin.com/company/desagotes-la-victoria/" class="linkedin"><i class="bx bxl-linkedin"
              style="color: white; font-size: 25px;"></i></a>
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