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
      <h1>IL NOSTRO TEAM</h1>
      <h2>I migliori percorsi e luoghi da visitare della Toscana</h2>
      <a href="tour.php" class="btn-get-started scrollto">VAI AI TOUR</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    
  <?php include "includes/clienti.html";?>



    <section id="team" class="team">
      <div class="container">

        <div class="row">
          <div class="col-lg-8">
            <div class="section-title" data-aos="fade-right">
              <h2>Team</h2>
              <p>Le persone che hanno lavorato e reso possibile questo progetto.</p>
            </div>
          </div>
        
          <div class="col-lg-12">
            <div class="row">

              <!--  SACCO -->
              <div class="col-lg-4">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pic"><img src="img/sacco.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Daniele Sacco</h4>
                    <span>Chief Executive Officer</span>
                    <p>Dalla 5Bii del Calvino, il GOAT</p>
                    <div class="social">
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-snapchat"></i></a>
                    </div>
                  </div>
                </div>
              </div><!--  fine SACCO -->

              <!--  CUSA -->
              <div class="col-lg-4 mt-0 mt-lg-0">
                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                  <div class="pic"><img src="img/cusa.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Leonardo Cusa</h4>
                    <span>Product Manager</span>
                    <p>Dalla 5Bii del Calvino, il GOAT</p>
                    <div class="social">
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-snapchat"></i></a>
                    </div>
                  </div>
                </div>
              </div><!--  fine CUSA -->

              <!--  BARRAGO -->
              <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                  <div class="pic"><img src="img/barrago.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Samuele Barrago</h4>
                    <span>CTO</span>
                    <p>Dalla 5Bii del Calvino, il GOAT</p>
                    <div class="social">
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-snapchat"></i></a>
                    </div>
                  </div>
                </div>
              </div><!--  fine BARRAGO -->

            </div>

          </div>
        </div>

      </div>
    </section>

  </main>

  <?php include "includes/footer.php";?>

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>