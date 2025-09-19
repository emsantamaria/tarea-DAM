<?php

function juego(): string
{
    $numero = rand(min: 1, max: 20);
    $adivinado = true;
    while ($adivinado) {
        $nDado = readline(prompt: "ingresa un numero ");
        if ($nDado < $numero) {
            echo "el numero ingresado es mas pequeño \n";
        } else if ($nDado > $numero) {
            echo "el numero ingresado es mas grande \n";
        }
        if ($nDado == $numero) {
            $adivinado = false;
            break;
        }
    }
    return "Ganaste";
}

echo juego();
?>