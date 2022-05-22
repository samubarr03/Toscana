<?php

function component($nome,$id){
    $element =
    
        "<style>
            .nome_percorso{
                color: #009970;
            }
            .rettangolo_percorso{
                background-color: blue;
            }
        </style> 
        <div class=\"container text-center position-relative\" data-aos=\"fade-in\"\ data-aos-delay=\"200\" style=\"background:#fff\">
            <div class=\"row\">
                <div class=\"col-11\">
                    <div class=\"rettangolo_percorso\">
                        <a class=\"nome\" href=\"percorsi.php?action=percorso&id=$id\">
                            <center><div class=\"card-body\">
                                <h5 class=\"card-title\">$nome</h5> 
                            </div>                       
                        </a>
                    </div>
                </div>      
                <div class=\"col-1\">
                        ";     
                        if(isset($_SESSION['email'])){
                        if($_SESSION['email']=="admin@gmail.com"){
                            
                            $element=$element."
                        <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"rem\" style=\"float: right; @media screen and (max-width: 1200px) {.rettangolo_percorso{width: 60%;} .}\">  
                            <a href=\"carrello.php?action=rimuovi&id=$id\">Rimuovi</a><i class=\"fas fa-shopping-cart\"></i>
                        </button>
                        
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
    $element = 
        "
        <hr>
        <div class=\"GoogleMaps\" style=\"float:left;\">
            <br><center><h1 style=\"font-size: 80px;\">$nome</h1></center>
                <div style =\"margin-left:10%; margin-right:10%; margin-top:1%;\">
                <div id=\"map\"></div>
                <script type=\"text/javascript\" src=\"leaflet.js\"></script> 
                </div><BR><div align =\"center\"><input type=\"button\" class=\"button\" value=\"Input Button\"></div>
            </div>
            
            <div class=\"InfoEQR\" style=\"float:left;\">
            <br><center><h2>Lista attrazioni<h2></center>
            <div style=\"overflow-y: scroll; width:80%; height:50%; margin-left:10%\">  
                </div><br>
            <div align =\"center\"><img src=\"img/download.png\"></div>
            </div>
            <hr>
        
        <hr><br><br>

        <div class=\"container\" style=\"border-color: red\">
            <div class=\"row\" style=\"border-color: black, width: 100%\">
                <h1>$nome</h1>
            </div>
            <div class=\"row\" style=\"border-color: green\">
                <div class=\"col-6\">
                    <img src=img/$map alt=\"Image1\" class=\"img-fluid card-img-top\" style=\"width: 18rem; height: 14rem; \">
                </div>
                <div class=\"col-4\" style=\"border-color: blue\">
                    $descrizione
                </div>
            </div>
            <a href=\"percorsi.php?action=AttPercorso&id=$id\"><button>Visualizza Attrazioni</button></a>
        </div>
        <hr>";

    echo $element;
}

function componentAtt($nome,$id){
    $element =
    
        "<style>
            .nome_percorso{
                color: #009970;
            }
            .rettangolo_percorso{
                background-color: blue;
            }
        </style> 
        <div class=\"container text-center position-relative\" data-aos=\"fade-in\"\ data-aos-delay=\"200\" style=\"background:#fff\">
            <div class=\"row\">
                <div class=\"col-11\">
                    <div class=\"rettangolo_percorso\">
                        <a class=\"nome\" href=\"percorsi.php?action=GenAtt&id=$id\">
                            <center><div class=\"card-body\">
                                <h5 class=\"card-title\">$nome</h5> 
                            </div>                       
                        </a>
                    </div>
                </div>      
                <div class=\"col-1\">
                        ";     
                        if(isset($_SESSION['email'])){
                        if($_SESSION['email']=="admin@gmail.com"){
                            
                            $element=$element."
                        <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"rem\" style=\"float: right; @media screen and (max-width: 1200px) {.rettangolo_percorso{width: 60%;} .}\">  
                            <a href=\"carrello.php?action=rimuovi&id=$id\">Rimuovi</a><i class=\"fas fa-shopping-cart\"></i>
                        </button>
                        
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

function AddPercorso(){
    $element = 
        "
        <hr>

        <div class=\"container\" style=\"border-color: red\">
            <form method=\"POST\" action=\"UploadPercorso.php\" enctype=\"multipart/form-data\">
                <div class=\"row\" style=\"border-color: black, width: 100%\">
                    <h2>⠀ Nome:</h2> <input name=\"nome\" ID=\"abc\" type=\"text\">
                </div>
                <div class=\"row\" style=\"border-color: green\">
                    
                        <br>
                        <h2>Scegli immagine </h2> 
                        <input name=\"img\" type=\"file\" />
                    
                    
                        <h2> descrizione </h2><input name=\"descrizione\" ID=\"abc\" type=\"text\" >
                        
                </div>
            <input ID=\"invia\" type=\"submit\" value=\"Salva\">	
        </div>
        <hr>";

    echo $element;
}
?>