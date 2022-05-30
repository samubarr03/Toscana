<?php
	session_start();
    include "data.php";
    require_once ('product.php');
    

	if(!isset($_SESSION['email'])){
	    header("location: login.html");
	}
    $message = $_SESSION['email'];
    echo "<script type='text/javascript'>alert('$message');</script>";

    $percorso=0;
    $att=0;
    $GenAtt=0;

    if($_GET['action']=="AttPercorso"){  //mostra attrazioni di un percorso
        $att=1;
        $id=$_GET['id'];    
        $sql = "SELECT * FROM attrazione,PercorsohaAttrazione WHERE PercorsoHaAttrazione.idPercorso =".$id." AND Attrazione.id = PercorsoHaAttrazione.idAttrazione";   
    }
    else if($_GET['action']=="GenAtt"){
 
        $GenAtt=1;
        $id=$_GET['id']; 
        $sql = " SELECT * FROM attrazione WHERE id='{$id}'";
    }

?>    
<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Toscana Tour</title>

        <?php include "includes/css.html"; ?>

    </head>
    <style>
        .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 400px;
        margin: auto;
        text-align: center;
        font-family: arial;
        background-color: #dfffde;
        border: 1px solid rgba(0,0,0,.125);
        border-radius: 1rem;
        }

        .price {
        color: #009970;
        font-size: 200%;
        }

        .card button {
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: #009970;
        text-align: center;
        cursor: pointer;
        width: 60%;
        font-size: 18px;
        }

        .card button:hover {
        opacity: 0.7;
        }
        #percorsi h1 {
        margin: 0 0 10px 0;
        font-size: 48px;
        font-weight: 700;
        line-height: 42px;
        color: #011a00;
        }
        #percorsi p{
            margin: 0 0 3px 0;
            font-size: 20px;
            color: #000; 
        }
        #percorsi .price {
        color: #009970;
        font-size: 200%;
        font-weight: 500;
        }
    </style>
    <body>

  <?php include "includes/header.php";?>

  <section id="hero" class="d-flex align-items-center" style="background:url(img/hero_toscana.jpg)">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>TOUR</h1>
      <h2>I migliori percorsi e luoghi da visitare della Toscana</h2>
      <!--<a href="" class="btn-get-started scrollto">ACCEDI</a>-->
    </div>
  </section>

  <main id="main">
    
  <?php include "includes/clienti.html";?>
  <br>
  </main>