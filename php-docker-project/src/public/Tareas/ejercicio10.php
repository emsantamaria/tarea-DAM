<?php
function factorial(int $numero): int|null{
    if ($numero < 0) {
        return null;
    }
    $final = 1;

    while ($numero >0) {
        $final = $final*$numero;
        $numero--;
    }
    return $final;
}

echo factorial(numero: 5);
?>