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



  <style>
    #hero::after {
      content: "";
      position: absolute;
      top: 0px;
      width: 130%;
      height: 95%;
      background: linear-gradient(to right, rgba(30, 67, 86, 0.1), rgba(30, 67, 86, 0.1)), url(../assets/img/ProcesosMain.jpg) center top no-repeat;
      z-index: 0;
      border-radius: 0 0 50% 50%;
      background-position: center bottom 40%;
      /* Cambié la posición de fondo a la parte inferior */
      transform: translateX(-44%) rotate(0deg);
    }

    #hero::before {
      content: "";
      position: absolute;
      top: 0;
      width: 130%;
      height: 96%;
      background: #68a4c4;
      opacity: 0.3;
      z-index: 0;
      border-radius: 0 0 50% 50%;
      background-position: center;
      /* Se agrega para centrar la imagen */
      transform: translateX(-50%) translateY(18px) rotate(2deg);
    }

    #heros::after {
      content: "";
      position: absolute;
      top: 0;
      width: 130%;
      height: 95%;
      background: blue;
      z-index: 0;
      border-radius: 25% 80% 0 0;
      background-position: center;
      /* Se agrega para centrar la imagen */
      transform: translateX(-50%) rotate(0deg);
    }

    #heros::before {
      content: "";
      position: absolute;
      top: 0;
      width: 130%;
      height: 96%;
      background: #68a4c4;
      opacity: 0.3;
      z-index: 0;
      border-radius: 0 0 50% 50%;
      background-position: center;
      /* Se agrega para centrar la imagen */
      transform: translateX(-50%) translateY(18px) rotate(2deg);
    }

    #hero .carousel-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      text-align: center;
      bottom: 0;
      top: 0;
      left: 0;
      right: 0;
    }

    #hero h2 {
      color: #fff;
      margin-bottom: 30px;
      font-size: 48px;
      font-weight: 700;
    }

    #hero p {
      width: 80%;
      animation-delay: 0.4s;
      margin: 0 auto 30px auto;
      color: #fff;
    }

    #hero .carousel-control-prev,
    #hero .carousel-control-next {
      width: 10%;
    }

    #hero .carousel-control-next-icon,
    #hero .carousel-control-prev-icon {
      background: none;
      font-size: 48px;
      line-height: 1;
      width: auto;
      height: auto;
    }

    #hero .btn-get-started {
      font-family: "Roboto", sans-serif;
      font-weight: 500;
      font-size: 14px;
      letter-spacing: 1px;
      display: inline-block;
      padding: 12px 32px;
      border-radius: 50px;
      transition: 0.5s;
      line-height: 1;
      margin: 10px;
      color: #fff;
      animation-delay: 0.8s;
      border: 2px solid #68a4c4;
    }

    #hero .btn-get-started:hover {
      background: #68a4c4;
      color: #fff;
      text-decoration: none;
    }

    @media (min-width: 1024px) {
      #hero p {
        width: 60%;
      }

      #hero .carousel-control-prev,
      #hero .carousel-control-next {
        width: 5%;
      }
    }

    @media (max-width: 768px) {
      #hero::after {
        width: 285%;
        /* left: 500px; */
        height: 90%;
        border-radius: 0 0 102% 81%;
        transform: translateX(-51%) rotate(0deg);
      }

      #hero::before {
        top: 0;
        width: 180%;
        height: 90%;
        border-radius: 0 0 43% 43%;
        transform: translateX(-50%) translateY(20px) rotate(4deg);
      }
    }

    @media (max-width: 575px) {
      #hero h2 {
        font-size: 30px;
      }

      #hero::after {
        left: 70%;
        top: 0;
        width: 210%;
        height: 95%;
        border-radius: 0 0 65% 50%;
        transform: translateX(-50%) rotate(0deg);
      }

      #hero::before {
        left: 50%;
        top: 0;
        width: 200%;
        height: 94%;
        border-radius: 0 0 50% 50%;
        transform: translateX(-50%) translateY(20px) rotate(4deg);
      }
    }

    /*--------------------------------------------------------------
# Hero No Slider Section
--------------------------------------------------------------*/
    #hero-no-slider {
      width: 100%;
      height: 100vh;
      overflow: hidden;
      position: relative;
      text-align: center;
    }

    #hero-no-slider::before {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(to right,
          rgba(30, 67, 86, 0.8),
          rgba(30, 67, 86, 0.6)),
        url("../assets/img/ProcesosMain.jpg") center top no-repeat;
    }

    #hero-no-slider h2 {
      color: #fff;
      margin-bottom: 15px;
      font-size: 48px;
      font-weight: 700;
    }

    #hero-no-slider p {
      color: #fff;
    }

    #hero-no-slider .btn-get-started {
      font-family: "Roboto", sans-serif;
      font-weight: 500;
      font-size: 14px;
      letter-spacing: 1px;
      display: inline-block;
      padding: 12px 32px;
      border-radius: 50px;
      transition: 0.5s;
      line-height: 1;
      margin: 10px;
      color: #fff;
      animation-delay: 0.8s;
      border: 2px solid #68a4c4;
    }

    #hero-no-slider .btn-get-started:hover {
      background: #68a4c4;
      color: #fff;
      text-decoration: none;
    }

    @media (max-width: 575px) {
      #hero-no-slider h2 {
        font-size: 30px;
      }
    }







    /* -----------------------------




--------------------------------------------
*/



    #heros {
      width: 100%;
      height: 90vh;
      overflow: hidden;
      position: relative;
    }

    #heros::after {
      content: "";
      position: absolute;
      left: 50%;
      top: 0;
      width: 130%;
      height: 95%;
      background: blue;
      z-index: 0;
      border-radius: 25% 80% 0 0;
      transform: translateX(-50%) rotate(0deg);
    }

    #heros::before {
      content: "";
      position: absolute;
      left: 50%;
      top: 0;
      width: 130%;
      height: 96%;
      background: #68a4c4;
      opacity: 0.3;
      z-index: 0;
      border-radius: 0 0 50% 50%;
      transform: translateX(-50%) translateY(18px) rotate(2deg);
    }

    #heros .carousel-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      text-align: center;
      bottom: 0;
      top: 0;
      left: 0;
      right: 0;
    }

    #heros h2 {
      color: #fff;
      margin-bottom: 30px;
      font-size: 48px;
      font-weight: 700;
    }

    #heros p {
      width: 80%;
      animation-delay: 0.4s;
      margin: 0 auto 30px auto;
      color: #fff;
    }

    #heros .carousel-control-prev,
    #heros .carousel-control-next {
      width: 10%;
    }

    #heros .carousel-control-next-icon,
    #heros .carousel-control-prev-icon {
      background: none;
      font-size: 48px;
      line-height: 1;
      width: auto;
      height: auto;
    }

    #heros .btn-get-started {
      font-family: "Roboto", sans-serif;
      font-weight: 500;
      font-size: 14px;
      letter-spacing: 1px;
      display: inline-block;
      padding: 12px 32px;
      border-radius: 50px;
      transition: 0.5s;
      line-height: 1;
      margin: 10px;
      color: #fff;
      animation-delay: 0.8s;
      border: 2px solid #68a4c4;
    }

    #heros .btn-get-started:hover {
      background: #68a4c4;
      color: #fff;
      text-decoration: none;
    }

    @media (min-width: 1024px) {
      #heros p {
        width: 60%;
      }

      #heros .carousel-control-prev,
      #heros .carousel-control-next {
        width: 5%;
      }
    }

    @media (max-width: 768px) {
      #heros::after {
        width: 180%;
        height: 95%;
        border-radius: 0 0 50% 50%;
        transform: translateX(-50%) rotate(0deg);
      }

      #heros::before {
        top: 0;
        width: 180%;
        height: 94%;
        border-radius: 0 0 50% 50%;
        transform: translateX(-50%) translateY(20px) rotate(4deg);
      }
    }

    @media (max-width: 575px) {
      #heros h2 {
        font-size: 30px;
      }

      #heros::after {
        left: 40%;
        top: 0;
        width: 200%;
        height: 95%;
        border-radius: 0 0 50% 50%;
        transform: translateX(-50%) rotate(0deg);
      }

      #heros::before {
        left: 50%;
        top: 0;
        width: 200%;
        height: 94%;
        border-radius: 0 0 50% 50%;
        transform: translateX(-50%) translateY(20px) rotate(4deg);
      }
    }

    /*--------------------------------------------------------------
# Hero No Slider Section
--------------------------------------------------------------*/
    #heros-no-slider {
      width: 100%;
      height: 100vh;
      overflow: hidden;
      position: relative;
      text-align: center;
    }

    #heros-no-slider::before {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      background: red;
    }

    #heros-no-slider h2 {
      color: #fff;
      margin-bottom: 15px;
      font-size: 48px;
      font-weight: 700;
    }

    #heros-no-slider p {
      color: #fff;
    }

    #heros-no-slider .btn-get-started {
      font-family: "Roboto", sans-serif;
      font-weight: 500;
      font-size: 14px;
      letter-spacing: 1px;
      display: inline-block;
      padding: 12px 32px;
      border-radius: 50px;
      transition: 0.5s;
      line-height: 1;
      margin: 10px;
      color: #fff;
      animation-delay: 0.8s;
      border: 2px solid #68a4c4;
    }

    #heros-no-slider .btn-get-started:hover {
      background: #68a4c4;
      color: #fff;
      text-decoration: none;
    }

    @media (max-width: 575px) {
      #heros-no-slider h2 {
        font-size: 30px;
      }
    }

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

    @media (max-width: 990px) {
      .img1 {
        margin: 2%
      }
    }

    @media (max-width: 620px) {
      .img_trabajos {
        display: flex;
        flex-direction: column;
      }

      .img1 {
        margin: 3%;
      }
    }

    @media only screen and (max-width: 768px) {
      .container {
        max-width: 90%;
    }
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
        <a href="../index.php"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../index.php" style="color: black;">Inicio</a></li>
          <li><a href="servicios.php" style="color: black;">Servicios</a></li>
          <li><a href="nosotros.php" style="color: black;">Nosotros</a></li>
          <li><a href="trabajos.php" style="color: black;">Trabajos</a></li>
          <li><a href="blog.php" style="color: black;">Blogs</a></li>
          <li><a href="contacto.php" style="color: black;">Contacto</a></li>
        </ul>
      </nav><!-- .navbar -->
      <div class="icons-navbar" style="height: 25px; width: 80px;">
        <a href="https://www.facebook.com/DesagotesLaVictoria" class="facebook"><i class="bx bxl-facebook"
            style="color: black; font-size: 18px; padding-right: 2px;"></i></a>
        <a href="https://www.instagram.com/destapacioneslavictoria/" class="instagram"><i class="bx bxl-instagram"
            style="color: black; font-size: 18px;  padding-right: 2px;"></i></a>
        <a href="https://www.youtube.com/@lavictoriatransportederesiduos" class="youtube"><i class="bx bxl-youtube"
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
            TRABAJOS</h3>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->
  <main id="main">
    <section>

      <div class="container">

        <div style="display: flex; flex-direction: column; align-items: center; padding-bottom: 20px;">
          <p class="text-primary" style="letter-spacing: 0.3em;">Nuestros trabajos</p>
          <h1>Excelencia operativa</h1>
        </div>
        <div class="img_trabajos">
          <img class="img1" src="../assets/img/trabajo3.jpg" alt="" style="    width: 300px;
            height: 340px;">
          <img class="img1" src="../assets/img/trabajo1.jpg" alt="" style="    width: 300px;
            height: 340px;">
          <img class="img1" src="../assets/img/trabajo2.jpg" alt="" style="    width: 300px;
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
            <p style="display: flex; justify-content: center;">
              <img src="../assets/img/logo-grande.png" class="img-fluid" style="    height: 200px;
width: 270px;">
            </p>
          </div>
          <div class="container">
            <!-- Primera fila -->
            <ul class="list-unstyled navbar-list">
              <li class="navfooter">
                <a href="../index.php">Inicio</a>
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
                <form action="nosotros.php" method="post" role="form"
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
              style="color: white; font-size: 25px; padding-right: 10px;"></i></a>
          <a href="https://www.youtube.com/@lavictoriatransportederesiduos" class="youtube"><i class="bx bxl-youtube"
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