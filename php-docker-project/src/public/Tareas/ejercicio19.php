<?php
    include "ejercicio16.php";
    function mcd(int $valor1, int $valor2){
        $divisoresDeValor1 = divisores(valor: $valor1);
        $divisoresDeValor2 = divisores(valor: $valor2);
        $arrayFinal = array_intersect(array: $divisoresDeValor1, arrays: $divisoresDeValor2);
        return $arrayFinal[0];
    }

    echo mcd(valor1: 100,valor2: 500);
?>