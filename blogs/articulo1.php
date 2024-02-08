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
      <h1>¿Qué hacer con el aceite usado de tu industria?</h1>
      <p><strong>Un litro de aceite de cocina usado puede contaminar hasta 1000 litros de agua</strong>, ¿te imaginás el impacto ecológico que significa cuando hablamos de residuos de aceite vertidos en cantidades industriales? </p>
      <p>En el caso doméstico es más sencillo, dadas las pequeñas cantidades utilizadas. Sin embargo, <strong>la Industria necesita contar con una alternativa eficiente</strong> para deshacerse de su aceite usado de cocina (ACU) sin generar contaminación ni impacto medioambiental.</p>
      <p>De cara al 22 de abril, fecha en la que se conmemora el Día de la Tierra, es interesante reflexionar acerca de las políticas y las acciones que las empresas llevamos a cabo diariamente para el sostenimiento de la vida y el cuidado del planeta. Tu decisión puede prevenir la contaminación de aguas residuales urbanas y marcar la diferencia.</p>
      <h4>Sumate a las empresas argentinas con ética ambiental y colaborá con el correcto tratamiento del aceite usado.</h4>
      <p>El aceite usado vertido a gran escala a través de comercios e industrias provoca a corto, mediano y largo plazo, la degradación de conductos, cloacas, canales, generando un efecto negativo y contaminante de los cursos de agua.</p>
      <p>Es importante mencionar, que dicho aceite desechado sin el cuidado correspondiente puede afectar también la vida de  las personas que participan de las actividades relacionadas a la generación de los desechos.</p>
      <h4>¿Sabías por qué es tan contaminante?</h4>
      <p>El ACU tiene un alto poder de toxicidad pues contiene materia orgánica. Esto significa que cuenta con 5 mil veces más carga contaminante que el agua residual que circula por las alcantarillas y redes de saneamiento.</p>
      <h4>¿Cuáles son las actividades que más desperdicio de aceite generan?</h4>  
      <p>En el grupo de industrias que más generan desperdicios varios de aceite se encuentran la agricultura, el comercio, la construcción, la gastronomía/hotelería, y el transporte.</p>
      <p>Dentro de estos casos se encuentran Industrias como la curtiembre, en que el aceite se utiliza para tratamiento de telas, cueros y pieles, que incluye contaminación  en todos los pasos atravesados: obtención, producción y tratamiento.</p>
      <h4>Regulaciones y coordinación: ¿qué debemos saber al respecto?</h4>
      <p>Si bien existen marcos legislativos relacionados, (que pueden no ser suficientes o necesitar mejoras),  hace tiempo se llevan a cabo diversas acciones referidas a la toma de consciencia en la transformación de los desechos de aceite en otros tipos de combustibles.</p>
      <p>En varios países las compañías de reciclaje trabajan el contenido y procesan el líquido para convertirlo en el aceite conocido como Biodiesel, que puede ser utilizado como reemplazo de los combustibles tradicionales.</p>
      <p>En Argentina contamos con la Ley 24.051, que define y regula la acción respecto de los diferentes desechos, sus clases, el transporte y los registros de control, y señala las responsabilidades en el manejo de los residuos peligrosos; ese es el caso del aceite y su transformación en biocarburantes para usos múltiples, cuya generación de CO2 (dióxido de carbono)  es menor que en el caso de los combustibles fósiles (derivados del petróleo), dada su relación con el avance del cambio climático.</p>
      <h4>La decisión de cuidar el planeta es una inversión a futuro</h4>
      <p>Elegir desechar el aceite usado de una manera sustentable y sin contaminación es un primer gran paso hacia un futuro más saludable.</p>
      <p>Es importante delegar el retiro y transporte de los desechos tóxicos y peligrosos a empresas habilitadas e idóneas que trabajen con sumo cuidado y responsabilidad. Su manipulación incorrecta podría resultar en accidentes y consecuencias indeseadas para el ecosistema.<a href='../sections/servicios.php'>Puedes conocer aquí, cómo es el tratamiento que realizamos en La Victoria.</a></p>
      <p>El cuidado del planeta se relaciona íntimamente con la calidad de vida de las personas y de las generaciones futuras. Y es desde cada pequeño lugar y a través de cada acción, el modo en que contribuimos para construir y habitar un mundo mejor.</p>


    </div>

    

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
                  <input id="correo" type="email" name="email" placeholder="Correo electrónico"><input type="submit"
                    value="Enviar">
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