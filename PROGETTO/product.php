<?php



function component($nome, $descrizione){
    $element =
    
        "<style>
        
    </style> 
    <div class=\"container text-center position-relative\" data-aos=\"fade-in\"\ data-aos-delay=\"200\" style=\"background:#fff\">
    <div class=\"row\">
        <div class=\"col-lg\">

                        <center><div class=\"card-body\">
                            <h5 class=\"card-title\">$nome</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">

                            </p>
                            <h5>
                                
                                <span class=\"price\">€$descrizione</span>
                            </h5>
                            
                    
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
                    </div><hr>
    ";
    echo $element;
}


?>

