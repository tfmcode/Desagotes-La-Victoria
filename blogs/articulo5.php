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
    <h1>Las 9 preguntas más frecuentes sobre camiones atmosféricos</h1>

        <p>Muchas personas buscan respuestas en Google sobre qué son, para qué se utilizan, cuáles son los diferentes tipos y cómo funcionan los camiones atmosféricos.</p>
        <p>Incluso, <strong>muchos usuarios indagan sobre su problema de cañerías en su casa o empresa</strong> sin saber que lo que están necesitando en realidad es un servicio en destapación o desobstrucción.</p>
        <p>Desde <a href='../home.php'>La Victoria Destapaciones</a> recopilamos algunas de las búsquedas más frecuentes sobre camiones atmosféricos y simplificamos las respuestas de forma que podamos comprenderlo de un modo más sencillo.</p>
        <h3>9 preguntas que los usuarios más hacen en Google sobre camiones atmosféricos</h3>

        <ol>
            <li>
                <strong>¿Qué es y para qué sirve un camión atmosférico?</strong>
                <p>Los camiones atmosféricos pueden almacenar de manera temporal, grandes cantidades de líquidos residuales, luego de realizado el desagote en una casa particular, empresa o industria. Las condiciones internas de los camiones permiten evitar la descomposición del material, por su diferente naturaleza.</p>
            </li>
            <li>
                <strong>¿Cuál es la diferencia entre un camión atmosférico y un camión desobstructor de cañerías?</strong>
                <p>La principal diferencia reside en las tareas que cada uno de los camiones cumple en su servicio; en el caso del desobstructor, se utiliza para destapar cañerías obstruidas utilizando un sistema de agua a presión. Por otra parte, el camión atmosférico realiza tareas de succión y transporte de residuos líquidos.</p>
            </li>
            <li>
                <strong>¿Cómo se realizan las tareas de desagote?</strong>
                <p>El desagote se produce por la extracción de los líquidos a través de la succión. Estos tanques se posicionan de manera horizontal; desplegando mangueras plásticas con uniones reforzadas para realizar la extracción. El tipo de presión dentro de un camión es similar a la presión atmosférica del espacio en que se encuentran.</p>
            </li>
            <li>
                <strong>¿Cómo funcionan los camiones desobstructores?</strong>
                <p>Son camiones con equipos para limpieza y mantenimiento de cañerías y sumideros, que operan a través de un sistema de presión que expulsa agua a razón promedio de 150 a 180 LPM (litros por minuto). La atención del tratamiento se enfoca en cañerías que van desde los 110 mm hasta 400 mm, y redes con extensiones lineales de hasta 150 metros de longitud.</p>
            </li>
            <li>
                <strong>¿Cuándo se necesita un camión desobstructor?</strong>
                <p>Muchas veces habrás visto las bocas de tormenta cubiertas de residuos, situación que origina el anegamiento de las calles y la interrupción de la circulación normal de vehículos. A la hora de despejar las bocas de tormenta, los camiones desobstructores trabajan en la limpieza de sumideros. El objetivo es regularizar el tránsito en las zonas anegadas por la tormenta.</p>
            </li>
            <li>
                <strong>Motivos por los que debes realizar una limpieza asidua de cañerías</strong>
                <p>Ya sea a partir de los desperdicios generados en tu casa, como en las que se presentan a través del funcionamiento en las industrias, la acción de desechos sobre los espacios de cañerías pueden derivar en la necesidad de acudir a un servicio de desagote o desobstrucción.</p>
                <ul>
                    <li>La limpieza periódica genera mejor funcionamiento de las cañerías.</li>
                    <li>El tratamiento produce mayor duración de la limpieza sin daño a las tuberías.</li>
                    <li>La aparición de olores desagradables disminuye.</li>
                    <li>El mantenimiento adecuado evita la formación de fugas.</li>
                    <li>El drenaje es más eficiente y rápido.</li>
                </ul>
            </li>
            <li>
                <strong>¿Por qué se producen obstrucciones en las cañerías hogareñas o de pequeñas empresas?</strong>
                <p>La obstrucción del paso de agua se forma por acumulación de desechos comunes como jabón, papel, cabello y dentífrico, por ejemplo. Estos elementos que impiden el paso normal del agua forman una masa sólida, y pueden generar un desborde.</p>
            </li>
            <li>
                <strong>¿Por qué se debe contratar un servicio especializado de destape?</strong>
                <p>La manipulación de las herramientas incluye el manejo de mangueras de alta presión que limpian los conductos a descomprimir. Los operarios trabajan con un protocolo de higiene y seguridad, y es muy importante tener en cuenta ello a fin de evitar accidentes.</p>
            </li>
            <li>
                <strong>¿Qué provoca el mal tratamiento de aguas cloacales?</strong>
                <p>A las aguas cloacales, también se les conoce como aguas residuales, aguas servidas o aguas negras. Estos términos hacen referencia a cómo queda el agua luego de la intervención humana (que altera su composición debido a los desechos orgánicos y químicos). </p>
                <p>El tratamiento inadecuado de las aguas negras puede generar un grave problema ambiental, pero también provocar enfermedades en el ser humano, además de transformaciones severas al ecosistema debido a que se componen de sustancias orgánicas y minerales que vienen de la materia fecal y otros desechos.</p>
            </li>
        </ol>

        <p>En La Victoria Destapaciones tenemos presente una conciencia ecológica a la hora de cuidar el funcionamiento natural de las cañerías, y la posterior eliminación de los desechos de forma correcta. Es por eso que el resultado del desagote tiene que ser destinado a las plantas de tratamiento habilitadas. <a href="https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores.">Consultá ahora por los servicios de desagotes y destapaciones que proporciona La Victoria.</a></p>

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
                                <form action="articulo5.php" method="post" role="form"
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