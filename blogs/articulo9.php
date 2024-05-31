<?php
require_once '../utils/security.php';
$peticion = dataRequest();
createLog('log.txt', $peticion);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
    createLog('log.txt', 'captcha erroneo');
  }
}
?>
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
      <h1>Generación de residuos: ¿Cuánto contaminamos?</h1>

      <p>El origen de los desperdicios urbanos es consecuencia de las actividades que el hombre realiza. Por supuesto,
        esto nos incluye a cada uno de nosotros. En el marco del desarrollo productivo, los derivados, que serían en
        principio imposibles de reutilizar, presentan una serie de posibilidades más que interesantes.</p>

      <p>¿Se te ocurrió alguna vez pensar en la derivación de los desechos y su recolección?</p>

      <p>La disposición de los residuos de cualquier tipo impactan en el estilo de vida de toda la comunidad, más allá
        de cuál sea el comercio o la industria desde la que provienen. La huella de carbono (cada paso que tomas en tus
        elecciones diarias de consumo, y la eliminación de basura) señala tu presencia como generador de esos sobrantes.
        Las decisiones que tomes al respecto harán la diferencia.</p>

      <p>Esas formas de producción y posterior desecho señalan hoy interés en la disminución de la contaminación. Las
        acciones, que ponen el foco en la reducción de esos efectos, son múltiples y específicas. En cada caso, su
        activación se acerca para contrarrestar su influencia, y minimizar las complicaciones.</p>

      <h4>Todos hablan de impacto ambiental y sostenibilidad. ¿De qué se trata en realidad estos términos?</h4>

      <p>El impacto ambiental se define por cada una de las intervenciones que provoca la actividad diaria en el medio
        ambiente. Eso teniendo en cuenta la producción de bienes determinados (entre otras cuestiones), resultantes en
        elementos de contaminación. El más relevante, y en el que <a href='../index.php'><strong>La
            Victoria</strong></a>
        puede ayudarte, se refiere a los hábitos de consumo y la generación de desperdicios.</p>

      <p>De este modo surge la idea de sostenibilidad. Se trata de la aplicación de modernas acciones que reformulan el
        trabajo con los desperdicios, sin modificar el desarrollo productivo y comercial. Además, resuelve situaciones
        de contaminación en el agua y en la tierra, entre otras, que impactan la vida de todos.<a
          href='../sections/trabajos.php'> Acá te contamos algunos de los trabajos que realizamos en La Victoria, en pos
          de reducir el impacto ambiental desde tu empresa.</a></p>

      <h4>La definición de la sostenibilidad: Todo un desafío.</h4>

      <p>Principalmente, la idea de sostenibilidad y su impacto determinante en la calidad de vida implica avance
        económico sin amenaza al ecosistema del que todos formamos parte. La visión principal de este modo de hacer, en
        un adecuado balance ambiental, se resuelve en el cuidado de los recursos, correcta manipulación de los residuos
        peligrosos, la aplicación de medidas de seguridad, y la reutilización de todos aquellos elementos que lo
        permitan.</p>

      <h4>Tip ambiental de La Victoria: Una elección práctica para la vida diaria.</h4>

      <p>Considerando nuestra experiencia, aquí te dejamos una serie de consejos para iniciar el cambio desde tu lugar,
        mientras tienes en cuenta las mejores opciones de traslado de los residuos eventualmente peligrosos. Las
        explicaciones te serán muy útiles, y verás que considerar esto te ayudará a tomar decisiones. Prestar atención a
        este punto será muy útil en pos de modificar hacia el futuro.</p>

      <h4>Consejos para hacer la diferencia:</h4>

      <ul>
        <li>Los utensilios comunes, de plástico descartable, son prácticos en su utilización ocasional. Pero el mismo
          hecho de que solamente puedan ser utilizados en una ocasión los vuelve una idea inestable. Botellas de vidrio,
          y elementos de bambú, como por ejemplo sorbetes, pueden ser una alternativa práctica e inteligente.</li>
        <li>El cambio comienza por casa. Todos conocemos el dicho; aplicarlo en la experiencia cotidiana puede parecer
          complejo, pero es más sencillo de lo que parece. La distribución de los elementos que decidas desechar pueden
          ser convenientemente catalogados. Los recuperadores urbanos te lo agradecerán.</li>
        <li>Reciclar es el punto que sigue. Bolsas de polietileno, frascos o botellas de vidrio, todo ello ayuda a
          resolver en favor de los elementos mencionados, teniendo en cuenta que su reutilización es posible.</li>
        <li>Los paquetes y envoltorios provenientes de una alternativa de reciclado se ha vuelto una interesante opción
          para muchas compañías. Estar atento a los productos que ofrecen es una muy buena idea para colaborar.</li>
      </ul>

      <p><strong>Últimos detalles a tener en cuenta: Definiendo acciones</strong></p>

      <p>La coordinación respecto de los recursos resulta en un cambio en la clasificación de residuos. Las diferentes
        etapas que el sistema ofrece hoy frente al retiro de desechos, con la posibilidad de una nueva instancia de uso,
        es una idea superadora.</p>

      <p>En algunos casos, su resignificación es una perfecta solución. Pero en otros simplemente su traslado
        controlado, con los cuidados respectivos, permite una idea positiva para el medio ambiente. Esos cuidados son
        determinantes para nosotros y para las futuras generaciones, y forman parte de la filosofía de Desagotes La
        Victoria.</p>

      <p>¿Te interesa consultar costos o pedir un presupuesto acorde a las necesidades de tu empresa?
        <a><strong>Escríbenos y cotiza tu servicio en La Victoria.</strong></a>
      </p>

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