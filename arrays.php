<!-- 
    Arre(glos en php
-->

<?php 

$arreglo = array('manzana','pera','durazno');

for($i = 0; $i < count($arreglo); $i++){
    echo $arreglo[$i]. "<br>";
}

foreach($arreglo as $key => $value){
    echo "indice: ". $key. " - ". $value. "<br>";
}
?>