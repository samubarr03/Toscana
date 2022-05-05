<!DOCTYPE html>

<head>
  <br><br><br>
<?php include "includes/header.php";?>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Il nostro TEAM</title>

  <!-- Importa CSS -->
  <link href="css/aos.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-icons.css" rel="stylesheet">
  <link href="css/boxicons.min.css" rel="stylesheet">
  <link href="css/glightbox.min.css" rel="stylesheet">
  <link href="css/remixicon.css" rel="stylesheet">
  <link href="css/swiper-bundle.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <link href="img/toscana.png" rel="icon">

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
#hero h1 {
  margin: 0 0 10px 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 42px;
  color: #011a00;
}
#hero p{
    margin: 0 0 3px 0;
    font-size: 20px;
    color: #000; 
}
#hero .price {
  color: #009970;
  font-size: 200%;
  font-weight: 500;
}
</style>
<body>
        
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center" style="background:url(img/hero_toscana.jpg)">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
    <div class="Percorsi" >
            <div class="card" style="float: left; position:relative ">
            <img src="img/pisatower.jpg" alt="Denim Jeans" style="width:100%">
            <h1>Tour base</h1>
            <p class="price">GRATIS</p>
            <p>Questo percorso include tutte le attrazioni della Toscana, andando a toccare i cardini della Toscana in generale.</p>
            <p><button>Vai subito</button></p>
            </div>

            <div class="card" style="float: left; margin-left:3%;">
            <img src="img/firenzegiotto.webp" alt="Denim Jeans" style="width:100%">
            <h1>Tour master</h1>
            <p class="price">$9.99</p>
            <p>Include la maggior parte delle attrazioni Toscane e vi offrirà un'immersione in maniera approfondita e precisa.</p>
            <p><button>Compra</button></p>
            </div>

            <div class="card" style="float: left; margin-left:3%;">
            <img src="img/collagetoscana.jpg" alt="Denim Jeans" style="float-left:5%; position:center;">
            <h1>Advancend tour</h1>
            <p class="price"><font color="red"><DEL>$19.99</del></font> $14.99</p>
            <p>Questo tour comprende TUTTI i punti di interesse della nostra amata Toscana e vi farà conoscere tuttI i segreti della regione.</p>
            <p><button>Compra</button></p>
            </div>
            <div style="clear: both">
    </div>
  </section><!-- End Hero -->
  <!--  <img src="img/hero_toscana.jpg"> -->
        
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
