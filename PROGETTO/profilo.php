<?php
session_start();
	if(!isset($_SESSION['email'])){
	    header("location: login.html");
	}
    require_once ('data.php');

    $sql = "SELECT * FROM Utente where email= '".$_SESSION['email']."'";
    
    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
    if(mysqli_num_rows($resultset) > 0)
        {
            $row = mysqli_fetch_array($resultset);
            
        } 
       
?>

<!--DOCTYPE html>

<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
			
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>


  <title>Toscana Tour</title>

  

</head>

<body>


  <div class="profilo">
    <div class="titolo">
      <div class="container">
			  <div class="wrapper">
				  <div class="title"><span>Utente</span></div>
				    <div class="row">
				      <i class="fas fa-user"></i>
					    <h2>⠀Nome:</h2><div class="infoscritte"><input name="nome" ID="abc" type="text" value=<?php echo $row['nome']; ?>>
				    </div>
				    <div class="row">
					  <i class="fas fa-lock"></i>
					  <h2>⠀Cognome:</h2><div class="infoscritte"><input name="cognome" ID="abc" type="text" value=<?php echo $row['cognome']; ?>>
            </div>
            <div class="row">
					    <i class="fas fa-user"></i>
					    <h2>⠀Email:</h2><div class="infoscritte"><input name="email" ID="abc" type="text" value=<?php echo $row['email']; ?> readonly >
				    </div>
            <div class="row">
					    <i class="fas fa-user"></i>
				    	<h2>⠀Telefono:</h2><div class="infoscritte"><input name="telefono" ID="abc" type="text" value=<?php echo $row['tel']; ?>><br>
            </div>
            <a href="logout.php">Logout</a>
				    <div class="pass"><a href="#">Forgot password?</a></div>
				    <div class="row button">
					    <input type="submit" value="Login">
				    </div>
				    <div class="signup-link">Non ti si ancora registato? <a href="registrati.html">Registrati</a></div>
				    <div class="signup-link"> <a href="index.php">Torna alla home</a></div>
			    </div>
			  </div>
      </div> 
    </div>
      </div>  

    <?php include "includes/footer.html";?>  

    </body>

    <!-- Importa JS-->
  <script src="js/purecounter.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/glightbox.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/validate.js"></script>
  <script src="js/main.js"></script>

</html>

















<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Toscana Tour</title>

   <?php include "includes/css.html"; ?>  

</head>

<body>

<?php 

    include "includes/header.php"; 
  ?>

<br><br><br>
<hr>

<div class="container">
    <div class="main-body">
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://termoidraulicabassini.it/wp-content/uploads/2015/12/utente.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>John Doe</h4>
                      <p class="text-secondary mb-1">Full Stack Developer</p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                      <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button>
                    </div>
                  </div>
                </div>
              </div>
          
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input name="cognome" ID="abc" type="text" value=<?php echo $row['nome']; ?>>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Cognome</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input name="cognome" ID="abc" type="text" value=<?php echo $row['cognome']; ?>>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input name="email" ID="abc" type="text" value=<?php echo $row['email']; ?> readonly >
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (320) 380-4539
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Bay Area, San Francisco, CA
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                    </div>
                  </div>
                </div>
              </div>

            
                



            </div>
          </div>

        </div>
    </div>

<!--
<div class="profilo">
    <div class="titolo">
      <div class="container">
			  <div class="wrapper">
				  <div class="title"><span>Utente</span></div>
				    <div class="row">
				      <i class="fas fa-user"></i>
					    <h2>⠀Nome:</h2><div class="infoscritte"><input name="nome" ID="abc" type="text" value=<?php echo $row['nome']; ?>>
				    </div>
				    <div class="row">
					  <i class="fas fa-lock"></i>
					  <h2>⠀Cognome:</h2><div class="infoscritte"><input name="cognome" ID="abc" type="text" value=<?php echo $row['cognome']; ?>>
            </div>
            <div class="row">
					    <i class="fas fa-user"></i>
					    <h2>⠀Email:</h2><div class="infoscritte"><input name="email" ID="abc" type="text" value=<?php echo $row['email']; ?> readonly >
				    </div>
            <div class="row">
					    <i class="fas fa-user"></i>
				    	<h2>⠀Telefono:</h2><div class="infoscritte"><input name="telefono" ID="abc" type="text" value=<?php echo $row['tel']; ?>><br>
            </div>
            <a href="logout.php">Logout</a>
				    <div class="pass"><a href="#">Forgot password?</a></div>
				    <div class="row button">
					    <input type="submit" value="Login">
				    </div>
				    <div class="signup-link">Non ti si ancora registato? <a href="registrati.html">Registrati</a></div>
				    <div class="signup-link"> <a href="index.php">Torna alla home</a></div>
			    </div>
			  </div>
      </div> 
    </div>
      </div>  -->

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