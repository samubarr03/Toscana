<?php include "data.php";?>
<?php


        $email= $_POST["email"];
        $pw= $_POST["password"];
        $password = hash ( 'sha256' , $_POST[ "password" ]);
        $nome= $_POST["nome"];
        $cognome= $_POST["cognome"];
        $telefono= $_POST["telefono"];	


            $sql = "INSERT INTO utente
            VALUES (id, '{$nome}','{$cognome}', '{$tel}','{$email}','{$password}')";
        
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