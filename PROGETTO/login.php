<?php
	session_start();

    include "data.php";
	$email = $_POST["email"];
	$password = hash('sha256', $_POST["password"]);
		
	$query = "SELECT * FROM utente WHERE email='".$email."' AND password='".$password."' LIMIT 1";
	$results = mysqli_query($conn, $query);


	if (mysqli_num_rows($results) == 1) {
		$row = $results -> fetch_assoc();
		$_SESSION['email'] = $email;
		$_SESSION['nome'] = $row["nome"];
		header("location: index.php");
	}	

	

?>	

<html>
	<head>
	<link rel="stylesheet" href="style.css">
		<title>Password errata</title>
	</head>
	<body class="registrato">
		<!--<h1 class="titolino"> Email o password errati  </h1>
		
		<a href="login.html"> <button class="sbagliato">LOGIN</button></a>-->





		<div class="container">
			  <div class="wrapper">
				<div class="title"><span>Email o password errati</span></div>
				  <div class="row">
				  </div>
				  <div class="row">
				  </div>
				  <center>
				  <div class="signup-link"> <a href="login.html">Accedi</a></div>
				  <div class="signup-link">Non ti si ancora registato? <a href="registrati.html">Registrati</a></div>
				  <div class="signup-link"> <a href="index.php">Torna alla home</a></div>
				</form>
			  </div>
			</div>
	</body>
</html>