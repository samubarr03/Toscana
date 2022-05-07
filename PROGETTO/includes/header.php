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




<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="index.php"><span>ToscanaTour</span></a></h1>
        </div>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link active" href="index.php">Home</a></li>
            <li><a class="nav-link" href="tour.php">Tour</a></li>
            <li><a class="nav-link" href="team.php">Team</a></li>
            <li><a class="nav-link" href="contatti.php">Contatti</a></li>
            <li><?php echo $logged; ?></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

      </div>
</div>
  </header>