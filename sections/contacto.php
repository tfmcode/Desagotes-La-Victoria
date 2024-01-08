<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
<section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" id="consultenos">
      <div class="container">

        <div class="section-title">
          <h2><strong>Consúltenos</strong><br>Respuesta inmediata</h2>
        </div>


        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Dirección</h3>
                  <p>Aguilar 2878<br>Ciudad de Buenos Aires</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>info@desagoteslavictoria.com.ar</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Teléfono</h3>
                  <p>+54 11-4551-5191</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="index.php" method="post" role="form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nombre" class="form-control" id="name" placeholder="Su Nombre" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Su Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="asunto" id="subject" placeholder="Asunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="consulta" rows="5" placeholder="Su Consulta" required></textarea>
              </div>
              <div class="my-3">
                <!-- <div class="loading">Loading</div> -->
                <div class="error-message"></div>
                <!-- <div class="sent-message">Your message has been sent. Thank you!</div> -->
              </div>
              <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
              <div class="text-center">
                <button type="submit" style='color:white; background:blue; border-color:blue; border-radius:6px'>Enviar Consulta</button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.230287108302!2d-58.453161923444796!3d-34.57303915588002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5c35b52a4e5%3A0xb3283a9804044595!2sAguilar%202878%2C%20C1426DTB%20CABA!5e0!3m2!1ses-419!2sar!4v1694650743906!5m2!1ses-419!2sar" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </section><!-- End Map Section -->
</body>
</html>