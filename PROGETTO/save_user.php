<?php

        include "data.php";

        $email= $_POST["email"];
        $password = hash ( 'sha256' , $_POST[ "password" ]);
        $nome= $_POST["nome"];
        $cognome= $_POST["cognome"];
        $tel= $_POST["telefono"];	


            $sql = "INSERT INTO utente
            VALUES (id, '{$nome}','{$cognome}', '{$tel}','{$email}','{$password}')";
        
    if ($conn->query($sql) === TRUE) {
            //header("location: index.php");
            $logged="Registrato";
            $log="Utente registrato con successo.";
    } else {
        
        $logged="Registrazione fallita";
        $log="Dati errati utente già registrato";
    }

     /*echo $nome;
      echo $cognome;
      echo $email;
      echo $tel;*/

?>
<!--
<html>
	<head>

		<title>Registrato!</title>
	</head>
	<body class="registrato">
		<h1 class="titolino"> Hai effettuato la registrazione con successo! </h1>
		
		<a href="index.php"> <button class="sbagliato" >Index</button></a>
	</body>
</html>	
-->
<!DOCTYPE html>
		
		<html lang="en" dir="ltr">
		  <head>
			<link rel="stylesheet" href="style.css">
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			
			<link rel="stylesheet" href="style.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

                        <title>Registrazione</title>

		  </head>
		  <body>
                        <div class="container">
			        <div class="wrapper">
                                        <center>
                                                       
                                        <div class="title"><?php echo $logged; ?></div>

                                        
                                        <p><?php echo $log; ?></p>
                                        <div class="signup-link">
                                                <a href="login.html">Accedi</a>
                                        </div>
                                        <div class="signup-link"> 
                                                <a href="index.php">Torna alla home</a>
                                        </div>
                                        </center>
			        </div>
                                
			</div>
		
		  </body>
		</html>