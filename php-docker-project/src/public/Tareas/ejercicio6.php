<?php
 function sumaCalculada(): int{
    $numeroFinal = 0;
    for ($i=0; $i < 51; $i++) { 
        $numeroFinal += $i;
    }
    return $numeroFinal;
 }

 echo sumaCalculada();
?>