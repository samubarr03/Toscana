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

<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
			
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    <?php include "includes/css.html";?>

  <title>Toscana Tour</title>

  

</head>

<body>

<?php 
    
    include "includes/header.php"; 
  ?>

  <div class="profilo">
    <div class="titolo">
      <center><h1><b>INFORMAZIONI UTENTE</b></h1></center>
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