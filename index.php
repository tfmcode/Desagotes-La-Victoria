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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

<script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>

  <script src='https://www.google.com/recaptcha/api.js?render=6LdHrLEUAAAAAM4CqjNR_lDOOV1Tv16uXk57Ng4o'></script>
  <script>
        grecaptcha.ready(function() {
        grecaptcha.execute('6LdHrLEUAAAAAM4CqjNR_lDOOV1Tv16uXk57Ng4o', {action: 'formulario'})
        .then(function(token) {
        var recaptchaResponse = document.getElementById('recaptchaResponse');
        recaptchaResponse.value = token;
        });});
  </script>        

<meta name="google-site-verification" content="google-site-verification=_hKqKGTBLcEraPvwFu8tUNzUJNI9BkeupGXAuiU8QDo" />

</head>


<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST'){ 
// Realizamos la petición de control: 
$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify'; 
$recaptcha_secret = '6LdHrLEUAAAAAF5X3_3TIrJm1Wyh93BllZtXdQGa'; 
$recaptcha_response = $_POST['recaptcha_response']; 
$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response); 
$recaptcha = json_decode($recaptcha); 
// Miramos si se considera humano o robot: 
if($recaptcha->score >= 0.5){
      $_nombre=$_POST['nombre'];
      $_email=$_POST['email'];
      $_telefono=$_POST['telefono'];
      $_asuntoform = $_POST['asunto'];
      $_asunto="Desagotes La Victoria ==> Consulta desde el Formulario de Contacto";
      $_consulta=$_POST['consulta'];
      $from = "info@desagoteslavictoria.com.ar";
      $to = "info@desagoteslavictoria.com.ar";
      $subject = $_asunto;


        $message = '<br>================================================<br><b>CONSULTA</b><br>================================================<br><b>Nombre: </b>'.$_nombre.'<br><br><b>Email: </b>'.$_email.'<br><br><b>Teléfono: </b>'.$_telefono. '<br><br><b>Consulta: </b>'.$_consulta.'<br><br>================================================<br>Enviado OK!<br><br><br><br>';
        
        $headers = "MIME-Version: 1.0" . "\r\nContent-type:text/html;charset=UTF-8" . "\r\nFrom: $from\r\nReply-to: $_email\r\nBcc: cjgorgoretti@gmail.com";

       if (mail($to,$subject,$message, $headers)) {
           echo '<script type="text/javascript">
            alert("Su Consulta será respondida a la brevedad. Gracias!");
             window.location.href="index.php";
           </script>';  
      }

}else {

}

}
    
   
?>        


<body>

