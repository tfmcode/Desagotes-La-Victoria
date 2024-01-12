<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .blog-card {
            width: 300px;
            margin: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
        }

        .blog-card img {
            width: 100%;
            height: auto;
        }

        .blog-card .content {
            padding: 15px;
        }

        .blog-card h3 {
            margin-top: 0;
        }

        .read-more {
            color: #007bff;
            cursor: pointer;
        }

        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1> -->
        <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="index.php">Inicio</a></li>
          <li><a href="./sections/nosotros.php">Nosotros</a></li>
          <li><a href="./sections/servicios.php">Servicios</a></li>
          <li><a href="#proceso">Trabajos</a></li>
          <li><a href="./sections/contacto.php">Contacto</a></li>
          <li><a href="./sections/blog.php">Blogs</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

<div class="blog-card">
    <img src="ruta_de_la_imagen.jpg" alt="Imagen del blog">
    <div class="content">
        <h3>Título Temático</h3>
        <p>
            Aquí va tu párrafo inicial. Puedes introducir el contenido principal de tu blog y luego agregar un enlace "Ver más"
            para que los usuarios puedan expandir y leer el contenido completo.
        </p>
        <p class="hidden">
            Este es el contenido adicional que se mostrará cuando los usuarios hagan clic en "Ver más".
            Puedes agregar más párrafos, imágenes u otros elementos según tus necesidades.
        </p>
        <p class="read-more" onclick="toggleVisibility(this)">Ver más</p>
    </div>
</div>
<!-- ======= Footer ======= -->
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

<div class="footer-newsletter">
  <div class="container">
    <!-- <div class="row">
      <div class="col-lg-6">
        <h4>Our Newsletter</h4>
        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
      </div>
      <div class="col-lg-6">
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>
    </div> -->
  </div>
</div>

<div class="footer-top">
  <div class="container">
    <div class="row">



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
          <img src="assets/img/logo-grande.png" class="img-fluid">
        </p>
      </div>


      <div class="col-lg-4 col-md-4 footer-info">
        <h3>Nosotros</h3>
        <p>Servicios La Victoria es una empresa familiar fundada en el año 1950.<br><br>Desde entonces, el trabajo en equipo, liderazgo en conocimiento, atención personalizada, seguridad y salud de nuestrta gente, han sido nuestras principales fortalezas.</p>
        <div class="social-links mt-3">
          <a href="https://www.facebook.com/DesagotesLaVictoria" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/destapacioneslavictoria/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/company/desagotes-la-victoria/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="copyright">
    &copy; <strong><span>Servicios La Victoria</span></strong></div>
  <div class="credits">
    Marketing Digital <a href="https://www.adwaysolutions.com/">Adway Solutions</a>
  </div>
</div>
</footer><!-- End Footer -->

<script>
    function toggleVisibility(element) {
        const hiddenContent = element.parentNode.querySelector('.hidden');
        hiddenContent.style.display = (hiddenContent.style.display === 'none' || hiddenContent.style.display === '') ? 'block' : 'none';
    }
</script>

</body>
</html>