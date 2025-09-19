<?php
 function cuentaAtras(): String{
    for ($i=10; $i > 0; $i--) { 
        echo $i . "\n";
    }
    return "¡Fin!";
 }

 echo cuentaAtras();
?>