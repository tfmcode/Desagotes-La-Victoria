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
  <script>
    grecaptcha.ready(function () {
      grecaptcha.execute('6LdHrLEUAAAAAM4CqjNR_lDOOV1Tv16uXk57Ng4o', { action: 'formulario' })
        .then(function (token) {
          var recaptchaResponseF = document.getElementById('recaptchaResponseF');
          recaptchaResponseF.value = token;
        });
    });
  </script>

  <meta name="google-site-verification"
    content="google-site-verification=_hKqKGTBLcEraPvwFu8tUNzUJNI9BkeupGXAuiU8QDo" />


  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .boxcontact {
      text-align: center;
      /* width: 18%; */
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

    @media screen and (max-width: 768px) {
        .boxcontainer {
            flex-direction: column;
            align-items: center;
          
        }
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
    $_nombre = $_POST['nombre'];
    $_email = $_POST['email'];
    $_telefono = $_POST['telefono'];
    $_asuntoform = $_POST['asunto'];
    $_asunto = "Desagotes La Victoria ==> Consulta desde el Formulario de Contacto";
    $_consulta = $_POST['consulta'];
    $from = "info@desagoteslavictoria.com.ar";
    $to = "info@desagoteslavictoria.com.ar";
    $subject = $_asunto;


    $message = '<br>================================================<br><b>CONSULTA</b><br>================================================<br><b>Nombre: </b>' . $_nombre . '<br><br><b>Email: </b>' . $_email . '<br><br><b>Teléfono: </b>' . $_telefono . '<br><br><b>Consulta: </b>' . $_consulta . '<br><br>================================================<br>Enviado OK!<br><br><br><br>';

    $headers = "MIME-Version: 1.0" . "\r\nContent-type:text/html;charset=UTF-8" . "\r\nFrom: $from\r\nReply-to: $_email\r\nBcc: cjgorgoretti@gmail.com";

    if (mail($to, $subject, $message, $headers)) {
      echo '<script type="text/javascript">
            alert("Su Consulta será respondida a la brevedad. Gracias!");
             window.location.href="index.php";
           </script>';
    }

  } else {

  }

}


?>

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


  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" id="consultenos">
      <div class="container">

        <div class="section-title">
        <p class="text-primary" style="letter-spacing: 0.3em;">CONTÁCTENOS</p>
          <h2>Respuesta inmediata</h2>
        </div>

        <div class="row" style="display: flex; flex-wrap: wrap">

          <div class="col-lg-6">
            <form action="contacto.php" method="post" role="form">
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
                <button type="submit" class="btn btn-primary">Enviar
                  Consulta</button>
              </div>
            </form>
          </div>
          <div class="col-lg-6">
            <div class="boxcontainer"
              style="display: flex; justify-content: space-evenly; margin-top: 8%; margin-left: 10%;">
              <div class="boxcontact">
                <span style="font-size: 2em;"><iconify-icon icon="bi:telephone-fill"
                    style="color: blueviolet;"></iconify-icon></span>
                <h4 style="font-weight: bold; font-size: 1em;">Teléfono</h4>
                <p class="p1" style="margin: 0.5em 0;">(011) 4551-5191</p>
              </div>
              <div class="boxcontact">
                <span style="font-size: 2em;"><iconify-icon icon="solar:map-point-bold"
                    style="color: blueviolet;"></iconify-icon></span>
                <h4 style="font-weight: bold; font-size: 1em;">Dirección</h4>
                <p class="p1" style="margin: 0.5em 0;">Aguilar 2878, Capital Federal.</p>
                <!-- <p style="margin: 0.5em 0;">Capital Federal</p> -->
              </div>
              <div class="boxcontact">
                <span style="font-size: 2em;"><iconify-icon icon="carbon:time-filled"
                    style="color: blueviolet;"></iconify-icon></span>
                <h4 style="font-weight: bold; font-size: 1em">Horario Laboral</h4>
                <p class="p1" style="margin: 0.5em 0;">08:00hs a 18:00hs</p>
              </div>
            </div>

          </div>


        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.230287108302!2d-58.453161923444796!3d-34.57303915588002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5c35b52a4e5%3A0xb3283a9804044595!2sAguilar%202878%2C%20C1426DTB%20CABA!5e0!3m2!1ses-419!2sar!4v1694650743906!5m2!1ses-419!2sar"
          frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </section><!-- End Map Section -->

    <section style="text-align: center;" data-aos="fade-up" date-aos-delay="200">
      <div class="container">
        <h1>Cuidando el ambiente desde 1950</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="button"
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
                <form action="contacto.php" method="post" role="form"
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
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</body>

</html>