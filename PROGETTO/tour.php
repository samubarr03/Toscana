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
<style>
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 400px;
    margin: auto;
    text-align: center;
    font-family: arial;
    background-color: #dfffde;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 1rem;
  }

  .price {
    color: #009970;
    font-size: 200%;
  }

  .card button {
    border: none;
    outline: 0;
    padding: 12px;
    color: white;
    background-color: #009970;
    text-align: center;
    cursor: pointer;
    width: 60%;
    font-size: 18px;
  }

  .card button:hover {
    opacity: 0.7;
  }
  #percorsi h1 {
    margin: 0 0 10px 0;
    font-size: 48px;
    font-weight: 700;
    line-height: 42px;
    color: #011a00;
  }
  #percorsi p{
      margin: 0 0 3px 0;
      font-size: 20px;
      color: #000; 
  }
  #percorsi .price {
    color: #009970;
    font-size: 200%;
    font-weight: 500;
  }
</style>

<body>

  <?php include "includes/header.php";?>

  <section id="hero" class="d-flex align-items-center" style="background:url(img/hero_toscana.jpg)">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>TOUR</h1>
      <h2>I migliori percorsi e luoghi da visitare della Toscana</h2>
      <!--<a href="" class="btn-get-started">ACCEDI</a>-->
    </div>
  </section>

  <main id="main">
    
  <?php include "includes/clienti.html";?>
    <br>
  <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200" style="background:#fff">
    <div class="Percorsi" >
    <a href="percorsi.php">
      <div class="card" style="float: left; position:relative ">
        <img src="img/pisatower.jpg" style="width:100%; border-radius:1.1rem;">
        <h1>Tour base</h1>
          <p class="price">GRATIS</p>
          <p>Questo percorso include tutte le attrazioni della Toscana, andando a toccare i cardini della Toscana in generale.</p>
          <p><a href="percorsi.php"><button>Vai subito</button></a></p>
      </div>
      </a>
      <a href="contatti.php">
      <div class="card" style="float: left; margin-left:3%;">
        <img src="img/firenzegiotto.webp" style="width:100%; border-radius:1.1rem;">
        <h1>Tour master</h1>
          <p class="price">$9.99</p>
          <p>Il Tour master include una guida delle attrazioni che si vogliono visitare, e va concordata con gli organizzatori. [VERSIONE BETA]</p>
          <p><button>Acquista</button></p>
      </div>
      </a>
      <div style="clear: both">
      </div>
    </div>
  </div>
  <br>
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