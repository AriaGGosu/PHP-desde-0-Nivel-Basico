<!--
    operadores logicos 
    > < >= <= <> != ==
-->

<?php 

    $a = 1;
    $b = 2;

    // mayor que 
    if($a > $b) {
        echo "true";
    } else {
        echo "false";
    }

    echo "<br>";

    // menor que 
    if($a < $b) {
        echo "true";
    } else {
        echo "false";
    }

    echo "<br>";

    // mayor o igual que 
    if($a >= $b) {
        echo "true";
    } else {
        echo "false";
    }

    echo "<br>";

    // menor o igual que 
    if($a <= $b) {
        echo "true";
    } else {
        echo "false";
    }

    echo "<br>";

    // diferente <> - != 
    if($a <> $b) {
        echo "true";
    } else {
        echo "false";
    }

    echo "<br>";

    // igual que 
    if($a === $b) {
        echo "true";
    } else {
        echo "false";
    }

?>