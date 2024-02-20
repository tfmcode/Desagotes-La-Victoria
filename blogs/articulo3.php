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
      <h1>¿Sabés por qué es tan importante definir cuáles son los principales desechos generados por la producción
        agroalimentaria?</h1>
      <h3>Estos son los tres principales desechos agroalimentarios:</h3>
      <ol>
        <li><strong>Biorresiduos, o desechos biodegradables</strong></li>
        <p>Este tipo de descarte proviene principalmente de las industrias que procesan los alimentos que consumimos. En
          otra proporción importante, son residuos orgánicos habituales de la actividad gastronómica, y también en un
          gran porcentaje; del uso doméstico y comercial.</p>
        <p>Este segmento incluye desperdicios de la preparación de alimentos, restos de verduras y frutas, granos,
          cáscaras de huevo; los restos del café por medio de su preparación, y a esto puede sumarse también las
          diferentes bebidas aromáticas. Los elementos generados en la cría de animales como la gallina, como viruta o
          aserrín, o las excreciones derivadas.</p>
        <p><strong>Tip ambiental de <a href='../index.php'><strong>La Victoria</strong></a>: Una elección práctica para
            casa es el compost.</strong></p>
        <p>El reciclaje de residuos domésticos puede derivar en compost. Si se cuenta con el espacio, es recomendable
          depositar los residuos en un sector especial de la casa y favorecer la descomposición natural, convirtiendo
          los desechos orgánicos en tierra fértil. Esto se logra a través de la acción e interacción de bacterias y
          elementos naturales como son el agua y la luz</p>
        <p>Algunos de los desechos que son aptos para el compostado, son:</p>
        <ul>
          <li>Productos de plantas</li>
          <li>Residuos de origen animal</li>
          <li>Pasto cortado, hojas de árboles</li>
          <li>Papel, madera natural</li>
        </ul>
        <li><strong>Residuos de la industria</strong></li>
        <p>A través de los diferentes pasos que tiene el proceso de producción siempre se obtienen desechos
          industriales. Ya sea durante la fase de fabricación, el consumo, la distribución, la transformación o la
          limpieza del espacio productivo.</p>
        <p>Las principales industrias alimenticias que generan los desechos están relacionados con la
          producción/fraccionado y envase de carnes rojas, pescado, oleaginosas, lácteos, azúcar, pastas, bebidas, y
          otras particularidades nutricionales.</p>
        <p>En relación a otros sectores de la industria, la agroalimentaria se toma como una contaminación de bajo
          impacto, esto quiere decir que los residuos no son peligrosos en sí, pero si no se desechan correctamente
          pueden provocar contaminación, sobre todo del agua y del suelo.</p>
        <p>Consultá ahora por los <a href='../sections/servicios.php'>servicios de desagote y limpieza de trampas de
            grasa y aceite industrial proporcionados por La Victoria.</a></p>
        <p><strong>Un terrible enemigo ambiental llamado plástico</strong></p>
        <p>Entre los muchos objetos con los que lidiamos diariamente podemos ver al plástico como un residuo común
          utilizado en la producción alimentaria, y es normal contarlo como desecho. Sin embargo, existe la posibilidad
          de limitar su uso o utilizar tipos de plásticos productos del reciclaje.</p>
        <p>El cartón es otro de los productos que presentan características que permiten su reciclaje, y que reducen la
          sobreexplotación de los recursos naturales.</p>
        <p>A la lista de residuos de la industria alimentaria se le pueden sumar las latas y el vidrio, que tienen
          posibilidad de reciclado completo múltiples veces. Su manipulación debe realizarse de manera separada de los
          demás residuos.</p>
        <li><strong>Residuos peligrosos</strong></li>
        <p>A la lista de residuos de la industria alimentaria se le pueden sumar las latas y el vidrio, que tienen
          posibilidad de reciclado completo múltiples veces. Su manipulación debe realizarse de manera separada de los
          demás residuos.</p>
        <p><strong>¿Qué se debe tener en cuenta con los residuos peligrosos?</strong></p>
        <p>Uno de los puntos más importantes es la jurisdiccionalidad; si en nuestra zona de residencia no se cuenta con
          empresas que tengan la posibilidad y herramientas necesarias para el traslado adecuado y seguro, es importante
          que el mismo se lleve a cabo con la intervención de compañías que sí cuenten con esa opción.</p>
        <p>Desagotes la Victoria cuenta con las mejores herramientas para ocuparse de los desechos peligrosos de la
          producción de alimentos.<a
            href='https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores.'>Consultá
            tu mejor presupuesto acá.</a></p>
      </ol>

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