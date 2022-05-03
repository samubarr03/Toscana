<?php
	session_start();

	$servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'restaurant');

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

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
	else{
		echo '<script>alert("Email o password errate")</script>';
		header("location: login.html");

	}
	

?>	
<!--
<html>
	<head>
	<link rel="stylesheet" href="def.css">	
		<title></title>
	</head>
	<body class="registrato">
		<h1 class="titolino"> Email o password errati  </h1>
		
		<a href="login.html"> <button class="sbagliato" >LOGIN</button></a>
	</body>
</html>	-->