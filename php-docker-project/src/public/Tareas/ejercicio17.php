<?php

    function invertirNumero (int $valor): string{
        $numeroString = strrev(string: $valor);
        return $numeroString;
    }

    echo invertirNumero(valor: 657);
?>