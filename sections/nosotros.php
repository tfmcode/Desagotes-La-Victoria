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
      <img src="../assets/img/btn_whatsapp.png" alt="">
    </a>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1> -->
        <a href="index.php"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="../index.php">Inicio</a></li>
          <li><a class="active " href="../home.php">Home</a></li>
          <li><a href="./nosotros.php">Nosotros</a></li>
          <li><a href="./servicios.php">Servicios</a></li>
          <li><a href="./trabajos.php">Trabajos</a></li>
          <li><a href="./contacto.php">Contacto</a></li>
          <li><a href="./blog.php">Blogs</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up" id="nosotros">
      <div class="container">

        <div class="section-title">
          <h2><strong>NUESTRA HISTORIA</strong><br>Servicios La Victoria, es una empresa familiar fundada en el año 1950
          </h2>
        </div>


        <div class="row">
          <div class="col-lg-6">
            <img src="../assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p class="fst-italic">
              Desde entonces, el trabajo en equipo, liderazgo en conocimiento, atención personalizada, seguridad y salud
              de nuestra gente, han sido nuestras principales fortalezas; aquellas que marcan la diferencia y nos
              posiciona como una empresa de garantía en el mercado, y líder en Servicio de Transporte de Líquidos
              Peligrosos en Buenos Aires. En los últimos años...:
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> Expandimos nuestras operaciones</li>
              <li><i class="bi bi-check2-circle"></i> Aumentamos el tamaño de nuestra flota</li>
              <li><i class="bi bi-check2-circle"></i> Incrementamos el tamaño de servicios ofrecidos</li>
            </ul>
            <p>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
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

  <div class="footer-top" style="text-align: center;">
  <div class="container"  >
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
          <img src="../assets/img/logo-grande.png" class="img-fluid">
        </p>
      </div>
    </div>
    <div class="footer-newsletter">
      <div class="container" >
        <div class="row" style="display: flex;
              justify-content: space-around;
              align-items: flex-start;" >
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