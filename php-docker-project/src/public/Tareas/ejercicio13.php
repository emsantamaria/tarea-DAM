<?php
 function multiplo(int $valor): array{
    $numeros = [];
    if ($valor <= 0||$valor>=100) {
        return $numeros;
    }
    $resultado = 0;
    $multiplicar = 1;
    while ($resultado <= 100) {
        $resultado = $multiplicar * $valor;
        if ($resultado > 100) {
            return $numeros;
        }
        array_push(array: $numeros, values: $resultado);
        $multiplicar++;
    }
    return $numeros;
 }

 $numeros = multiplo(valor: 100);
 foreach ($numeros as $key => $value) {
    echo $value . "\n";
 }
?>