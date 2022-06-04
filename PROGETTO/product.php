
<head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <script type="text/javascript" src="leaflet.js"></script>
        <title><?php $nome ?></title> <!-- COME FACCIO A METTERE STO TITOLO? -->

        <?php include "includes/css.html"; ?>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
  integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
  crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
  <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
  integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
  crossorigin=""></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <script type="text/javascript" src="leaflet.js"></script>
  <title><?php $nome ?></title>

  <?php
    include "includes/css.html";
   ?>

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin=""/>
        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
            integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
            crossorigin="">
        </script>
</head>
<style>
    .GoogleMaps {
      margin-left:3%;
      width:67%;
      height:900px;
      background-color:#009970;
      }
      .a {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 400%;
      margin: 4px 2px;
      cursor: pointer;
    }
    h1 {
        display: block;
        font-size: 190px;
        color:white;
    }

    h5 {
        font-size: 2.25rem;
        color:#198754;
    }
    h2 {
        display: block;
        font-size: 75px;
        color:white;
    }
    p {
        display: block;
        margin-top: 1em;
        margin-bottom: 1em;
        margin-left: 5%;
        margin-right: 5%;
        font-size: 2.25rem;
        color: #198754;
    }
    
    .InfoEQR {
      margin-left:1%;
      margin-right:1%;
      width:27%;
      height:900px;
      background-color:#dfffde;
      }
      /* width */
    ::-webkit-scrollbar {
      width: 15px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey; 
      border-radius: 10px;
    }
    
    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #696969; 
      border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #7f7f7f; 
    }
    #map { 
      height: 75%; width:100%;
      }
      .rimuovi {
        display: inline-block;
    padding: 10px 20px;
    font-size: 30px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    color: #fff;
    background-color: #198754;
    border: none;
    border-radius: 50%;
    }
    .button2 {
    position: relative;
    background-color: #4CAF50;
    border: none;
    font-size: 28px;
    color: #FFFFFF;
    padding: 20px;
    width: 200px;
    text-align: center;
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
    }
</style>
<?php

function component($nome,$id){
    $element =

        "<style>
            .nome_percorso{
                color: white;
            }
            .rettangolo_percorso{
                background-color: #198754;
                width: 50%;
                margin-left:25%;
                height: 100%;
                text-align: center;
                padding-top:18px;
                color: white
            }
        </style> 
        <div class=\"container text-center position-relative\" data-aos=\"fade-in\"\ data-aos-delay=\"200\" style=\"background:#fff\">
            <div class=\"row\">
                <div class=\"col-11\">
                    <div class=\"rettangolo_percorso\">
                        <a class=\"nome\" href=\"percorsi.php?action=percorso&id=$id\">
                            <h5 style=\"color:white\">$nome</h5> 
                             
                        </a>
                    </div>
                </div>      
                <div class=\"col-1\"> 
                        ";      
                        if(isset($_SESSION['email'])){
                        if($_SESSION['email']=="admin@gmail.com"){
                            
                            $element=$element."
                          
                            <a href=\"percorsi.php?action=rimuoviPercorso&id=$id\" class=\"rimuovi\">-</a>
                        
                        ";
                        
                        }   
                    }
                        $element=$element."          
                </div>
            </div>
        </div>
                    
        <hr>

    ";
    echo $element;
}

/*
<button type=\"submit\" class=\"btn btn-warning my-3\" name=\"ad\">
    <a href=\"carrello.php?action=aggiungi&id=$id\">Aggiungi</a><i class=\"fas fa-shopping-cart\"></i>
</button>
*/

