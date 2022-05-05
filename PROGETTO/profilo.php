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
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Toscana Tour</title>

  <?php include "style.css"; ?>

</head>

<body>

  <?php 
    
    include "includes/header.php"; 
  ?>

    <div class="profilo">
        <br>
        <div class="titolo">
        <center><h1><b>INFORMAZIONI UTENTE</b></h1></center>
        </div>
        <div class="fotoprofilo">  
        </div>
        <!--<input name="nome" ID="abc" type="text" placeholder="Inserire nome"<br>
        <input name="cognome" ID="abc" type="text" placeholder="Inserire cognome"<br>
        <input name="email" ID="abc" type="email" placeholder="esempio@mail.com"<br><br>
        <label for="sesso">Seleziona il sesso:</label>
        <input type="radio" name="sesso" value="Maschio"/><label>M</label> 
        <input type="radio" name="sesso" value="Femmina"/><label>F</label> 
        <br><input ID="invia" type="submit" value="Invia"><br>⠀-->
    <div class="container">
			  <div class="wrapper">
				<div class="title"><span>Utente</span></div>
				  <div class="row">
					<i class="fas fa-user"></i>
					<h2>⠀Nome:</h2><div class="infoscritte"><input name="nome" ID="abc" type="text" value=<?php echo $row['nome']; ?>></div>
				  </div>
				  <div class="row">
					<i class="fas fa-lock"></i>
					<h2>⠀Cognome:</h2><div class="infoscritte"><input name="cognome" ID="abc" type="text" value=<?php echo $row['cognome']; ?>></div>
				  </div>
                  <div class="row">
					<i class="fas fa-user"></i>
					<h2>⠀Email:</h2><div class="infoscritte"><input name="email" ID="abc" type="text" value=<?php echo $row['email']; ?> readonly ></div>
				  </div>
                  <div class="row">
					<i class="fas fa-user"></i>
					<h2>⠀Telefono:</h2><div class="infoscritte"><input name="telefono" ID="abc" type="text" value=<?php echo $row['tel']; ?>></div><br>
				  
                </div>
                <a href="logout.php">Logout</a>
				  <div class="pass"><a href="#">Forgot password?</a></div>
				  <div class="row button">
					<input type="submit" value="Login">
				  </div>
				  <div class="signup-link">Non ti si ancora registato? <a href="registrati.html">Registrati</a></div>
				  <div class="signup-link"> <a href="index.php">Torna alla home</a></div>
				</form>
			  </div>
			</div>
    
        <!-- Footer -->
    <footer class="page-footer font-small" style="background-color: #ff8733;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2" style=padding-top:1%;><center><img src="img/logo_small_icon_only_inverted.png"  width="128" height="128" ></center> </div>
                <div class="col-sm" style=padding-top:2%;><center><a href="#" class="buttonfooterb">About our food</a></center></div>
                <div class="col-sm" style=padding-top:2%;><center><a href="#" class="buttonfooter">Aiuto</a></center></div>
                <div class="col-sm" style=padding-top:2%;><center><a href="#" class="buttonfooter">Feedback</a></center></div>
                <div class="col-sm" style=padding-top:2%;><center><a href="#" class="buttonfooterb">Seguici sui social</a></center></div>
                <div class="col-sm-2" style=padding-top:1%;><center>⠀</center> </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="#">SCV.com</a>
        </div>
    </footer>
    </body>
    <script src="js/bootstrap.bundle.min.js"></script>
    </html>