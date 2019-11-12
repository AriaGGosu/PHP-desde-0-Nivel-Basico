<!-- Sentencias if - else if - else --> 

<?php 

    $manzana = true;
    $durazno = false;
    $melon = false;

    if($manzana == $durazno){
        echo "paso la primera condicional  'if' ";
    }elseif($durazno == $melon) {
        echo "paso la segunda condicional 'elseif' ";        
    }else {
        echo "paso a la tercera condicional 'else' ";
    }

?>