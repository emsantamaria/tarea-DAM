<?php
    function triangulo(int $tamanio): void{
        for ($i=0; $i < $tamanio; $i++) { 
            for ($j=0; $j <= $i; $j++) { 
                echo "*";
            }
            echo "\n";
        }
    }
    triangulo(tamanio: 5);
?>