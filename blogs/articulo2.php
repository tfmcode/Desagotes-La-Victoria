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
    <div class="container">
      <h1>Beneficios de limpiar los tanques de almacenamiento de hidrocarburos</h1>
      <p>Si deseas garantizar el correcto almacenamiento, transporte y custodia de las reservas energéticas del país, el
        método más efectivo es realizando una limpieza periódica de los tanques de hidrocarburos.</p>
      <p>De este modo, asegurás su funcionamiento y durabilidad, al mismo tiempo que cuidas de una gran inversión sin
        perder tiempo ni calidad. ¿Sabés si ya es momento de efectuar una limpieza de tus tanques? <a
          href='https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores.'>Consultá
          cuándo sería el momento justo haciendo clic acá.</a></p>
      <h4>4 razones por las que debes limpiar los tanques de hidrocarburos.</h4>
      <ol>
        <li>Solucionan el problema de taponamiento de tuberías por la formación de masas viscosas en el fondo de los
          tanques y la consiguiente reducción de su capacidad.</li>
        <li>Limitan la incidencia negativa en la calidad del combustible a despachar.</li>
        <li>Evitan el deterioro del tanque de transporte y por transición la modificación de las sustancias que
          contiene, situación que podría generar además pérdidas económicas por mayores desperdicios de los esperables y
          emisión extra de gases de efecto invernadero.</li>
        <li>Porque es parte de las exigencias legales de seguridad. Todos los tanques deben ser seguros, herméticos y
          cumplir con todos los controles y accesos determinados por las regulaciones del sistema de almacenamiento y
          comercialización de hidrocarburos.</li>
      </ol>
      <h4>¿Sabías que una limpieza adecuada disminuye el impacto ambiental?</h4>
      <p>Es una instancia en la que todos ganan. La limpieza regular de los tanques, siguiendo la normativa específica,
        disminuye considerablemente el riesgo de contaminación del suelo y del agua. <a
          href='https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores.'>Acá
          te contamos cómo puedes reducir el impacto ambiental desde tu empresa.</a></p>
      <h4>3 modos inteligentes de eliminar los lodos.</h4>
      <p>Los lodos o sobrantes resultan eventualmente en líquidos o gases inflamables, y estos son los modos prácticos
        de deshacerse de ellos:</p>
      <ol>
        <li><strong>Eliminarlos con agua:</strong> El agua elimina el líquido inflamable de un tanque si se vacía y se
          llena el depósito una y otra vez hasta que se logra el descarte por completo.</li>
        <li><strong>Eliminarlos con aire:</strong> Los vapores inflamables se eliminan si se ventila el espacio que los
          contiene mientras en paralelo se ingresa aire ventilando de manera continua por sistema de baja presión</li>
        <li><strong>Eliminarlos con gas inerte:</strong> La acción en la que se inyectan gases como dióxido de carbono o
          nitrógeno significa que se reduce el peligro de incendio en la eliminación de los elementos sobrantes en el
          depósito. </li>
      </ol>
      <h4>¿Cómo se limpia un tanque de hidrocarburos?</h4>
      <p>La limpieza de un tanque de almacenamiento consiste en una fluidificación de los barros depositados en el fondo
        del tanque. Esto se lleva a cabo con la ayuda de personal suficientemente protegido contra los vapores y demás
        sustancias tóxicas.</p>
      <p>Ellos se encargan de extraer los contaminantes con la ayuda de bombas neumáticas para finalmente limpiar y
        micro filtrar el combustible, dejándolo libre de impurezas.</p>
      <h4>Evita aumentar los costos y poner en riesgo el capital.</h4>
      <p>Por la naturaleza propia de los hidrocarburos que se transportan en los tanques y camiones, los contenedores
        ven modificada su estructura y seguridad, lo que deriva en oxidación y aparición posible de microbios que
        afectan la calidad del combustible.</p>
      <p>Esta modificación resulta en un probable aumento de los costos generales planificados y riesgos eventuales de
        contaminación para los empleados durante la manipulación como también para el ambiente que los rodea. Estar
        atento a estos cuidados pueden favorecer los movimientos y presencia de tu empresa.</p>
      <p>En Desagotes La Victoria somos especialistas en limpieza de tanques de combustible y gestión de sus residuos
        peligrosos.<a href='../sections/servicios.php'>Encontrá el presupuesto a la medida de tus necesidades y cuidá tu
          inversión.</a></p>

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
            <div class="row" style="display: flex; justify-content: space-around; align-items: flex-start;">
              <div class="col-lg-6">
                <form action="articulo2.php" method="post" role="form"
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