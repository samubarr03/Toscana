<?php

function component($nome,$id){
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
                        <a class=\"nome\" href=\"percorsi.php?id=$id\">
                            <center><div class=\"card-body\">
                                <h5 class=\"card-title\">$nome</h5> 
                            </div>                       
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

function genera($nome,$map,$descrizione){
    $element = 
        "<div class=\"container\" style=\"border-color: red\">
            <div class=\"row\" style=\"border-color: black, width: 100%\">
                <h1>$nome</h1>
            </div>
            <div class=\"row\" style=\"border-color: green\">
                <div class=\"col-6\">
                    $map
                </div>
                <div class=\"col-4\" style=\"border-color: blue\">
                    $descrizione
                </div>
            </div>
        </div>";

    echo $element;
}

?>