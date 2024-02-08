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
    .content_title {
      text-align: center;
      max-width: 600px;
      /* Ajusta el ancho máximo según sea necesario */
      margin: 0 auto;
      /* Centra el párrafo horizontalmente */
      font-size: 16px;
      /* Tamaño de fuente ajustado */
      line-height: 1.5;
      /* Altura de línea ajustada para una mejor legibilidad */
    }

    .title1 {
      text-align: center;
      /* Centra el texto horizontalmente */
      margin-top: 0;
      /* Elimina el margen superior predeterminado */
      padding: 20px 0;
    }

    .number {
      color: #3498db;
      /* Color de texto blanco */
      border-radius: 50%;
      /* Bordes redondeados para formar un círculo */
      width: 60px;
      /* Ancho del contenedor del número (ajusta según sea necesario) */
      height: 60px;
      /* Altura del contenedor del número (ajusta según sea necesario) */
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 30px;
      /* Tamaño de fuente del número (ajusta según sea necesario) */
      font-weight: bold;
      /* Texto en negrita */
      margin: 0;
      /* Centrar horizontalmente */
    }
    @media (max-width: 768px) {
            .cards {
                display: flex;
                flex-direction: column;
                align-items: center;
        }
      }


      * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .boxcontact {
      text-align: center;
      width: 18%;
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
    
    @media (max-width: 990px) {
    .card3 {
      flex-direction: column; /* Cambia la dirección de las tarjetas a columnas en dispositivos más pequeños */
      align-items: center; /* Centra las tarjetas horizontalmente */
      gap: 15px; /* Agrega un espacio entre las tarjetas */
    }
  }

  @media (max-width: 575px) {
    .card {
      width: 100%; /* Hace que las tarjetas ocupen todo el ancho de la pantalla en dispositivos pequeños */
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
    <!-- <h1 style="margin-left: 3%;">Blog</h1>
    <div
      style="display: flex; align-items: center; text-align: center; justify-content: center; flex-direction: column; height: 100vh;">
      <h4>POSTEOS RECIENTES</h4>
      <h2 style="font-weight: bold;">Tips de Mr.Destapador</h2>
    </div> -->

    <div class="container">
      <div style="display: flex; flex-direction: column; align-items: center; padding-bottom: 20px;">
        <p class="text-primary" style="letter-spacing: 0.3em;">POSTEOS RECIENTES: </p>
        <h1>Tips De Mr. Destapador</h1>
      </div>
      <div style="    display: flex; flex-direction: column;   justify-content: space-evenly;">
        <div class="card3" style="display: flex; justify-content: space-evenly; margin-bottom: 25px;">
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Beneficios de la Limpieza adecuada de tanques de transporte</h5>
              <a href="../blogs/articulo13.php" style="color: #0d6efd;">Ver más</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Beneficios de limpiar los tanques de almacenamiento de hidrocarburos</h5>
              <a href="../blogs/articulo2.php" style="color: #0d6efd;">Ver más</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Principales residuos de la actividad agroalimentaria</h5>
              <a href="../blogs/articulo3.php" style="color: #0d6efd;">Ver más</a>
            </div>
          </div>
        </div>
        <div class="card3" style="display: flex; justify-content: space-evenly; margin-bottom: 25px;">
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Todos hablan de Landfarming ¿De qué se trata?</h5>
              <a href="../blogs/articulo4.php" style="color: #0d6efd;">Ver más</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> 9 preguntas más frecuentes sobre camiones atmosféricos </h5>
              <a href="../blogs/articulo5.php" style="color: #0d6efd;">Ver más</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">4 fallas más frecuentes en la cañerías industriales (y cómo detectarlas)</h5>
              <a href="../blogs/articulo6.php" style="color: #0d6efd;">Ver más</a>
            </div>
          </div>
        </div>
        <div class="card3" style="display: flex; justify-content: space-evenly; margin-bottom: 25px;">
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Atención: 4 síntomas del mal funcionamiento cloacal</h5>
              <a href="../blogs/articulo7.php" style="color: #0d6efd;">Ver más</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> Beneficios de la Limpieza Profunda en Cámaras Sépticas y Decantadoras de Barros
              </h5>
              <a href="../blogs/articulo8.php" style="color: #0d6efd;">Ver más</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Generación de residuos: ¿Cuánto contaminamos?</h5>
              <a href="../blogs/articulo9.php" style="color: #0d6efd;">Ver más</a>
            </div>
          </div>
        </div>
        <div class="card3" style="display: flex; justify-content: space-evenly; margin-bottom: 25px;">
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Las falencias más comunes en el funcionamiento de la cañerías </h5>
              <a href="../blogs/articulo10.php" style="color: #0d6efd;">Ver más</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> Beneficios de la atención preventiva a los problemas de cañerías</h5>
              <a href="../blogs/articulo11.php" style="color: #0d6efd;">Ver más</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Daño de los residuos acumulados en cámaras sépticas</h5>
              <a href="../blogs/articulo12.php" style="color: #0d6efd;">Ver más</a>
            </div>
          </div>
        </div>
        <div class="card3" style="display: flex; justify-content: space-evenly; margin-bottom: 25px;">
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">¿Qué hacer con el aceite usado de tu industria?</h5>
              <a href="../blogs/articulo1.php" style="color: #0d6efd;">Ver más</a>
            </div>
          </div>
        </div>
      </div>
    </div>
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
            <p>
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
                <form action="blog.php" method="post" role="form"
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