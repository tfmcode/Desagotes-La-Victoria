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
    h1 {
      text-align: center;
      font-size: 28px;
      margin-bottom: 20px;
    }

    h4 {
      font-size: 20px;
      margin-top: 30px;
      margin-bottom: 10px;
    }

    p {
      margin-bottom: 15px;
    }

    strong {
      font-weight: bold;
    }

    a {
      color: blue;
      text-decoration: none;
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
          <li><a href="../sections/servicios.php" style="color: black;">Servicios</a></li>
          <li><a href="../sections/nosotros.php" style="color: black;">Nosotros</a></li>
          <li><a href="../sections/trabajos.php" style="color: black;">Trabajos</a></li>
          <li><a href="../sections/blog.php" style="color: black;">Blogs</a></li>
          <li><a href="../sections/contacto.php" style="color: black;">Contacto</a></li>
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
    <div class="container">
      <h1>Atención: 4 síntomas del mal funcionamiento cloacal</h1>
      <p>¿Has sentido un olor pestilente proveniente de las cloacas? Presta atención, hay ciertos indicios de que el
        sistema cloacal de tu empresa, industria u hogar está presentando algún tipo de problema.</p>
      <p>Como bien sabemos, la red cloacal está compuesta por cañerías de amplias dimensiones que funcionan tanto para
        negocios e industrias, como para el servicio hogareño. Tras su uso, el agua residual viaja a través de las
        cañerías, y posteriormente se traslada a plantas de tratamiento.</p>
      <p>¿Pero qué sucede cuando este proceso no puede desarrollarse correctamente? ¿Cómo impactan estos problemas en el
        funcionamiento de las industrias?</p>
      <p>A continuación, desde La Victoria te contamos sobre las mejores prácticas para preservar el sistema cloacal y
        las <strong>señales a prestar atención para poder identificar un mal funcionamiento u obstrucción.</strong></p>
      <h4>Cuidado de la red cloacal. ¿Por qué las cloacas se obstruyen?</h4>
      <p>La falta de supervisión respecto a la manipulación y descarte de residuos, el uso inadecuado de los espacios de
        trabajo, y por sobre todo, <strong>no contar con el mantenimiento preventivo de las cloacas de tu comercio o
          industria, puede ocasionar inconvenientes más graves a futuro.</strong></p>
      <p>Estos problemas requerirán de reparación y tendrán un costo más elevado, ya que además de mano de obra,
        <strong>requerirá de la interrupción momentánea o permanente de los servicios o producción que su negocio
          ofrece, con las pérdidas monetarias consecuentes derivadas.</strong></p>
      <h4>Tips de La Victoria para el adecuado funcionamiento del sistema cloacal</h4>
      <ul>
        <li><strong>Control sobre los desperdicios que se vierten en la red.</strong> Echar grasa, aceite, elementos
          químicos o sólidos a través de las tuberías es absolutamente desaconsejable, y se puede convertir a la larga
          en un problema sostenido, que llegará acompañado de graves complicaciones en el funcionamiento normal de la
          red.</li>
        <li><strong>Revisar de manera asidua los conductos y el drenaje.</strong> Si se nota un desagüe lento de los
          líquidos, quizá sea momento de prestar atención y actuar con servicio técnico preventivo, dado que este tipo
          de inconvenientes suelen acentuarse con el tiempo.</li>
        <li><strong>De tanto en tanto, dejar correr el agua caliente</strong> al menos por un período breve de tiempo,
          para que los objetos que puedan resultar en molestia se disuelvan o retiren.</li>
      </ul>
      <h4>Características más notorias de un sistema en mal funcionamiento u obstruido</h4>
      <ul>
        <li>Olor desagradable o pestilente.</li>
        <li>Sonidos que puedan ser señales de drenaje incorrecto o complicado.</li>
        <li>Aparición de manchas que denotan en la zona presencia de humedad.</li>
        <li>Bocas o salidas de agua con atasco.</li>
      </ul>
      <p>La importancia de controlar los desechos presenta beneficios que, aunque no puedan ser considerados a simple
        vista, generan el adecuado funcionamiento que se espera para el sostén de una actividad regular. Y a futuro
        ahorran inconvenientes y pérdida de dinero para las empresas.</p>
      <p>De manera previa, recordemos que también es importante establecer un buen diseño del pozo séptico y, en
        paralelo, de las cañerías en general, con la mira puesta en evitar tanto como sea posible problemas que deriven
        en un bloqueo del sistema.</p>
      <p>La periodicidad del cuidado mínimo necesario se relaciona con la búsqueda de la seguridad, y de mayor calidad
        de vida para el futuro de cada uno de nosotros.</p>
      <p>¿Quieres consultar un presupuesto a tu medida? <a>Escribinos y cotizá tu servicio en La Victoria.</a></p>
    </div>

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
            <a href="../home.php">Inicio</a>
          </li>
          <li class="navfooter">
            <a href="../sections/servicios.php">Servicios</a>
          </li>
          <li class="navfooter">
            <a href="../sections/nosotros.php">Nosotros</a>
          </li>
        </ul>

        <!-- Segunda fila -->
        <ul class="list-unstyled navbar-list">
          <li class="navfooter">
            <a href="../sections/trabajos.php">Trabajos</a>
          </li>
          <li class="navfooter">
            <a href="../sections/blog.php">Blogs</a>
          </li>
          <li class="navfooter">
            <a href="../sections/contacto.php">Contacto</a>
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
  <script>
    // JavaScript para mostrar/ocultar la información al hacer clic en "Ver más"
    const imgTrabajos = document.querySelectorAll('.img_trabajo');

    imgTrabajos.forEach((imgTrabajo) => {
      const imgInfo = imgTrabajo.querySelector('.img_info');
      const contenido = imgInfo.querySelector('p');
      const verMasBtn = imgTrabajo.querySelector('.ver_mas');

      verMasBtn.addEventListener('click', () => {
        if (contenido.style.display === 'none') {
          contenido.style.display = 'block';
        } else {
          contenido.style.display = 'none';
        }
      });
    });
  </script>

</body>

</html>