<?php
    
    function divisores(int $valor): array{
        $divisor = [];
        for ($i=$valor-1; $i > 0; $i--) { 
            if ($valor%$i == 0) {
                array_push(array: $divisor, values: $i);
            }
        }
        return $divisor;
    }


    function perfecto(int $valor): string{
        $divisor = divisores(valor: $valor);
        $suma = array_sum(array: $divisor);
        if ($valor == $suma) {
            return "true";
        }
        return "false";
    }
?>