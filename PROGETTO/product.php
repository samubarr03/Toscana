<?php

function component($nome){
    $element =
    
        "<style>
            .nome_percorso{
                color: #009970;
                background-color: red;
            }
            .rettangolo_percorso{
                background-color: red;
            }
        </style> 
    <div class=\"container text-center position-relative\" data-aos=\"fade-in\"\ data-aos-delay=\"200\" style=\"background:#fff\">
        <div class=\"row\">
            <div class=\"col-lg\">
            <div class=\"rettangolo_percorso\">
                <a class=\"nome_percorso\" href=\"percorsi.php?action=$nome\">
                        <center><div class=\"card-body\">
                            <h5 class=\"card-title\">$nome</h5>
                            <h6>
                                <i class=\"fas fa-star\">$descrizione</i>
                            </h6>
                        
        </a>
        </div>
                            
                        ";     
                        if(isset($_SESSION['email'])){
                        if($_SESSION['email']=="admin@gmail.com"){
                            
                            $element=$element."
                        <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"rem\">  <a href=\"carrello.php?action=rimuovi&id=$id\">Rimuovi Dal carrello al carrello.</a><i class=\"fas fa-shopping-cart\"></i></button> </center>";
                        
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

function genera($nome,$img,$descrizione){
    $element =
    
        "<style>
        
        </style> 

    ";
    echo $element;
}

?>