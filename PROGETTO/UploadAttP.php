<?php
session_start();
	if(!isset($_SESSION['email']) || $_SESSION['email']!="admin@gmail.com" ){
	    header("location: login.html");
	}
    require_once ('data.php');

    $id=$_GET["id"];
    $idP=$_GET["action"];

    $message =$idP;
    echo "<script type='text/javascript'>alert('$message');</script>";

    $sql = "INSERT INTO PercorsoHaAttrazione VALUES ('{$idP}','{$id}')";    

    if ($conn->query($sql) === TRUE) {
        
        header("location: index.php");
    } else {
        header("location: Percorsi.php");
    }
    
  
?>