<div class="btn-whatsapp">
<a href="http://bit.ly/servicioslavictoria" target="_blank">
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
          <li><a href="#nosotros">Nosotros</a></li>
          <li><a href="./sections/servicios.php">Servicios</a></li>
          <li><a href="#proceso">Trabajos</a></li>
          <li><a href="#consultenos">Contacto</a></li>
          <li><a href="#consultenos">Blogs</a></li>
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
          <p class="animate__animated animate__fadeInUp"><h3 style='color:white;'>Mantener sus Instalaciones en condiciones saludables</h3></p>
          <a href="#proceso" class="btn-get-started animate__animated animate__fadeInUp">Conozca Nuestro Proceso</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">La Clave de un Negocio Productivo</h2>
          <p class="animate__animated animate__fadeInUp"><h3 style='color:white'>Mantenimiento Preventivo</h3></p>
          <a href="#proceso" class="btn-get-started animate__animated animate__fadeInUp">Conozca Nuestro Proceso</a>
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


    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up" id="nosotros">
      <div class="container">

        <div class="section-title">
          <h2><strong>Nosotros</strong><br>Servicios La Victoria, fundada en 1950</h2>
        </div>


        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h2>Fundada en 1950 por el Sr. Juan Roberto Scozzino</h2>
            <p class="fst-italic">
              Desde entonces, el trabajo en equipo, liderazgo en conocimiento, atención personalizada, seguridad y salud de nuestra gente, han sido nuestras principales fortalezas; aquellas que marcan la diferencia y nos posiciona como una empresa de garantía en el mercado y líder en Servicio de Transporte de Líquidos Peligrosos en Buenos Aires. En los últimos años...:
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> Expandimos nuestras operaciones</li>
              <li><i class="bi bi-check2-circle"></i> Aumentamos el tamaño de nuestra flota</li>
              <li><i class="bi bi-check2-circle"></i> Incrementamos el tamaño de servicios ofrecidos</li>
            </ul>
            <p>
              <h3>Cuidando el medio ambiente desde 1950</h3>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><img src="assets/img/3.png" width="70"></div>
              <h4 class="title"><a href="">Asesoramiento Profesional</a></h4>
              <p class="description">Al contactarse, nuestro equipo de profesionales, especializados se encarga de detectar las necesidas en su negocio y ofrecer un servicio a medida de sus mecesidades.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><img src="assets/img/4.png" width="70"></div>
              <h4 class="title"><a href="">Recolección + Disposición</a></h4>
              <p class="description">Según el servicio requerido, nuestro equipo de profesionales se encarga de retirar y transportar los residuos líquidos, realizando el recorrido hacia la planta de tratamiento correspondiente.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><img src="assets/img/5.png" width="70"></div>
              <h4 class="title"><a href="">Certificación Legal</a></h4>
              <p class="description">Extendemos los manifiestos de transporte y certificado de disposición final de los residuos y sólidos retirados. Su empresa contará con una garantía de la realización del servicio.</p>
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
              <p class="description">Mi misión es acompañar a su empresa en el proceso de mantenimiento preventivo de sus instalaciones. En este camino, contará con todo lo necesario para su tranquilidad: Equipos de última generación, personal altamente capacitado y la experiencia propia de contar con un equipo con más de <strong>65 años de experiencia en el mercado.</strong></p>
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



    <!-- ======= Pricing Section ======= -->
    <section class="pricing section-bg" data-aos="fade-up" id="servicios">
      <div class="container">

        <div class="section-title">
          <h2><strong>Servicios</strong><br>Según su necesidad</h2>
          <p>Ponemos a su disposición las más modernas tecnologías para brindar un servicio óptimo, seguro y eficiente. Camiones y maquinarias de última generación son nuestras herramientas para brindar un servicio de máxima calidad</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 box">
            <h3><strong>Extracción y Transporte</strong></h3>
            <h4>Consultar $$<span> en CABA y GBA</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Retiro, transporte y disposición final de residuos líquidos</li>
              <li><i class="bx bx-check"></i> Tratamiento de residuos especiales y no especiales</li>
              <li><i class="bx bx-check"></i> Emisión de certificado de tratamiento de residuos</li>
            </ul>
            <a href="#" class="get-started-btn">Consultar</a>
          </div>

          <div class="col-lg-4 box"> <!-- featured -->
            <h3><strong>Destapación</strong></h3>
            <h4>Consultar $$<span> en CABA y GBA</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Desobstrucción industrial de cañerías cloacales</li>
              <li><i class="bx bx-check"></i> Limpieza hidrocinética de cañerías y desagües</li>
              <li><i class="bx bx-check"></i> Destapación electromecánica de las cañerias</li>
              <li><i class="bx bx-check"></i> Limpieza de columnas y bajadas en cañerías pluviales</li>
              <li><i class="bx bx-check"></i> Destapación de sumideros y colectores principales de los desagües</li>
              <li><i class="bx bx-check"></i> Destapación de cámaras sépticas y decantadores de residuos</li>
              <li><i class="bx bx-check"></i> Servicio de video inspección y diagnóstico de cañerías</li>

            </ul>
            <a href="#" class="get-started-btn">Consultar</a>
          </div>

          <div class="col-lg-4 box">
            <h3><strong>Retiro de Sólidos</strong></h3>
            <h4>Consultar $$<span> en CABA y GBA</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Retiro, transporte y disposición final de residuos sólidos peligrosos</li>
              <li><i class="bx bx-check"></i> Manifiesto de transporte</li>
              <li><i class="bx bx-check"></i> Certificado de disposición final</li>
              <li><i class="bx bx-check"></i> Personal capacitado para el manejo de residuos peligrosos</li>
            </ul>
            <a href="#" class="get-started-btn">Consultar</a>
          </div>

        </div>


        <div class="row no-gutters">

          <div class="col-lg-4 box">
            <h3><strong>Desagote</strong></h3>
            <h4>Consultar $$<span> en CABA y GBA</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Desagotes de tanques cisternas</li>
              <li><i class="bx bx-check"></i> Desagote y limpieza de pozos de bombeo de aguas residuales</li>
              <li><i class="bx bx-check"></i> Hidrolavado de cámaras séticas con alta presión</li>
              <li><i class="bx bx-check"></i> Certificado de disposición final de los barros retirados</li>
              <li><i class="bx bx-check"></i> Personal capacitado para limpiezas profundas en cámaras sépticas</li>
            </ul>
            <a href="#" class="get-started-btn">Consultar</a>
          </div>

          <div class="col-lg-4 box">
            <h3><strong>Hidrolavado de Tanques</strong></h3>
            <h4>Consultar $$<span> en CABA y GBA</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Retiro de barros contaminados con hidrocarburos</li>
              <li><i class="bx bx-check"></i> Limpieza en decantadores y fosas de lavaderos</li>
              <li><i class="bx bx-check"></i> Hidrolavado de cámaras sépticas con alta presión</li>
              <li><i class="bx bx-check"></i> Certificado de disposición final de los barros retirados</li>
              <li><i class="bx bx-check"></i> Personal capacitado para limpiezas profundas</li>
            </ul>
            <a href="#" class="get-started-btn">Consultar</a>
          </div>

          <div class="col-lg-4 box">
            <h3><strong>Asesoría en Mantenimiento</strong></h3>
            <h4>Consultar $$<span> en CABA y GBA</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Reunión con equipo de asesoramiento de La Victoria</li>
              <li><i class="bx bx-check"></i> Visita de técnicos al establecimiento</li>
              <li><i class="bx bx-check"></i> Entrega de informe</li>
            </ul>
            <a href="#" class="get-started-btn">Consultar</a>
          </div>

        </div>


      </div>
    </section><!-- End Pricing Section -->


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
              <div class="icon"><span class="iconify" data-icon="icon-park-outline:one-key" data-width="128"></span></div>
              <h4 class="title"><a href="">Recepción de Pedido</a></h4>
              <p class="description">Recibimos mediante nuestras vías de comunicación las diferentes solicitudes de nuestros clientes</p>
            </div>

            <div class="icon-box">
              <div class="icon"><span class="iconify" data-icon="icon-park-outline:two-key" data-width="128"></span></div>
              <h4 class="title"><a href="">Asesoría de Cliente</a></h4>
              <p class="description">Asesoramos en base a la solicitud del cliente e indicamos el servicio que mejor se adapta a sus necesidades</p>
            </div>

            <div class="icon-box">
              <div class="icon"><span class="iconify" data-icon="icon-park-outline:three-key" data-width="128"></span></div>
              <h4 class="title"><a href="">Visita Técnica y Diagnóstico</a></h4>
              <p class="description">Realizamos la visita técnica y diagnosticamos gratuitamente en el lugar de trabajo</p>
            </div>

            <div class="icon-box">
              <div class="icon"><span class="iconify" data-icon="icon-park-outline:four-key" data-width="128"></span></div>
              <h4 class="title"><a href="">Cotización</a></h4>
              <p class="description">Cotizamos en base a la información recabada y el tipo de trabajo a realizar</p>
            </div>

            <div class="icon-box">
              <div class="icon"><span class="iconify" data-icon="icon-park-outline:five-key" data-width="128"></span></div>
              <h4 class="title"><a href="">Presupuesto</a></h4>
              <p class="description">Una vez enviado el presupuesto aguardamos confirmación por parte del cliente</p>
            </div>

            <div class="icon-box">
              <div class="icon"><span class="iconify" data-icon="icon-park-outline:six-key" data-width="128"></span></div>
              <h4 class="title"><a href="">Pago</a></h4>
              <p class="description">Ponemos a disposición los distintos métodos de pago para hacer una transacción segura</p>
            </div>

            <div class="icon-box">
              <div class="icon"><span class="iconify" data-icon="icon-park-outline:seven-key" data-width="128"></span></div>
              <h4 class="title"><a href="">Servicio</a></h4>
              <p class="description">En plazos y condiciones establecidas en las etapas anteriores, procedemos con el servicio</p>
            </div>


          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->



    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" id="consultenos">
      <div class="container">

        <div class="section-title">
          <h2><strong>Consúltenos</strong><br>Respuesta inmediata</h2>
        </div>


        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Dirección</h3>
                  <p>Aguilar 2878<br>Ciudad de Buenos Aires</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>info@desagoteslavictoria.com.ar</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Teléfono</h3>
                  <p>+54 11-4551-5191</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="index.php" method="post" role="form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nombre" class="form-control" id="name" placeholder="Su Nombre" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Su Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="asunto" id="subject" placeholder="Asunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="consulta" rows="5" placeholder="Su Consulta" required></textarea>
              </div>
              <div class="my-3">
                <!-- <div class="loading">Loading</div> -->
                <div class="error-message"></div>
                <!-- <div class="sent-message">Your message has been sent. Thank you!</div> -->
              </div>
              <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
              <div class="text-center">
                <button type="submit" style='color:white; background:blue; border-color:blue; border-radius:6px'>Enviar Consulta</button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.230287108302!2d-58.453161923444796!3d-34.57303915588002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5c35b52a4e5%3A0xb3283a9804044595!2sAguilar%202878%2C%20C1426DTB%20CABA!5e0!3m2!1ses-419!2sar!4v1694650743906!5m2!1ses-419!2sar" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </section><!-- End Map Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
      <div class="container">
        <!-- <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div> -->
      </div>
    </div>

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


          <div class="col-lg-4 col-md-4 footer-info">
            <h3>Nosotros</h3>
            <p>Servicios La Victoria es una empresa familiar fundada en el año 1950.<br><br>Desde entonces, el trabajo en equipo, liderazgo en conocimiento, atención personalizada, seguridad y salud de nuestrta gente, han sido nuestras principales fortalezas.</p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/DesagotesLaVictoria" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/destapacioneslavictoria/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.linkedin.com/company/desagotes-la-victoria/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; <strong><span>Servicios La Victoria</span></strong></div>
      <div class="credits">
        Marketing Digital <a href="https://www.adwaysolutions.com/">Adway Solutions</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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