<!-- 
    bucles o ciclos 
    - for 
    - while 
    - do while
-->

<?php 

    for($i=1; $i <= 10; $i++){
        echo $i. " ciclo for" ."<br>";
    }

    $i = 0;

    while($i <= 10){
        echo $i. " ciclo while " . "<br>";
        $i+=2;
    }

    $i = 5;

    do {
        echo $i. " ciclo do while ". "<br>";
        $i += 5; 
    }while($i <= 25)

?>