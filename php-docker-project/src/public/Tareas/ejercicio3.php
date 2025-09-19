<?php

function comprobacion(int $valor): string{
    $comprobado = "positivo";
    if ($valor == 0) {
        $comprobado = "0";
    }
    if ($valor < 0) {
        $comprobado = "negativo";
    }
    return $comprobado;
 }

 echo Comprobacion(valor: 0);
?>