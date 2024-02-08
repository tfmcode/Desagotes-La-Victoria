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
    <h1>Las falencias más comunes en el funcionamiento de la cañerías</h1>

<p>¿Notaste que últimamente las cañerías de tu comercio o industria presentan inconvenientes en su funcionamiento? La correcta limpieza es un tema de vital importancia, teniendo en cuenta que una obstrucción puede causar serios problemas.</p>

<p>Sabemos que en muchas ocasiones, la acumulación de grasa, tierra y otros residuos pueden ser la causa de inconvenientes que complican el funcionamiento normal. A menudo se recurre a la utilización de químicos agresivos para resolver estos problemas, lo que puede generar consecuencias negativas para la salud y el medio ambiente.</p>

<p>Es preciso recordar que el uso irregular de estos productos para terminar con la falla puede ser peligroso para la salud; es por eso que te recomendamos que siempre acudas a expertos.</p>

<h4>La importancia de la planificación:</h4>

<p>Además de las situaciones mencionadas, es importante destacar que la obstrucción en las cañerías puede ser un indicador de otros fallos en la red de saneamiento, como la acumulación de sedimentos en las tuberías o la necesidad de reemplazar algunas piezas del sistema. Al acudir a expertos, no solo se resuelve el problema inmediato, sino que también se pueden detectar y prevenir futuros inconvenientes, lo cual puede ahorrar tiempo y dinero a largo plazo.</p>

<p>La amplia experiencia de <a href='../home.php'><strong>La Victoria</strong></a> nos permite conocer cuáles son los inconvenientes que pueden derivar del uso inadecuado de esta clase de químicos.</p>

<h4>A continuación te contamos las derivaciones de una decisión equivocada para resolver un mal funcionamiento u obstrucción, que llevarían severo daño al sistema, y un costo financiero innecesario.</h4>

<ol>
    <li>Muchos productos para destapación contienen ácidos corrosivos que pueden dañar la estructura. Ello puede resultar en fugas y otros problemas en el sistema de saneamiento.</li>
    <li>La utilización de productos agresivos puede generar gases tóxicos que pueden generar irritación en la piel y las mucosas.</li>
    <li>Esta clase de productos pueden generar un impacto negativo en el espacio que habitamos, contaminando el agua y el suelo.</li>
</ol>

<p>Nuestra prioridad es ofrecer soluciones seguras y efectivas para nuestros clientes, cuidando al mismo tiempo el medioambiente. Utilizamos técnicas y equipos de última generación para resolver todo tipo de problemas de obstrucción sin impactar en las tuberías ni el entorno. Podés encontrar más información disponible de los servicios de La Victoria en <a href='../sections/servicios.php'><strong>nuestra página web.</strong></a></p>

<p>Otro punto a tener en cuenta es que la falla y excesiva suciedad del desagüe pueden afectar la calidad del agua potable. Si las tuberías están corroídas, es posible que contaminen el agua. El mantenimiento preventivo puede garantizar que estén limpias y en buen estado, lo que asegurará la calidad del agua que se consume.</p>

<p>En este sentido, es importante contar con una empresa especializada que ofrezca soluciones efectivas y seguras para resolver estos problemas sin dañar el entorno. Contamos con los equipos y la experiencia necesaria para realizar destapaciones sin necesidad de utilizar herramientas nocivas para el medioambiente.</p>

<p>Si estás experimentando problemas de obstrucción como los señalados, no dudes en contactarnos para conseguir una solución rápida y eficiente. <a>Confiá en Destapaciones La Victoria y pedí un presupuesto que se ajuste a tus necesidades.</a></p>
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
                        <div class="row" style="display: flex; justify-content: space-around; align-items: flex-start;">
                            <div class="col-lg-6">
                                <form action="articulo10.php" method="post" role="form"
                                    style="display: flex; align-items: center;   justify-content: flex-start;">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Su correo electrónico" required>
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