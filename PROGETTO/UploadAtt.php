<?php
session_start();
	if(!isset($_SESSION['email']) || $_SESSION['email']!="admin@gmail.com" ){
	    header("location: login.html");
	}
    require_once ('data.php');

    $nome=$_POST["nome"];
    $descrizione=$_POST["descrizione"];
    $posizione=$_POST["posizione"];


    
    $upload_percorso = 'img/Immagini/';
    // salvo il percorso temporaneo dell'immagine caricata
    $file_tmp = $_FILES['img']['tmp_name'];
    // salvo il nome dell'immagine caricata
    $file_nome = $_FILES['img']['name'];
    // sposto l'immagine nel percorso che prima abbiamo deciso
    move_uploaded_file($file_tmp, $upload_percorso.$file_nome);


   

    //Include the necessary library for Ubuntu
    include('/usr/share/phpqrcode/qrlib.php');
    //Set the data for QR
    $text =$nome;

    //check the class is exist or not
    if(class_exists('QRcode'))
    {
        //Generate QR
        QRcode::png($text, 'QRImage.png');
    }else{
        //Print error message
        echo 'class is not loaded properly';
    }

?>
<html>
    <head>
    <title>QR Code Generator</title>
    </head>
    <body>
        <!-- display the QR image -->
        <img src="QRImage.png" />
    </body>
</html>
<img src="q1.php" />

<?php

    
    $sql = "INSERT INTO Percorso VALUES ('id','{$nome}','{$descrizione}','{$posizione}','$upload_percorso$file_nome')";    


    if ($conn->query($sql) === TRUE) {
        
        header("location: index.php");
    } else {
        header("location: Percorsi.php");
    }
    
  
?>
