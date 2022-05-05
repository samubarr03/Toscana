<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Toscana Tour</title>

  <?php include "includes/css.html"; ?>

</head>

<body>

  <?php 
    session_start();
    include "includes/header.php"; 
  ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="background:url(img/hero_toscana.jpg)">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>HOME</h1>
      <h2>I migliori percorsi e luoghi da visitare della Toscana</h2>
      <a href="tour.php" class="btn-get-started scrollto">VAI AI TOUR</a>
    </div>
  </section><!-- End Hero -->

  <main id="main"><!-- Inizio #main -->
    
  <?php include "includes/clienti.html";?>
   

  </main><!-- Fine #main -->

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