<?php
 
  include "data.php";


  $admin=0;


  if(!isset($_SESSION['email'])){
	//
		$logged = '<a class="nav-link" href="login.html">Accedi </a> ';

	}
	else{
		$logged = '<a href="profilo.php">Profilo </a>';
        if($_SESSION['email']=="admin@gmail.com"){
            $admin=1;    
        }

	}
    

?>

<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-10 footer-contact" style="text-align: left;">
            <h3>ToscanaTour</h3>
            <p>
              16153 Genova Italia<br>
              P.IVA 4465845652
              <br><br>
              <strong>Telefono:</strong> +39 391 123 45 67<br>
              <strong>Email:</strong> daniele.sacco.2003@calvino.edu.it<br>
              <strong>Email:</strong> samuele.barrago.2003@calvino.edu.it<br>
              <strong>Email:</strong> leonardo.cusa.2003@calvino.edu.it<br>
            </p>
          </div>

          <div class="col-lg-6 col-md-10 footer-links" style="text-align: left;">
            <h4>Link Utili</h4>
            <ul>
              <li><i class="bi bi-laptop"></i> <a href="index.php"> Home</a></li>
              <li><i class="bi bi-binoculars"></i> <a href="tour.php"> Tour</a></li>
              <!--<li><i class="bi bi-person"></i> <a href="login.php"> Accedi</a></li>-->
              <li><i class="bi bi-person"></i><?php echo $logged; ?></li>
              <li><i class="bi bi-shield-shaded"></i> <a href="https://protezionedatipersonali.it/privacy-by-design-e-by-default"> Privacy policy</a></li>
              <li><i class="bi bi-lock"></i> <a href="https://www.articolo9dellacostituzione.it/index.php?page=informativa-sui-cookie"> Cookies</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
    </div>
  </footer>



<!--
  libreria icone bootstrap: 
  https://icons.getbootstrap.com/icons/currency-euro/