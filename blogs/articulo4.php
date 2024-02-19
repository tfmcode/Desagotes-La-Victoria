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
    <div class="container animate__animated animate__fadeInUp">
      <h1>Landfarming: Tratamiento Ambiental</h1>
      <p>El impacto ambiental que provoca la producción petrolífera es notable, pero existe una solución para
        revitalizar los suelos que quedan inutilizados por influencia del derrame de hidrocarburos en las capas
        internas: se llama Landfarming.</p>
      <p>También conocido como tratamiento superficial en tierra, el landfarming es un proceso biológico que utiliza
        microorganismos naturales del suelo (como las bacterias) para eliminar, reducir o transformar las sustancias
        contaminantes. Su propósito es minimizar el riesgo para la salud humana y el medio ambiente.</p>
      <h2>Landfarming, una alternativa que reduce el impacto ambiental.</h2>
      <p>En <a href='../home.php'><strong>Desagotes La Victoria</strong></a> estamos muy interesados en el cuidado y
        protección del medio ambiente, por eso queremos mencionarte los puntos más relevantes de este tratamiento y
        contarte por qué cada vez se está aplicando más en la Argentina y en el mundo:</p>
      <ul>
        <li>Por el bajo costo de su proceso (pues no requiere más que la misma naturaleza).</li>
        <li>La nula presencia posterior de sedimentos o residuos peligrosos derivados.</li>
        <li>La eliminación de un considerable porcentaje de elementos contaminantes.</li>
      </ul>
      <h3>¿Cómo se aplica el Landfarming?</h3>
      <p>El landfarming tiene la particularidad de encontrar la ubicación de las capas de suelo en que se filtró
        material contaminante y trabajar en ellas a través del descubrimiento de la microflora natural (hongos,
        bacterias, o levaduras), procediendo así a su estimulación.</p>
      <p>Para que el tratamiento sea efectivo deben estar presentes determinadas condiciones de temperatura y humedad,
        lo mismo que una adecuada cantidad de nutrientes y microorganismos. El proceso se lleva a cabo por medio de la
        remoción del terreno con arado, el agregado de fertilizantes, y riego superficial.</p>
      <h3>¿Cuánto tiempo necesita este tratamiento?</h3>
      <p>El proceso de landfarming puede llevar desde algunas pocas semanas hasta varios meses. En este sentido,
        <strong>el tratamiento durará más si las concentraciones de los contaminantes son muy altas</strong>, si no son
        adecuadas las condiciones y hay que adecuar el medio (temperatura/humedad), o si los residuos contienen ciertas
        sustancias que son resistentes a los microorganismos.</p>
      <p>En el caso de una demora mayor, la situación es la siguiente: durante los primeros 4 meses tras una adecuación
        del medio la degradación es más veloz; después <strong>el ritmo disminuye ligeramente luego de la desaparición
          de los hidrocarburos más ligeros</strong>, frente a los más aromáticos, los que mantienen su fuerte presencia
        por más tiempo.</p>
      <h3>¿Es seguro el Landfarming?</h3>
      <p>Es una técnica muy segura teniendo en cuenta que los microorganismos que intervienen en la biorrecuperación
        <strong>son presencias naturales en zonas como parques y jardines</strong>. Por otro lado, la cantidad incluida
        de microbios en el área a tratar es solamente la necesaria, con la mirada solamente puesta en inducir la
        actividad biológica natural.</p>
      <h3>¿Por qué elegir el Landfarming para tu empresa o industria?</h3>
      <p>En condiciones adecuadas, este proceso no genera peligro de contaminación posterior, y puede llevarse a cabo en
        contextos climáticos diferentes, sin perjuicio del éxito de su aplicación.</p>
      <p>Decimos que los resultados <strong>no generan peligro porque tomamos en cuenta que los microorganismos se
          aprovechan y nutren de los elementos nocivos</strong> para procurar energía y alimento, generando a modo de
        cambio agua y gases, como por ejemplo el dióxido de carbono.</p>
      <p>Elegí la sustentabilidad e invertí en un mejor futuro. La elección de nuevos métodos y herramientas para la
        limpieza y tratamiento con conciencia, es un paso para mejorar la calidad de vida de todos y cada uno de quienes
        habitamos este planeta. <a
          href='https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores.'>Consulta
          aquí qué tipo de servicio de recolección y disposición final de residuos es el más conveniente para tu
          industria o comercio.</a></p>
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