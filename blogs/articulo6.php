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
    @media only screen and (max-width: 768px) {
      .container {
        max-width: 90%;
    }
    }
  </style>
</head>

<?php
require_once '../utils/security.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_responseF'])) {
    // Realizamos la petición de control:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LdHrLEUAAAAAF5X3_3TIrJm1Wyh93BllZtXdQGa';
    $recaptcha_responseF = security($_POST['recaptcha_responseF']);
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_responseF);
    $recaptcha = json_decode($recaptcha);
    $_email = security($_POST['email']);
    // Miramos si se considera humano o robot:
    if ($recaptcha->score >= 0.5) {
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
          <li><a href="../sections/servicios.php" style="color: black;">Servicios</a></li>
          <li><a href="../sections/nosotros.php" style="color: black;">Nosotros</a></li>
          <li><a href="../sections/trabajos.php" style="color: black;">Trabajos</a></li>
          <li><a href="../sections/blog.php" style="color: black;">Blogs</a></li>
          <li><a href="../sections/contacto.php" style="color: black;">Contacto</a></li>
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


  <main id="main">
    <div class="container  animate__animated animate__fadeInUp">
      <h1>Las 4 fallas más frecuentes en las cañerías industriales (y cómo detectarlas)</h1>

      <p>El buen estado de una cañería es vital para el trabajo seguro de una empresa o industria. Un <strong>problema
          en el desagüe</strong> ocasiona demoras, incomodidad y hasta <strong>fallas durante el proceso
          productivo.</strong> ¿Por qué suceden? </p>
      <p>Hay diversos motivos que podrían ocasionar fallas en los caños, y estos, en la mayoría de las ocasiones,
        <strong>solo puede determinarse a través de una inspección o diagnóstico</strong> de las mismas.
      </p>
      <p>En algunos casos, cuando la <strong>falla es profunda y de gravedad alta</strong>, debe recurrirse a un sistema
        de inspección con cámara para poder detectar el inconveniente.</p>
      <h4>Las 4 fallas más comunes en las cañerías</h4>

      <ol>
        <li>
          <strong>Cañerías ruidosas</strong>
          <p>La dilatación de las cañerías por el contacto con el agua caliente es una falla bastante frecuente. Como
            <strong>consecuencia de las altas temperaturas la cañería se dilata</strong> y produce sonidos molestos y
            repetitivos debido al roce con las abrazaderas.
          </p>
        </li>
        <li>
          <strong>Presión baja del flujo de agua</strong>
          <p>Si bien es un problema de categoría leve, es cierto que puede ocasionar bastante incomodidad en el flujo de
            trabajo de una industria.</p>
          <p>Más que nadie sabrás que la normalidad del flujo de agua o de los líquidos que se vierten para la red
            productiva <strong>afectan directamente a tu producto final</strong>.</p>
          <p>Ten en cuenta que a medida que aumenta la pérdida de presión, también incrementa la energía que requiere el
            sistema para compensarla, lo cual lleva a <strong>aumentar los costos de operación</strong>.</p>
        </li>
        <li>
          <strong>Cañerías obstruidas por presencia de sedimentos</strong>
          <p>La acumulación en la tubería de <strong>materiales y desechos sólidos</strong> es un problema bastante
            común, y es uno de los inconvenientes que podemos solucionar desde La Victoria mediante una serie de
            procedimientos, como la inspección televisiva de cañerías industriales y con una <strong>limpieza
              hidrocinética de alta presión</strong>.</p>
        </li>
        <li>
          <strong>Desgaste y roturas en la cañería</strong>
          <p>El desgaste físico de cañerías antiguas pueden resultar en problemas futuros de compleja resolución, como
            por ejemplo, la inundación del espacio de trabajo, o roturas que implican desmontar grandes partes de la
            instalación.</p>
        </li>
      </ol>

      <p>Recuerda que el mantenimiento preventivo es una de las primeras recomendaciones que te brindamos, porque
        previene futuras complicaciones, pérdidas de tiempo y de dinero para tu empresa. En La Victoria Destapaciones
        tenemos presente una conciencia ecológica a la hora de cuidar el funcionamiento natural de las cañerías, y la
        posterior eliminación de los desechos de forma correcta. Es por eso que el resultado del desagote tiene que ser
        destinado a las plantas de tratamiento habilitadas. Consulta más información de los servicios de La Victoria en
        nuestra página web.</p>

      <h4>Tips de La Victoria para el cuidado de tus cañerías</h4>
      <ul>
        <li>Protege tus cañerías utilizando los materiales adecuados.</li>
        <li>Realiza un diagnóstico frecuente para ver su estado general.</li>
        <li>Presta atención si se presenta alguno de los puntos mencionados arriba.</li>
        <li>Realiza el trabajo con expertos que puedan darte un diagnóstico preciso.</li>
      </ul>

      <h4>La importancia del mantenimiento de cañerías industriales</h4>
      <p>El adecuado mantenimiento del sistema de tuberías, y la detección a tiempo de los problemas posibles resulta en
        notorios beneficios para el desarrollo, los procesos industriales, y el ahorro en costos. </p>
      <p>Luego de realizar una limpieza que permita lograr un diagnóstico claro de la afectación de las cañerías, la
        revisión visual por medio de cámaras es el paso siguiente para detectar los problemas por resolver. Como
        adelantamos, la inspección en video es la forma más útil para conocer el origen de las fallas o complicaciones.
      </p>
      <p>El registro de la información en los diferentes soportes disponibles es otro de los servicios que brinda La
        Victoria, y es una herramienta de seguridad para resguardar los datos y facilitar el seguimiento a futuro de las
        necesidades de conservación.<a>Cotiza el diagnóstico para tus cañerías haciendo clic acá.</a></p>

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
                <a href="../index.php">Inicio</a>
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