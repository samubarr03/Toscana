<?php



function component($nome, $descrizione){
    $element =
    
        " <style>
        input[type=\"number\"] {
            -webkit-appearance: textfield;
            -moz-appearance: textfield;
            appearance: textfield;
        }
        
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
        }
        
        .number-input {
            border: 0;
            display: inline-flex;
        }
        
        .number-input,
        .number-input * {
            box-sizing: border-box;
        }
        
        .number-input button {
            outline:none;
            -webkit-appearance: none;
            background-color: transparent;
            border: none;
            align-items: center;
            justify-content: center;
            width: 3rem;
            height: 3rem;
            cursor: pointer;
            margin: 0;
            position: relative;
            box-shadow: 0px 0px 1px #474747;
            border-radius: 50%;
        }
        
        .number-input button:before,
        .number-input button:after {
            display: inline-block;
            position: absolute;
            content: '';
            width: 1rem;
            height: 2px;
            background-color: #212121;
            transform: translate(-50%, -50%);
        }
        .number-input button.plus:after {
            transform: translate(-50%, -50%) rotate(90deg);
        }
        
        .number-input input[type=number] {
            font-family: sans-serif;
            max-width: 5rem;
            padding: .5rem;
            border: none;
            border-width: 0 2px;
            font-size: 2rem;
            height: 3rem;
            font-weight: bold;
            text-align: center;
            color:#9be3df;
        }
        .carte{
            display: inline-block;
            float:left;
            position: relative;
        }
    </style> 
   <div class=\"card shadow\" style=\"width: 15%; height: 40%; border-radius:0.5rem;display:inline-block;margin-right:4.5%;margin-left:4.5%;margin-top:3% \">
                    <div style=\"carte\">

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
                            
                             <input type='hidden' name='product_id' value='$id'>
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
    ";
    echo $element;
}


?>

