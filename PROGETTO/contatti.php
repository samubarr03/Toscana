<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Toscana Tour</title>

  <?php 
    session_start();
    include "includes/css.html"; 
  ?>

</head>

<body>

  <?php include "includes/header.php";?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="background:url(img/hero_toscana.jpg)">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>CONTATTI</h1>
      <h2>I migliori percorsi e luoghi da visitare della Toscana</h2>
      <a href="tour.php" class="btn-get-started scrollto">VAI AI TOUR</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    
  <?php include "includes/clienti.html";?>


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <h2>Contact</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46090.48396662232!2d11.205948538406362!3d43.780014774542096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132a56a680d2d6ad%3A0x93d57917efc72a03!2sFirenze%20FI%2C%20Italia!5e0!3m2!1sit!2sbg!4v1650104284307!5m2!1sit!2sbg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen></iframe>
            <div class="info mt-4">
              <i class="bi bi-geo-alt"></i>
              <h4>Dove siamo:</h4>
              <p>Via Borzoli, 21, 16153 Genova GE</p>
            </div>
            <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>
                    daniele.sacco.2003@calvino.edu.it<br>
                    leonardo.cusa.2003@calvino.edu.it<br>
                    samuele.barrago.2003@calvino.edu.it
                  </p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
                  <i class="bi bi-phone"></i>
                  <h4>Recapito telefonico:</h4>
                  <p>
                    +39 391 123 45 67<br>
                    +39 374 987 00 12<br>
                    +39 345 126 87 19
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include "includes/footer.html";?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <!-- Importa JS-->
  <script src="js/purecounter.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/glightbox.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/validate.js"></script>
  <script src="js/main.js"></script>

</body>
</html>