<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'restaurant');

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";




        $email= $_POST["email"];
        $pw= $_POST["password"];
        $password = hash ( 'sha256' , $_POST[ "password" ]);
        $nome= $_POST["nome"];
        $cognome= $_POST["cognome"];
        $città= $_POST["citta"];
        $via= $_POST["via"];
        $civico= $_POST["civico"];
        $telefono= $_POST["telefono"];	
        $img="";


            $sql = "INSERT INTO utente
            VALUES ('{$email}','{$nome}','{$cognome}','{$città}','{$via}','{$civico}','{$telefono}','{$password}','{$img}')";
        
    if ($conn->query($sql) === TRUE) {
            header("location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


?>
<html>
	<head>

		<title>Registrato!</title>
	</head>
	<body class="registrato">
		<h1 class="titolino"> Hai effettuato la registrazione con successo! </h1>
		
		<a href="index.php"> <button class="sbagliato" >Index</button></a>
	</body>
</html>	