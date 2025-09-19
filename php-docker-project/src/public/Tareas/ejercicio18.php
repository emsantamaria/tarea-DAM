<?php
    function palindromo (String $valor): bool{
        $alRevez = strrev(string: $valor);
        return $alRevez == $valor;
    }

    if (palindromo(valor: "pararap")){
        echo "dio true";
    }else{
        echo "dio false";
    }
?>