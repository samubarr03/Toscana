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
            <!--<li><?php echo $logged; ?></li>-->
                      <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle"> <?php echo $logged; ?> </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                      </div>
            

              <!-- Example split danger button -->
            <div class="btn-group">
              <button type="button" class="btn btn-danger">Action</button>
              <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>


          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

      </div>
</div>
</header>