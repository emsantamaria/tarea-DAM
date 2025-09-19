<?php
 function TablaMultiplicar(int $numero): void{
    for ($i=1; $i < 11; $i++) { 
        echo $i * $numero . "\n";
    }
 }

 TablaMultiplicar(numero: 8);
?>