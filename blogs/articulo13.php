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
    <h1>Beneficios de la limpieza adecuada de tanques de transporte</h1>
    <p>¿Sabías que el cuidado de los tanques de transporte puede maximizar el rendimiento de tu empresa? Una simple limpieza de las cisternas de almacenamiento puede marcar la diferencia en la eficiencia de tus equipos. En <a href='../home.php'><strong>La Victoria</strong></a> entendemos la importancia de mantener las herramientas de trabajo en óptimas condiciones para un desempeño excepcional. Aquí te contamos cómo nuestras soluciones pueden potenciar tu negocio.</p>
    <p>Nuestros expertos se especializan en la limpieza interior de tanques de cualquier tipo. Tenemos la experiencia y los recursos para adaptar nuestros servicios a tu necesidad.</p>
    <h2>Descubrí la importancia de manejar adecuadamente los residuos peligrosos.</h2>
    <p>Sin las medidas de protección necesarias, estos materiales pueden resultar en una complicación para la salud humana y el medio ambiente. Es crucial tomar medidas responsables respecto de los residuos peligrosos.</p>
    <p>En cada etapa, desde la generación hasta la disposición final, se requiere una gestión eficiente. Almacenar, transportar, tratar y eliminar correctamente estos materiales es fundamental para evitar la contaminación del aire, el agua y el suelo, y salvaguardar la salud de todos.</p>
    <h3>¿Qué tipo de residuo es el aceite?</h3>
    <p>En cuanto a los residuos posibles, el aceite es uno de los más comunes. Utilizado en comercios o pequeñas industrias, requiere del cumplimiento de protocolos certeros en su manipulación.</p>
    <p>Los residuos de aceites de cocina usados se clasifican como residuos no peligrosos; sin embargo, el inadecuado manejo puede generar contaminación en el agua y suelo al ser vertidos sin los cuidados recomendados, y a su vez resultar en daños en las tuberías.</p>
    <h3>Consejo especial de La Victoria</h3>
    <p>Desde <a href='../home.php'><strong>Desagotes La Victoria</strong></a> contribuimos a proteger tu salud y el medio ambiente mediante la gestión responsable de los residuos peligrosos. Juntos podemos crear un futuro más limpio y saludable.</p>
    <p>Imagina tu negocio funcionando de manera eficiente, sin problemas derivados del mal funcionamiento de los tanques. El proceso de higiene sigue los más altos estándares de calidad para brindarte los mejores resultados.</p>
    <p>Nuestro equipo se encarga de gestionar adecuadamente los residuos, garantizando una disposición final responsable y respetuosa con el espacio que habitamos.</p>
    <h3>¡Descubrí por qué limpiar tus tanques de combustible con <a><strong>La Victoria</strong></a> es una decisión inteligente y rentable!</h3>
    <ul>
        <li>Con nuestro proceso de limpieza, los tanques de transporte de tu empresa funcionarán de manera más productiva, limitando la posibilidad de obstrucciones por residuos y la presencia de inconvenientes posteriores.</li>
        <li>Es posible lograr que los elementos que pueden generar deterioro disminuyan considerablemente. Proteger tu inversión es lo más importante para el sostén de tu comercio o industria. Los tanques sucios pueden causar daños e inconvenientes económicos significativos. Al limpiarlos regularmente, evitarás el deterioro prematuro y los costosos desperdicios de combustible.</li>
        <li>La correcta limpieza constituye también el respeto a los requerimientos que garantizan la seguridad en el almacenamiento y transporte. En La Victoria creemos que el cumplimiento de las regulaciones básicas ayudan a evitar riesgos y sanciones innecesarias que solamente te perjudicarán.</li>
        <li>La consideración y el cuidado de los espacios de almacenamiento colabora en disminuir la contaminación de las áreas en las que vivimos, e implica un medio ambiente más sano. Al tomar medidas responsables, demostrás tu compromiso con la sostenibilidad.</li>
        <li>Para cerrar, una última consideración: Los tanques deteriorados pueden causar fugas y derivar en fallas costosas. Al mantener tus tanques en buen estado, reducirás los costos de reparación y minimizarás el riesgo de interrupciones en tu negocio.</li>
    </ul>
    <h3>¿Por qué es conveniente pensar en la prevención?</h3>
    <p>Tus equipos funcionarán con mayor eficiencia, reduciendo la posibilidad de averías costosas. Notarás una mejor respuesta y un menor consumo de combustible, lo que se traducirá en ahorro significativo.</p>
    <p>Asegurate y prevení para mantener las operaciones sin contratiempos. Confía en La Victoria y aprovecha nuestros servicios. Juntos podemos optimizar tus operaciones y llevar tu negocio al siguiente nivel.</p>
    <p>¡No esperes más! <a href="https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores.">Contáctanos hoy mismo</a> y descubrí cómo La Victoria puede potenciar el rendimiento de tus equipos.</p>

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