function genera($nome,$map,$descrizione,$id){
    include "data.php";
    $sql = "SELECT nome FROM attrazione,PercorsohaAttrazione WHERE PercorsoHaAttrazione.idPercorso =".$id." AND Attrazione.id = PercorsoHaAttrazione.idAttrazione";  
    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));

    $element = 
        "
        <hr>
        <div class=\"GoogleMaps\" style=\"float:left;\">
            <br><center><h1 style=\"font-size: 80px;\">$nome</h1></center>
                <div style =\"margin-left:10%; margin-right:10%; margin-top:1%;\">
                <div id=\"map\"></div>
                <script type=\"text/javascript\" src=\"leaflet.js\"></script> 
                </div><BR><div align =\"center\"><a href=\"percorsi.php?action=AttPercorso&id=$id\"; class=\"button2\">Visualizza Attrazioni</a></div>
                </div>
            
                <div class=\"InfoEQR\" style=\"float:left;\">
                <br><center><h2>Descrizione<h2></center>
            ";

            if(mysqli_num_rows($resultset) > 0){
                while($row = mysqli_fetch_array($resultset)){
                    $nome=$row['nome'];
                    $elem = "    
                    <h1>$nome</h1>
                    ";
                    echo $elem;
                }    
        
            }
            $element=$element." 
            <div style=\"overflow-y: scroll; width:80%; height:50%; margin-left:10%\">
            </div><BR><div align =\"center\"><a href=\"scanner.php\"; class=\"button2\">Scannerizza Qr code</a></div>
                </div><br>
            
            </div>
            <hr>
        
        <hr><br><br>

        <div class=\"container\" style=\"border-color: red\">
            <div class=\"row\" style=\"border-color: black, width: 100%\">

            
           
        </div>
        <hr>";

    echo $element;
}


function componentAtt($nome,$id){
    $element =

        "<style>
            .nome_percorso{
                color: white;
            }
            .rettangolo_percorso{
                background-color: #198754;
                width: 50%;
                margin-left:25%;
                height: 100%;
                text-align: center;
                padding-top:18px;
                color: white
            }
        </style> 
        <div class=\"container text-center position-relative\" data-aos=\"fade-in\"\ data-aos-delay=\"200\" style=\"background:#fff\">
            <div class=\"row\">
                <div class=\"col-11\">
                    <div class=\"rettangolo_percorso\">
                    <a class=\"nome\" href=\"percorsi.php?action=GenAtt&id=$id\">
                            <h5 style=\"color:white\">$nome</h5> 
                             
                        </a>
                    </div>
                </div>      
                <div class=\"col-1\"> 
                        ";      
                        if(isset($_SESSION['email'])){
                        if($_SESSION['email']=="admin@gmail.com"){
                            
                            $element=$element."
                          
                            <a href=\"percorsi.php?action=rimuoviPercorso&id=$id\" class=\"rimuovi\">-</a>
                        
                        ";
                        
                        }   
                    }
                        $element=$element."          
                </div>
            </div>
        </div>
                    
        <hr>

    ";
    echo $element;
}


function AddPercorso(){ //form crea percorso
    $element = 
        "
        <style>
        .titoliAddPercorso{
            color: black;
            font-size: 30px;
        }
        .salva{
            background-color: #198754;
            border-width: thin;
            border-color: black;
            color: white;
        }
        .inputText{
            width: 100%
        }
        @media screen and (max-width: 1200px) {
            .inputText {
              width: 80%;
              float:center;
            }
            .titoliAddPercorso{
                color: black;
                font-size: 21px;
            }
          }
        </style>

        <hr>
        <div class=\"container\" style=\"border-color: red\">
            <div class=\"row\">
                <div class=\"col-2\">
                </div>

                <div class=\"col-8\">
                        <form method=\"POST\" action=\"UploadPercorso.php\" enctype=\"multipart/form-data\">
                            <div class=\"row\" style=\"border-color: black, width: 100%\">

                                <p class=\"titoliAddPercorso\">Inserisci il nome del percorso:</p> <input class=\"inputText\" name=\"nome\" placeholder=\"nome\" ID=\"abc\" type=\"text\">

                            </div>
                            <div class=\"row\" style=\"border-color: #198754\">
                                
                                <br><p class=\"titoliAddPercorso\">Aggiungi una descrizione:</p><input class=\"inputText\" name=\"descrizione\" placeholder=\"descrizione\" ID=\"abc\" type=\"text\" >

                                <br>
                                <p class=\"titoliAddPercorso\">Scegli immagine:</p> 
                                <input class=\"inputText\" name=\"img\" type=\"file\" />
                                    
                            </div>
                        <br><center><input class=\"salva\" ID=\"invia\" type=\"submit\" value=\"Salva\"></center>
                </div>        
                <div class=\"col-2\">
                </div>	
            </div>	
        </div>
        <hr>";

    echo $element;
}

