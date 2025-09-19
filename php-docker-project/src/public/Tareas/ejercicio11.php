<?php
 function primos(): array {
    $numeros = [];
    for ($i = 2; $i < 51; $i++) {
        array_push(array: $numeros, values: $i);
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                array_pop(array: $numeros);
                break;
            }
        }
    }
    return $numeros;
}
$numeros = primos();
foreach ($numeros as $key => $value) {
    echo $value . "\n";
}
?>