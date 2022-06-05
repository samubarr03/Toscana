
<?php
/*     
    $message = $_SESSION['email'];
    echo "<script type='text/javascript'>alert('$message');</script>";
*/
	session_start();

    if(!$_SESSION['email']){
	    header("location: login.html");
	}

    include "data.php";
    require "product.php";
    

    $percorso=0;
    $att=0;
    $GenAtt=0;
    $AddPercorso=0;
    $NewAtt=0;
    $AddAttP=0;

    if(isset($_GET['action'])){
        if($_GET['action']=="AttPercorso"){  //mostra attrazioni di un percorso
            $att=1;
            $id=$_GET['id'];    
            $sql = "SELECT * FROM attrazione,PercorsohaAttrazione WHERE PercorsoHaAttrazione.idPercorso =".$id." AND Attrazione.id = PercorsoHaAttrazione.idAttrazione";   
        }

        else if($_GET['action']=="rimuoviPercorso"){  //rimuove un percorso
            $id=$_GET['id'];     		
            $sql = "DELETE FROM Percorso WHERE id=$id";
            $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));	
            header('Location: percorsi.php'); 
        }

        
        else if($_GET['action']=="NewAttrazione"){
            $NewAtt=1;

        }    

        else if($_GET['action']=="AddAttrazioneApercorso"){
            $AddAttP=1;
            $id=$_GET['id']; 
        }

        else if($_GET['action']=="GenAtt"){
    
            $GenAtt=1;
            $id=$_GET['id']; 
            $sql = " SELECT * FROM attrazione WHERE id='{$id}'";
        }
        
        else if($_GET['action']=="AddPercorso"){ //genera percorso
            $AddPercorso=1;
        }
                
        else if($_GET['action']=="percorso"){  //mostra percorso
            $percorso=1;
            $id=$_GET['id']; 
            $sql = " SELECT * FROM Percorso WHERE id='{$id}'";
        }
    }    

    else{  //mostra tutti i percorsi
     
        $sql = "SELECT * FROM Percorso "; 
        $get=0;
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
        /*.card {
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
        }*/
     
        .inserisciAttrazioneButton{
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
    <body>

  <?php include "includes/header.php";?>

  <section id="hero" class="d-flex align-items-center" style="background:url(img/hero_toscana.jpg)">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>TOUR</h1>
      <h2>I migliori percorsi e luoghi da visitare della Toscana</h2>
    </div>
  </section>

  <main id="main">

  <?php include "includes/clienti.html";?>
  <br>
  </main>
            <?php
            
            if($att==1){
                $resultset = mysqli_query($conn, $sql);	

                if(mysqli_num_rows($resultset) > 0){
                    while($row = mysqli_fetch_array($resultset)){
                       
                        componentAtt($row['nome'],$row['id']);
                    }
                }
                if($_SESSION['email']=="admin@gmail.com")
                $element="
                    <div class=\"row\">
                        <div class=\"col-2\"></div>
                        <div class=\"col-8\">
                            <button class=\"dropbtn\"><a href=\"percorsi.php?action=AddAttrazioneApercorso&id=$id\" style=\"background-color: #198754; color: white;\">Inserisci Attrazione al percorso</a></button>   
                        </div>
                        <div class=\"col-2\"></div>
                    </div>          
                ";
                echo $element;    
                
            }
            else if($GenAtt==1){

                $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));	       
                if(mysqli_num_rows($resultset) > 0){                  
                    while($row = mysqli_fetch_array($resultset)){
                    
                        generaAtt($row['nome'],$row['map'],$row['descrizione'],$row['id']);
                    }
                }            

            }  
            else if($percorso==1){
                
                $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));	
               
                if(mysqli_num_rows($resultset) > 0){
               
                    
                    while($row = mysqli_fetch_array($resultset)){
                    
                        genera($row['nome'],$row['map'],$row['descrizione'],$row['id']);
                    }
  
                }

            }  
            else if($AddAttP==1){                    
                AddAttP($id);

             }

            else if($AddPercorso==1){                    
                AddPercorso();
            }

            else if($NewAtt==1){                    
                NewAtt();
            }

            else{
                
                    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));	
                            
                    if(mysqli_num_rows($resultset) > 0){
                            
                        while($row = mysqli_fetch_array($resultset)){
                            component($row['nome'],$row['id']);
                        }
                    }
                  
                    if($_SESSION['email']=="admin@gmail.com"){
                        $element="
                        <center>
                        <button class=\"inserisciAttrazioneButton\"><a href=\"percorsi.php?action=AddPercorso\">Inserisci percorso</a></button><br>
                        ";
                        echo $element;
                    }
            }       

                        
                    ?>
            </div> 
            
        </div>
    </div>
  <?php include "includes/footer.php";?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <!-- Importa JS-->
  <script src="js/purecounter.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/glightbox.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/validate.js"></script>
  <script src="js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>