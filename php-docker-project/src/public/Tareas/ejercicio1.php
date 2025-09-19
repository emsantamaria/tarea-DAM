<?php

 function Comparar(int $numero1, int $numero2): int|string{
    if ($numero1 == $numero2) {
        return "Ambos numeros son iguales";
    }
    if ($numero1 > $numero2) {
        return $numero1;
    }
    return $numero2;
 }

 echo Comparar(numero1: 1,numero2: 5);
?>