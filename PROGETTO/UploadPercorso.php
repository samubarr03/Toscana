<?php
session_start();
	if(!isset($_SESSION['email']) || $_SESSION['email']!="admin@gmail.com" ){
	    header("location: login.html");
	}
    require_once ('data.php');

    $nome=$_POST["nome"];
    $descrizione=$_POST["descrizione"];


    
    $upload_percorso = 'img/Immagini/';
    // salvo il percorso temporaneo dell'immagine caricata
    $file_tmp = $_FILES['img']['tmp_name'];
    // salvo il nome dell'immagine caricata
    $file_nome = $_FILES['img']['name'];
    // sposto l'immagine nel percorso che prima abbiamo deciso
    move_uploaded_file($file_tmp, $upload_percorso.$file_nome);



    
    $sql = "INSERT INTO Percorso VALUES ('id','{$nome}','{$descrizione}','$upload_percorso$file_nome')";    


    if ($conn->query($sql) === TRUE) {
        
        header("location: index.php");
    } else {
        header("location: Percorsi.php");
    }
    
  
?>
