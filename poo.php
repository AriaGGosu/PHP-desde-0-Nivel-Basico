<!-- 
    programacion orientada a objetos 
-->

<?php 

    class Color {
        public $remera;
        public $gorra;

        public function Ropa(){
            echo "<p>Ropa de color, Remera: $this->remera, Gorra: $this->gorra </p>";

        }
    }

$a = new Color();
$a -> remera = "blanca";
$a -> gorra = "roja";
$a -> Ropa();

$b = new Color();
$b -> remera = "azul";
$b -> gorra = "verde";
$b -> Ropa();

?>