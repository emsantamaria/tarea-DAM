<?php
    function sumaPares() {
        $pares = 0;
        $impares = 0;
        for ($i=0; $i < 101; $i++) { 
            if ($i%2 == 0) {
                $pares += $i;
            }else{
                $impares += $i;
            }
        }
        echo $pares;
        echo "\n";
        echo $impares;
    }

    sumaPares();
?>