function AddAttP($id){ //form collega attrazione a percorso
    include "data.php";
    $sql = "SELECT * FROM attrazione,PercorsohaAttrazione WHERE PercorsoHaAttrazione.idPercorso =".$id." AND Attrazione.id = PercorsoHaAttrazione.idAttrazione";  
    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
    
    $element = "
        <form name='form' action='pagin.php' method='GET'>
        Scegli i tuoi frutti preferiti:
        <select name='Attrazioni' >
    ";
    if(mysqli_num_rows($resultset) > 0){
        while($row = mysqli_fetch_array($resultset)){            
            echo "<option value=\"" . $row['id'] . "\">" . $row['nome'] . "</option>";
        }    

    }
        
    $element=$element."     
        </select>
    
        <input type='submit' value='Conferma'>
    
    </form>
    
    <a href=\"percorsi.php?action=NewAttrazione\">CreaNuovaAttrazione</a><i class=\"fas fa-shopping-cart\"></i>

    ";

    echo $element;
}

function NewAtt(){ //form crea attrazione
    $element = 
        "
        <style>
        .titoliAddAttrazione{
            color: black;
            font-size: 30px;
        }
        .salva{
            background-color: #198754;
            border-width: thin;
            border-color: black;
            color: white;
        }
        .inputText{
            width: 100%
        }
        @media screen and (max-width: 1200px) {
            .inputText {
              width: 80%;
              float:center;
            }
            .titoliAddAttrazione{
                color: black;
                font-size: 21px;
            }
          }
        </style>
        
        <hr>
        <div class=\"container\" style=\"border-color: red\">
            <div class=\"row\">
                <div class=\"col-2\">
                </div>

                <div class=\"col-8\">
                        <form method=\"POST\" action=\"UploadAtt.php\" enctype=\"multipart/form-data\">
                            <div class=\"row\" style=\"border-color: black, width: 100%\">

                                <p class=\"titoliAddAttrazione\">Inserisci il nome dell'attrazione:</p> <input class=\"inputText\" name=\"nome\" placeholder=\"nome\" ID=\"abc\" type=\"text\">
                            </div>

                            <div class=\"row\" style=\"border-color: #198754\">
                                
                                <br><p class=\"titoliAddAttrazione\">Aggiungi coordinate:</p><input class=\"inputText\" name=\"posizione\" placeholder=\"41.40338, 2.17403\" ID=\"abc\" type=\"text\" >  
                            </div>

                            <div class=\"row\" style=\"border-color: #198754\">
                                
                                <br><p class=\"titoliAddAttrazione\">Aggiungi una descrizione:</p><input class=\"inputText\" name=\"descrizione\" placeholder=\"descrizione\" ID=\"abc\" type=\"text\" >

                                <br>
                                <p class=\"titoliAddAttrazione\">Scegli immagine:</p> 
                                <input class=\"inputText\" name=\"img\" type=\"file\" />  
                            </div>

                        <br><center><input class=\"salva\" ID=\"invia\" type=\"submit\" value=\"Salva\"></center>
                </div>        
                <div class=\"col-2\">
                </div>	
            </div>	
        </div>
        <hr>";

    echo $element;
}


function generaAtt($nome,$map,$descrizione,$id){
    $element = 
        "
        <hr>
        <div class=\"GoogleMaps\" style=\"float:left;\">
            <br><center><h1 style=\"font-size: 80px;\">$nome</h1></center>
                <div style =\"margin-left:10%; margin-right:10%; margin-top:1%;\">
                <img src=\"img/att/$map\" alt=\"img/att/$map\" style=\" width:100%; height:70%;\" >
                
                </div><BR><BR><div align =\"center\"><a href=\"percorsi.php?action=AttPercorso&id=$id\"; class=\"button2\">indietro</a></div>
                </div>
            
            <div class=\"InfoEQR\" style=\"float:left;\">
            <br><center><h2>Descrizione<h2></center>
            <p> $descrizione </p>
            <div style=\"overflow-y: scroll; width:80%; height:50%; margin-left:10%\">

                </div><br>
            
            </div>
            <hr>
        
        <hr><br><br>

        <div class=\"container\" style=\"border-color: red\">
            <div class=\"row\" style=\"border-color: black, width: 100%\">

            
           
        </div>
        <hr>";

    echo $element;
}

?>